<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.dashboard.dashboard');
    }
    public function switchMode (Request $request)
    {
        if($request->mode == 'Light')
            $newMode = 'Dark';
        else
            $newMode = 'Light';
        Session()->put('mode',$newMode );
        return redirect()->back();
    }
}
