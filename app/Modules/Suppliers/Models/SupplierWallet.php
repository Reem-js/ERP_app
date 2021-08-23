<?php

namespace Suppliers\Models;

use Suppliers\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\interfaces\walletInterface;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Http\traits\walletTrait;
class SupplierWallet extends Model implements walletInterface
{
    use HasFactory,SoftDeletes,Sluggable,walletTrait;
    protected $fillable = [
        'supplier_id','total_paid','total_pending','status','number_of_transaction','total_value'

    ];

    private $transactionTable =  'Suppliers\Models\SupplierWalletTransaction';
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }




    //1:1 with supplier
    public function sluggable(): array
    {
        // dd($this->supplier->name);
        return [
            'slug' => [
                'source' => ['supplier.name','id']
            ]
        ];
    }



    //1:M polymorphic relation with supplier_wallet_transaction
}
