<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //primer rol: member
        $role=new Role();
        $role->name='member';
        $role->save();

        //segundo rol: admin
        $role=new Role();
        $role->name='admin';
        $role->save();

        
    }
}
