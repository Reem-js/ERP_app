<?php

namespace Suppliers\Http\Controllers;

// use Suppliers\Models\Supplier;
use App\Http\Controllers\Controller;
use Suppliers\Http\Requests\Supplier;


class testController extends Controller {
    public function test(Supplier $request )
    {
        # code...
        return view('Suppliers::test');
    }
}
