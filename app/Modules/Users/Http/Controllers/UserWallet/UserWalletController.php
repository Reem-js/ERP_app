<?php

namespace Users\Http\Controllers\UserWallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserWalletController extends Controller
{
    //
    public function getWallet()
    {
        # code...
        return view('users::userWallet.wallet');
    }
}
