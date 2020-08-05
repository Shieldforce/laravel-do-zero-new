<?php

use Illuminate\Database\Seeder;
use \App\User;
use Illuminate\Support\Facades\DB;

    class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user1 = User::create([
            'name'      => "Alexandre Ferreira",
            'email'     => "alexandre@gmail.com",
            'password'  => bcrypt("12345678"),
        ]);
        $user2 = User::create([
            'name'      => "Marcelo Maurício",
            'email'     => "marcelo@gmail.com",
            'password'  => bcrypt("12345678"),
        ]);
        $user3 = User::create([
            'name'      => "Celso Junior",
            'email'     => "celson@gmail.com",
            'password'  => bcrypt("12345678"),
        ]);
    }
}
