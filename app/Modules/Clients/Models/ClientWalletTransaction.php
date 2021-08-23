<?php

namespace Clients\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientWalletTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_wallet_id','reason','client_wallet_transactionable_type','client_wallet_transactionable_id',
        'transaction_status','amount'
    ];

    protected $hidden = [
    ];

    // morph relation ( purchase / expenses / installment / sales  )
    public function transactions()
    {
        return $this->morphTo();
    }
}
