<?php

namespace App\Http\Controllers;

use App\BMLibby\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function tutoDetail($name)
    {
        $file = file_get_contents(public_path("files/tutorials.json"));
        $jsons = json_decode($file);
        $tutus = [];
        foreach ($jsons as $json) {
            if ($json->link == $name)
                array_push($tutus, $json);
        }
        return view("tutorial.single_tutorial", compact('tutus'));
    }

    public function tutoHome()
    {
//        $user = Auth::user();
//        $roleId = $user->roles()->pluck('name');
//        echo $roleId;
        $files = public_path("files/tutorials.json");
        $jsons = json_decode(file_get_contents($files));
        $testAry = [];
        foreach ($jsons as $json) {
            array_push($testAry, $json->name);
        }

        $arr = array_unique($testAry);
        $tutus = array_values($arr);
        return view("tutorial.home", compact('tutus'));
    }


    public function tutoContent($id)
    {
        $file = file_get_contents(public_path("files/tutorials.json"));
        $jsons = json_decode($file);

        $tutorial = null;
        foreach ($jsons as $json) {
            if ($json->id == $id) {
                $tutorial = $json;
            }
        }
        return view("tutorial.tutorial_content", compact('tutorial'));
    }
}
