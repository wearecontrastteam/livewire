<?php

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
        factory(\App\User::class, 1)->create(['email' => 'mike@wearecontrast.com']);
        factory(\App\User::class, 1)->create(['email' => 'test@wearecontrast.com']);
        factory(\App\User::class, 500)->create();
    }
}
