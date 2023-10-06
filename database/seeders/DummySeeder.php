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
                'instagram'=>'@wino_a.b.',
                'facebook'=>'WinoAndikaBatara',
                'aboutme'=>'Hidup Kadang Tidak Adil Abang Kuh'
            ],
            [
                'username'=>'shxbintang',
                'name'=>'Bintang Harapan N.M.',
                'email'=>'bintang.marpaung@si.ukdw.ac.id',
                'role'=>'admin',
                'password' => Hash::make('123'),
                'alamat'=>'Jl.Sudirman BC No. 17',
                'instagram'=>'@bintangAja',
                'facebook'=>'BintangAjaes',
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
                'instagram'=>'@koboAja',
                'facebook'=>'Kobokans',
                'aboutme'=>'Bokobokobo kanaeru at your service, let me to be your sun to sun your day ehe'
            ],
            [
                'username'=>'PhoenixAra',
                'name'=>'Takahashi Kiara',
                'email'=>'usertiga@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('1234'),
                'alamat'=>'Jl.Yagooo Blok 17',
                'instagram'=>'@kiaraAja',
                'facebook'=>'KiaraChan',
                'aboutme'=>'Kikkeriki takahashi kiara desuuu, yoroshiku neeee'
            ],
        ];

        foreach($userData as $key=> $val){
            User::create($val);
        }
    }
}
