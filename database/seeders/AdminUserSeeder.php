<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $user = User::updateOrCreate(
            [ 'email' => 'admin@mail.com' ],
            [
                'name' => 'Administrador',
                'password' => Hash::make('admin123'),
            ]
        );
        $user->assignRole('admin');
    }
} 