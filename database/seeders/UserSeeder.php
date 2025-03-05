<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=new User();
        $user->name='Member1';
        $user->email='member1@piopio.com';
        $user->password=Hash::make('secret');
        $role_member=Role::where('name','member')->first();
        $user->save();
        $user->roles()->attach($role_member);
        //segundo usuario
        $user=new User();
        $user->name='Admin1';
        $user->email='admin1@piopio.com';
        $user->password=Hash::make('secret');
        $role_member=Role::where('name','admin')->first();
        $user->save();
        $user->roles()->attach($role_member);
        
    }
}
