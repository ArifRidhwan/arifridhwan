<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = "ArifMRidhwan";
        $user->email = "arifridhwan68@gmail.com";
        $user->password = bcrypt("arifmr12345");
        $user->save();
    }
}
