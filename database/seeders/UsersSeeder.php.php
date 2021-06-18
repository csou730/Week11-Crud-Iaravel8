<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role' => 'editor',
            'first_name' => 'admin',
            'last_name' => 'hao',
            'email' => 'zhao@gmail.com',
            'password' => '$2y$10$hGZLEYZydJFR79Z6WrksTuH1seDtWnfSNCjVbTpwGii..'
        ]);
    }
}
