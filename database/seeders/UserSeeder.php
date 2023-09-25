<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
Use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Role::create([
            'role_name' => 'superadmin',

        ]); */


        User::create([
            'name' => 'admin',
            'email' => 'admin12345@gmail.com',
            'role_id' => 1,
            'password'=> Hash::make('admin12345'),


        ]);
    }
}
