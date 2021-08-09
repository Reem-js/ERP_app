<?php

namespace Suppliers\Models;

use App\Http\traits\mediaTrait;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class Supplier extends Model
{
    use HasFactory;
    use Sluggable;
    use mediaTrait;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'nickname',
        'address',
        'phone',
        'slug'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name','id']
            ]
        ];
    }






    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];
    //laravel Relations
    // 1-supplier wallet (1:1)
    // 2-stock(M:M)
    // 3-pricelist(1:1)
    //4-sales(1:M)
    //5-purchase(1:M)
}
