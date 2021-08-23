<?php

namespace Clients\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\traits\walletTrait;
class ClientWallet extends Model
{
    use HasFactory,walletTrait;
    protected $fillable = [
        'client_id','total_paid','total_pending','status','number_of_transaction','total_value','reminder_day','slug',

    ];

    protected $hidden = [

    ];

    // private $transactionTable = 'clients\Models\ClientWalletTransaction';

    //1:1 with client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
