<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'status',
        'type',
        'priceLvl',
        'facilities',
        'owner',
        'manager',
        'employee',
        'address',
        'location',
        'zipCode',
        'tel',
        'instagram',
        'time',
        'photos',
    ];

    /*rel cafe,user,product*/
    public function products()
    {
        return $this->morphMany(Product::class,'productable');
    }

    //
//    public function user()
//    {
//        return $this->hasMany(User::class);
//    }
}
