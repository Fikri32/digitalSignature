<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123')
        ]);

        $user->assignRole('admin');

        $spv = User::create([
            'name' => 'Supervisior',
            'email' => 'spv@spv.com',
            'password' => bcrypt('admin123')
        ]);

        $spv->assignRole('spv');

        $manag = User::create([
            'name' => 'Manager',
            'email' => 'manag@manag.com',
            'password' => bcrypt('admin123')
        ]);

        $manag->assignRole('manager');
    }
}
