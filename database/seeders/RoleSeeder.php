<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'super-admin'],
            ['name' => 'admin'],
            ['name' => 'user'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}