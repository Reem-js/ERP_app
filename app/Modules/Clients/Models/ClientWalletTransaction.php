<?php

namespace Clients\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientWalletTransaction extends Model
{
    use HasFactory;

    public $fillable = [
        'client_id','client_wallet_id','reason','date','client_wallet_transactionable_type','client_wallet_transactionable_id',
        'transaction_date','transaction_status',
        'amount','slug','created_at','updated_at'
    ];

    protected $hidden = [
    ];

    // morph relation ( purchase / expenses / installment / sales  )
    public function transactions()
    {
        return $this->morphTo();
    }
}
