<?php

namespace App\Http\Controllers\Admin;

use App\BMLibby\Helper;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class AdminPostController extends Controller
{
    public function all($id = 1)
    {
        $permissions = Permission::all();
        $posts = Post::where('cat_id', $id)->get();
        return view('admin.post.all', compact('posts', 'permissions'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.post.create', compact('permissions'));
    }

    public function store(PostRequest $request)
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

        if ($con) {
            return redirect('admin/post')->with('msg_success', "Post Created!");
        } else {
            return redirect()->back()->with('msg_error', 'Post Created Fail!');
        }

    }
}
