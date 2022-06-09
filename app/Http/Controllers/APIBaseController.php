<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class APIBaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //seamlessly using - auth('api')->attempt($cred) => auth()->attempt($cred)
        // auth()->setDefaultDriver('api');

        $fakeUserId = 5;
        $this->makeFakeLogin($fakeUserId);

    }

    public function makeFakeLogin($fakeUserId)
    {
        auth()->loginUsingId($fakeUserId);
    }
}
