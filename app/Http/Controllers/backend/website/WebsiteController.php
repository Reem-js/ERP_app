<?php

namespace App\Http\Controllers\backend\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function getWebsite()
    {
        # code...
        return view('backend.website.Website');
    }
}
