<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\isEmpty;

/**
 * Class Token
 * @method static GetVerifyCodeMobile(string $code , string $mobile);
 * @method static string generateCode(string $mobile , mixed $user);
 */
class Token extends Model
{
    use Notifiable;

    protected $fillable = [
        'user_id' ,
        'mobile' ,
        'code' ,
        'expired_at' ,
    ];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeGenerateCode($guery , $mobile , $user)
    {
        $code = $this->getAliveCodeForMobile($mobile , $user)->code ?? null;

        if(empty($code)) {
            do {
                $code = mt_rand(100000 , 999999);
            } while ($this->checkCodeIsUnique($code));
            $this->saveCodeInDatabase($code , $mobile , $user);
        }
        return $code;
    }

    private function getAliveCodeForMobile($mobile , $user)
    {
        $this->destroyExpiredCode();
        return $user->token()->where('expired_at' , '>' , now())->whereMobile($mobile)->first();
    }

    private function checkCodeIsUnique($code)
    {
        return !!$this->whereCode($code)->first();
    }

    private function saveCodeInDatabase($code , $mobile , $user)
    {
        $user->token()->create([
            'code' => $code ,
            'mobile' => $mobile ,
            'expired_at' => now()->addMinutes(5) ,
        ]);
    }

    public function scopeGetVerifyCodeMobile($guery , $code , $user)
    {
        //TODO remove expired code automatic every day
        $this->destroyExpiredCode();
        return !!$user->token()->where('expired_at' , '>' , now())->whereCode($code)->first() ?? false;

    }

    public function scopeDestroyUsedCode($guery , $mobile)
    {
        $this->whereMobile($mobile)->delete();
    }

    private function destroyExpiredCode(): void
    {
        $this->where('expired_at' , '<' , now())->delete();
    }
}
