<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      =>  'Silbert Firmino',
            'email'     =>  'silbert.fcds@gmail.com',
            'password'  =>  bcrypt('123456'),
        ]);
    }
}
