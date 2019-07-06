<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class AdminPostController extends Controller
{
    public function all($id = 1)
    {
        $permissions = Permission::all();
        $posts = Post::where('cat_id', $id)->get();
        return view('admin.post.all', compact('posts', 'permissions'));
    }
}
