<?php

namespace App\Http\Controllers\backend\installments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class installmentController extends Controller
{
    //
    public function  getInstallments(){
        return view('backend.installments.index');
    }
}
