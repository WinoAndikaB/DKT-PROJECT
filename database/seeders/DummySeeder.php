<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
                'username'=>'Wino88',
                'name'=>'Wino Andika Batara',
                'email'=>'wino.andika@si.ukdw.ac.id',
                'role'=>'admin',
                'password' => Hash::make('123'),
                'alamat'=>'Jl.Ebony Raya A1/6',
                'instagram'=>'https://www.instagram.com/wino_a.b/',
                'facebook'=>'https://www.facebook.com/wino.batara/?locale=id_ID',
                'aboutme'=>'Hidup Kadang Tidak Adil Abang Kuh'
            ],
            [
                'username'=>'shxbintang',
                'name'=>'Bintang Harapan N.M.',
                'email'=>'bintang.marpaung@si.ukdw.ac.id',
                'role'=>'admin',
                'password' => Hash::make('123'),
                'alamat'=>'Jl.Sudirman BC No. 17',
                'instagram'=>'https://www.instagram.com/shxtbintang/',
                'facebook'=>'https://www.facebook.com/bintang.hope.3?locale=id_ID',
                'aboutme'=>'Senggol Dong'
            ],
        ];

        $userData = [
            [
                'username'=>'Kobokan',
                'name'=>'Kobo Kanaeru',
                'email'=>'kobokan@gmail.com',
                'role'=>'user',
                'password' => Hash::make('123'),
                'alamat'=>'Jl.Satria Dua No. 29',
                'instagram'=>'https://www.instagram.com/kobokanaeru/',
                'facebook'=>'https://www.facebook.com/KoboKanaeru/',
                'aboutme'=>'Bokobokobo kanaeru at your service, let me to be your sun to sun your day ehe'
            ],
            [
                'username'=>'Moona98',
                'name'=>'Moona Hoshinova',
                'email'=>'moona@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('123'),
                'alamat'=>'Jl.Yagooo Office A17',
                'instagram'=>'https://www.instagram.com/moonahoshinova/',
                'facebook'=>'https://www.facebook.com/moonahoshinovaholoID/?locale=id_ID',
                'aboutme'=>'Hello Moonafic And My Pets'
            ],
        ];

        foreach($userData as $key=> $val){
            User::create($val);
        }
    }
}
