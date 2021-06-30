<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nickname',
        'address',
        'phone',
        'pdf',
        'slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    //laravel Relations
    // 1-supplier wallet (1:1)
    // 2-stock(M:M)
    // 3-pricelist(1:1)
    //4-sales(1:M)
    //5-purchase(1:M)
}
