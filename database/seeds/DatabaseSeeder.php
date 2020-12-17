<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * 
     */

    public function run()
    {
        App\User::create([
            'name' => 'Alexander Briones',
            'email' => 'alexanderbvart@gmail.com',
            'password' => bcrypt('alexx123'), // password
        ]);
        App\User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'), // password
        ]);
    }
}
