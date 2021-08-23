<?php

namespace Clients\Http\Controllers\ClientWallet;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientWalletController extends Controller
{
    //
    public function getClientWallet()
    {
        # code...
        return view('clients::clientWallet.index');
    }
    public function getClientWalletTrans($id)
    {
        # code...
        return view('clients::clientWallet.show');
    }
}
