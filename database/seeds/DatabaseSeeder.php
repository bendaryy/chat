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
        factory(User::class)->create([
            'name' => 'mohamed magdy',
            'email' => 'mohamedbendary1994@gmail.com'
        ]);
        factory(User::class)->create([
            'name' => 'ahmed magdy',
            'email' => 'ahmed@gmail.com'
        ]);
        factory(User::class)->create([
            'name' => 'abdelhameed',
            'email' => 'abdo@gmail.com'
        ]);
    }
}
