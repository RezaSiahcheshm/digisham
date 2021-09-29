<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id' ,
        'title' ,
        'description' ,
        'price' ,
        'inventory' ,
        'view_count' ,
        'image' ,
    ];

    /*rel cafe,user,product*/
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*rel cafe,user,product*/

    public function productable()
    {
        return $this->morphTo();
    }

    /*rel Comments,user,product*/

    public function comments()
    {
        return $this->morphMany(Comment::class , 'commentable');
    }

//    public function cafe()
//    {
//        return $this->belongsTo(Cafe::class);
//    }
}
