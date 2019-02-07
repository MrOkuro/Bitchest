<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'Kader',
            'email' => 'kader@gmail.com',
            'password' => bcrypt('kader'),
            'admin' => rand(0, 1)
        ]);

        DB::table('users')->insert([
            'name' => 'Junior',
            'email' => 'junior@gmail.com',
            'password' => bcrypt('junior'),
            'admin' => rand(0, 1)
        ]);
    }
}
