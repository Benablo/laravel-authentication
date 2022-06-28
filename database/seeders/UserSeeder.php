<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Mark Dwin Benablo',
                'email' => 'benablomarkdwin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('benablo123')
            ],
            [
                'name' => 'Louei Genita',
                'email' => 'genitalouei@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('genita123')
            ],
            [
                'name' => 'John Ritchie Coscos',
                'email' => 'coscosjohnritchie@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('coscos123')
            ],
            [
                'name' => 'Kent Abarquez',
                'email' => 'abarquezkent@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('abarquez123')
            ],
        ];

        foreach($users as $user){
            User::create($user);
            
        }

    }
}
