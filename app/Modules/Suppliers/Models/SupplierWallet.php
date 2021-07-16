<?php

namespace Suppliers\Models;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SupplierWallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id','total_paid','total_pending','status','number_of_transaction','total_value','slug','created_at','updated_at'

    ];


    //1:1 with supplier
    // public function supplier()
    // {
    //     return $this->belongsTo(Supplier::class);
    // }

    //1:M polymorphic relation with supplier_wallet_transaction
}
