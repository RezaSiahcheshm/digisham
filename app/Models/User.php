<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory , Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cafe_id' ,
        'name' ,
        'lastname' ,
        'accessLevel' ,
        'username' ,
        'mobile' ,
        'identifyNumber' ,
        'birthday' ,
        'email' ,
        'password' ,
        'two_factor_type' ,
        'gender' ,
        'is_superuser' ,
        'is_staff' ,

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password' ,
        'remember_token' ,
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime' ,
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function isStaffUser()
    {
        return $this->is_staff;
    }

    public function isManagerUser()
    {
        return $this->is_manager;
    }

    public function isMan()
    {
        return $this->gender === 'M';
    }
    public function isFemale()
    {
        return $this->gender === 'F';
    }
//    public function whatIsGender($value)
//    {
//        return $this->gender === $value;
//    }

    public function hasRole($roles)
    {
        return !!$roles->intersect($this->roles)->all();
    }

    public function hasPermission($permission)
    {
        return $this->permissions->contains('name' , $permission->name) || $this->hasRole($permission->roles) ;
    }

    /*rel user,token*/
    public function token()
    {
        return $this->hasMany(Token::class);
    }

    /*rel cafe,user,product*/
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /*rel Comments,user,product*/
    public function Comments()
    {
        return $this->hasMany(Comment::class);
    }
//    public function products()
//    {
//        return $this->morphToMany(Product::class,'productable');
//    }

//    public function cafe()
//    {
//        return $this->belongsTo(Cafe::class);
//    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


}
