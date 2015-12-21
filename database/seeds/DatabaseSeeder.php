<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(TruncateTables::class);
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

class TruncateTables extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('password_resets')->truncate();
        DB::table('permission_role')->truncate();
        DB::table('permissions')->truncate();
        DB::table('role_user')->truncate();
        DB::table('roles')->truncate();
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
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

        $customer              = new Bican\Roles\Models\Role();
        $customer->name        = 'Customer';
        $customer->slug        = 'customer';
        $customer->description = 'Customer';
        $customer->save();

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
            'lastname_one' => 'Staff',
            'email'        => 'staff@staff.com',
            'password'     => bcrypt('staff***123'),
        ]);
        $staffUser->attachRole($staff);

        $customerUser = factory(App\Models\User::class)->create([
            'name'         => 'Customer',
            'lastname_one' => 'Customer',
            'email'        => 'customer@customer.com',
            'password'     => bcrypt('customer***123'),
        ]);
        $customerUser->attachRole($customer);
    }
}
