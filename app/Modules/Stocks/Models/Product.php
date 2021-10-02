<?php

namespace Stocks\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory , SoftDeletes;
    protected $table = 'products';

    protected $fillable= [
        'name','code','desc','primary_purchase_price','primary_sale_price','category_id','brand_id','slug','created_at','updated_at'
    ];

    protected $hidden = [
        'created_at','updated_at',
    ];

    public function category(){
        return $this->hasOne('App\Models\Category','category_id');
    }

    public function brand(){
        return $this->hasOne('App\Models\Brand','brand_id');
    }

    // m-m with sales && purchases && suppliers (3 pivot tables)
}
