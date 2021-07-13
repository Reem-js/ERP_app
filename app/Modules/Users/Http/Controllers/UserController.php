<?php

namespace Users\Http\Controllers;

use App\Http\Controllers\Controller;
use Users\Http\Requests\UserRequest;

class UserController extends Controller {
    public function testing(UserRequest $request)
    {
        return view('Users::user');
    }
}