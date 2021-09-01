<?php

namespace Suppliers\Models;

use App\Http\traits\mediaTrait;
use Suppliers\Models\PriceList;
use Suppliers\Models\SupplierWallet;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'phone'
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

    public function wallet()
    {
        return $this->hasOne(SupplierWallet::class);
    }


    public function pricelists()
    {
       return $this->hasMany(PriceList::class);
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
