<?php

namespace Database\Seeders;

use App\Models\donasibarang;
use App\Models\donasibarangs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class donasiBarangSeeder extends Seeder
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
                'email'=>'falls@gmail.com',
                'donatur'=>'Wino Andika Batara',
                'namaBarang'=>'Buku & Celana',
                'gambar'=>'img',
                'pesan'=>'Lahhh11111'
            ],
            [
                'email'=>'wino1@gmail.com',
                'donatur'=>'Wino Andika Batara',
                'namaBarang'=>'Laptop',
                'gambar'=>'img',
                'pesan'=>'Lahhh2222'
            ],
        ];
        foreach($userData as $key=> $val){
            donasibarangs::create($val);
        }
    }
}
