<?php

namespace Database\Seeders\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo([
            'create comment',
            'edit comment',
            'delete comment',
        ]);
    }
}
