<?php

namespace App\Http\Controllers\backend\SupplierWallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierWalletController extends Controller
{
    //
    public function getSupplierWallet()
    {
        return view('backend.supplierWallet.wallet');
    }
    public function getSupplierWalletTrans($id)
    {
        # code...
        return view('backend.supplierWallet.show');
    }
}
