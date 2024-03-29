<?php

namespace Users\Models;

use Users\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\traits\walletTrait;
class UserWallet extends Model
{
    use HasFactory,walletTrait;

    protected $fillable = [
        'user_id','total_paid','total_pending','status','number_of_transaction','total_value','slug',

    ];

    protected $hidden = [

    ];


    private $transactionTable = 'Users\Models\UserWalletTransaction';
    //1:1 with admin
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
