<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiUserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);

        $user = User::first();
        $token = JWTAuth::fromUser($user);

        return response()->json(compact('token'));
    }

    public function allPost()
    {
        $posts = Post::all();
        $ary = [
            "con" => false,
            "posts" => null
        ];

        if ($posts != null) {
            $ary["con"] = true;
            $ary["posts"] = $posts;
        }
        return response()->json($ary);
    }

    public function createPost(Request $request)
    {

        $file = $request->file('image');
        $name = uniqid() . "_" . $file->getClientOriginalName();
        $file->move(public_path('imgs/uploads'), $name);
        $con = Post::create([
            "cat_id" => $request->get('category'),
            "title" => $request->get('title'),
            "author" => Auth::user()->id,
            "content" => $request->get('content'),
            "image" => $name,
            "description" => substr($request->get('content'), 0, 100)
        ]);
        $ary = [
            "con" => false,
            "posts" => null
        ];
        if ($con) {
            $ary['con'] = true;
        } else {
            $ary['con'] = false;

        }
        return response()->json($ary);
    }
}
