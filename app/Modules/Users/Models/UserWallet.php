<?php

namespace Users\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserWallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','total_paid','total_pending','status','number_of_transaction','total_value','slug',

    ];

    protected $hidden = [

    ];


    //1:1 with admin
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
