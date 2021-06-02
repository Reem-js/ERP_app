<?php

namespace App\Http\Controllers\backend\ClientWallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientWalletController extends Controller
{
    //
    public function getClientWallet()
    {
        # code...
        return view('backend.clientWallet.index');
    }
    public function getClientWalletTrans($id)
    {
        # code...
        return view('backend.clientWallet.show');
    }
}
