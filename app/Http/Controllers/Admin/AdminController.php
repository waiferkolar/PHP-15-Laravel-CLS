<?php

namespace App\Http\Controllers\Admin;

use App\BMLibby\Helper;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function message()
    {
        $users = User::all();
        return view("admin.message", compact('users'))->with("msg_success", "Registration Success");
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
        return view("admin.tutorial_content", compact('tutorial'));
    }

    public function editRole($id)
    {
        $user = User::whereId($id)->first();
        $roles = Role::all();
        return view('admin.role_edit', compact('user', 'roles'));
    }

    public function addRole($userId, $role)
    {
        $user = User::whereId($userId)->first();
        $user->assignRole($role);
        return redirect("admin/role/" . $userId . "/edit");
    }

    public function removeRole($userId, $role)
    {
        $user = User::whereId($userId)->first();
        $user->removeRole($role);
        return redirect("admin/role/" . $userId . "/edit");
    }

    public function rolePermission()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.role_permission', compact('roles', 'permissions'));
    }
}
