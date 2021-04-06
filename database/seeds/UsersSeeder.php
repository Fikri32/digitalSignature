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
          
            'password' => bcrypt('admin123')
        ]);

        $user->assignRole('admin');

        $spv = User::create([
            'name' => 'Supervisior',
        
            'password' => bcrypt('admin123')
        ]);

        $spv->assignRole('spv');

        $manag = User::create([
            'name' => 'Manager',
           
            'password' => bcrypt('admin123')
        ]);

        $manag->assignRole('manager');

        $autho = User::create([
            'name' => 'Authorized manager',
        
            'password' => bcrypt('admin123')
        ]);

        $autho->assignRole('authorized_manager');

        $security = User::create([
            'name' => 'Security',
         
            'password' => bcrypt('admin123')
        ]);

        $security->assignRole('security');
    }
}
