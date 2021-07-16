<?php

namespace Suppliers\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierWalletController extends Controller
{
    //
    public function getSupplierWallet()
    {
        return view('Suppliers::backend.supplierWallet.wallet');
    }
    public function getSupplierWalletTrans($id)
    {
        # code...
        return view('Suppliers::backend.supplierWallet.show');
    }
}
