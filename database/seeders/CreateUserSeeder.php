<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'name'      => 'admin',
                'email'     => 'admin@gmail.com',
                'is_admin'  => '1',
                'password'  => bcrypt('password'), 
            ],
            [
                'name'      => 'user',
                'email'     => 'user@gmail.com',
                'is_admin'  => '0',
                'password'  => bcrypt('password'), 
            ]
            ];
            foreach ($user as $key => $value){
                User::create($value);
            }
    }
}
