<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWalletTransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','admin_wallet_id','reason','date','user_wallet_transactionable_type','user_wallet_transactionable_id',
        'transaction_date','transaction_status',
        'amount','slug','created_at','updated_at'
    ];

    protected $hidden = [
    ];

    //Relations:
    //1-sales
    //2-purchases
    //3-installment
    //4-expenses
    public function transactions()
    {
        return $this->morphTo();
    }
}
