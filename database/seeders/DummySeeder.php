<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Wino Andika Batara',
                'email'=>'wino.andika@si.ukdw.ac.id',
                'role'=>'admin',
                'password'=>bcrypt('1234')
            ],
            [
                'name'=>'Bintang Harapan N.M.',
                'email'=>'bintang.marpaung@si.ukdw.ac.id',
                'role'=>'admin',
                'password'=>bcrypt('1234')
            ],
        ];


        /*
        $userData = [
            [
                'name'=>'Admin Empat',
                'email'=>'admintiga@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('1234')
            ],
            [
                'name'=>'User Empat',
                'email'=>'usertiga@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('1234')
            ],
        ];
*/
        foreach($userData as $key=> $val){
            User::create($val);
        }
    }
}
