<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierWalletTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id','supplier_wallet_id','reason','date','supplier_wallet_transactionable_type','supplier_wallet_transactionable_id',
        'transaction_date','transaction_status',
        'amount','slug','created_at','updated_at'
    ];

    protected $hidden = [
    ];

    //Relations:
    //1-sales ('nooo' al supplier msh hy3mel sale)
    //2-purchases 'morph'
    //3-installment 'morph'
    //4-expenses 'morph'
    public function transactions()
    {
        return $this->morphTo();
    }
}
