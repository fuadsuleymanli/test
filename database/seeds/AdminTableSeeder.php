<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User([
            'first_name' => 'test',
            'last_name' => 'test',
            'email' => 'test@mail.com',
            'password' => Hash::make('test'),
            'currency' => 'test',
            'payment_terms' => 'test',
            'user_type' => 1,
            'activation' => 1,
        ]);
        $admin -> save();
    }
}
