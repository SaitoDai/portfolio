<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = '管理者';
        $user->email = 'kanri@gmail.com';
        $user->password = Hash::make('kanri');
        $user->role_id = 1;

        $user->save();
    }
}
