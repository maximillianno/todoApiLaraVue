<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // User::create([
        //     'name' => 'maxus',
        //     'email' => 'maxus.star@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
        factory(App\Product::class, 5)->create();
    }
}
