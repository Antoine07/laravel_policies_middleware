<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = ['administrator', 'editor', 'visitor'];
        factory(App\User::class, 3)->create()->each(function ($user) use ($status) {
            static $count = 0;
            $user->role = $status[$count++];

            $user->save();
        });
    }
}
