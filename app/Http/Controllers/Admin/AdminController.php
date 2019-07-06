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

    public function createRole(Request $request)
    {
        $name = $request->get('name');
        Role::create(['name' => $name]);
        return redirect('admin/role_permission')->with('msg_success', "Role successfully added!");
    }

    public function createPermission(Request $request)
    {
        $name = $request->get('name');
        Permission::create(['name' => $name]);
        return redirect('admin/role_permission')->with('msg_success', "Permission successfully added!");
    }

    public function editPermission($userId)
    {
        $user = User::whereId($userId)->first();
        $permissions = Permission::all();

        return view('admin.permission_edit', compact('user', 'permissions'));
    }

    public function addPermission($userId, $name)
    {
        $user = User::whereId($userId)->first();
        $user->givePermissionTo($name);
        return redirect('admin/permission/' . $userId . '/edit')->with('msg_success', "Permission Added");
    }

    public function removePermission($userId, $name)
    {
        $user = User::whereId($userId)->first();
        $user->revokePermissionTo($name);
        return redirect('admin/permission/' . $userId . '/edit')->with('msg_success', "Permission Added");
    }
}
