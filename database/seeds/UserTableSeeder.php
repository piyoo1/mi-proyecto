<?php

use Illuminate\Database\Seeder;
use LaraDex\Role;
use LaraDex\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','user')->first();
        $role_admin = Role::where('name','admin')->first();

        $role = new User();
        $role->name = "User";
        $role->email = "user@mail.com";
        $role->password = bcrypt('query');
        $role->save();
        $role->roles()->attach($role_user);

        $role = new User();
        $role->name = "Admin";
        $role->email = "admin@mail.com";
        $role->password = bcrypt('query');
        $role->save();
        $role->roles()->attach($role_admin);
    }
}
