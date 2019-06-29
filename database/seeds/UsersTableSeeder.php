<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $file = public_path("files/users.json");
        $data = file_get_contents($file);

        $objs = json_decode($data);
        foreach ($objs as $obj) {
            User::create([
                "id" => $obj->id,
                "name" => $obj->name,
                "email" => $obj->email,
                "email_verified_at" => $obj->email_verified_at,
                "password" => $obj->password,
                "remember_token" => $obj->remember_token,
                "created_at" => $obj->created_at,
                "updated_at" => $obj->updated_at
            ]);
        }
    }
}
