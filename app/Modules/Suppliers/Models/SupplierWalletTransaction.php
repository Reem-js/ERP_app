<?php

namespace Suppliers\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierWalletTransaction extends Model
{
    use HasFactory;

    public $fillable = [
        'supplier_wallet_id',
        'reason',
        'supplier_wallet_transactionable_type',
        'supplier_wallet_transactionable_id',
        'transaction_status',
        'amount'
    ];


    //Relations:
    //1-sales ('nooo' al supplier msh hy3mel sale)
    //2-purchases 'morph'
    //3-installment 'morph'
    //4-expenses 'morph'
    // public function transactions()
    // {
    //     return $this->morphTo();
    // }
}
