<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory(5)->create();
        // Create user role entries
        $adminRole = Role::where('role_name', 'Admin')->first();
        $user = User::first(); // Fetch the first user from the database
        if ($adminRole && $user) {
            $user->roles()->attach($adminRole->id);
        }
        $nonAdminRoles = Role::where('role_name', '!=', 'Admin')->get();
        $nonAdminUsers = User::whereDoesntHave('roles', function ($query) {
            $query->where('role_name', 'Admin');
        })->get();

        foreach ($nonAdminUsers as $nonAdminUser) {
            $role = $nonAdminRoles->random();
            $nonAdminUser->roles()->attach($role->id);
        }
    }
}
