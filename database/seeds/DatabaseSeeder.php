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
        // $this->call(User::class, 3);
        factory(App\User::class, 5)->create();
        factory(User::class)->create(
            [
                'email' => 'swfusez@gmail.com',
                'name' => 'Swfuse'
            ]
        );
    }
}
