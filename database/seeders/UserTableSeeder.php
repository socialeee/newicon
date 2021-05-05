<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'sales']);
        Role::create(['name' => 'activator']);
        Role::create(['name' => 'maintainer']);
        Role::create(['name' => 'superuser']);

        // $sales = User::create([
        //     'name' => 'Sales 1',
        //     'nip' => '123456789',
        //     'password' => Hash::make('password'),
        // ]);
        // $sales->assignRole('sales');

        $activator = User::create([
            'name' => 'Admin Aktivasi',
            'nip' => '123456789',
            'password' => Hash::make('password'),
        ]);
        $activator->assignRole('activator');

        $superuser = user::create([
            'name' => 'admin',
            'nip' => '666666666',
            'password' => Hash::make('password'),
        ]);
        $superuser->assignRole('superuser');

        // $maintainer = User::create([
        //     'name' => 'Maintainer 1',
        //     'nip' => '123456777',
        //     'password' => Hash::make('password'),
        // ]);
        // $maintainer->assignRole('maintainer');
    }
}
