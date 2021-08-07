<?php

namespace Suppliers\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierWalletController extends Controller
{
    //
    public function getSupplierWallet()
    {
        return view('Suppliers::supplierWallet.wallet');
    }
    public function getSupplierWalletTrans($id)
    {
        # code...
        return view('Suppliers::supplierWallet.show');
    }
}
