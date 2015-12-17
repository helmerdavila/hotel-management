<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(Production::class);

        Model::reguard();
    }
}

class Production extends Seeder
{
    public function run()
    {
        $this->call(StaffSeeder::class);
    }
}

class Development extends Seeder
{
    public function run()
    {
        $this->call(StaffSeeder::class);
    }
}

class StaffSeeder extends Seeder
{
    public function run()
    {
        // Role Seeder
        $admin              = new Bican\Roles\Models\Role();
        $admin->name        = 'Admin';
        $admin->slug        = 'admin';
        $admin->description = 'Admin';
        $admin->save();

        $staff              = new Bican\Roles\Models\Role();
        $staff->name        = 'Staff';
        $staff->slug        = 'staff';
        $staff->description = 'Staff';
        $staff->save();

        // Create Users and assign roles
        $adminUser = factory(App\Models\User::class)->create([
            'name'         => 'Admin',
            'lastname_one' => 'Istrator',
            'email'        => 'admin@admin.com',
            'password'     => bcrypt('admin***123'),
        ]);
        $adminUser->attachRole($admin);

        $staffUser = factory(App\Models\User::class)->create([
            'name'         => 'Staff',
            'lastname_one' => 'User',
            'email'        => 'staff@staff.com',
            'password'     => bcrypt('staff***123'),
        ]);
        $staffUser->attachRole($staff);
    }
}
