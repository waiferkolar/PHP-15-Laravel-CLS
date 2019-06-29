<?php

namespace App\Http\Controllers;

use App\BMLibby\Helper;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
         return view("home");
    }

    public function userHome()
    {
        return view("user.home")->with("msg_success", "Registration Success");
    }

    public function login()
    {
        return view("auth.login");
    }

}
