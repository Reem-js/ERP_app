<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClientWallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id','total_paid','total_pending','status','number_of_transaction','total_value','reminder_day','slug',

    ];

    protected $hidden = [

    ];


    //1:1 with client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
