<?php

namespace App\Http\Controllers\backend\UserWallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserWalletController extends Controller
{
    //
    public function getWallet()
    {
        # code...
        return view('backend.userWallet.wallet');
    }
}
