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
                'jenisDonor'=>'Gereja',
                'idJenisDonor'=>'1',
                'email'=>'stacey@gmail.com',
                'donatur'=>'Stacey G. Myers',
                'namaBarang'=>'Buku & Celana',
                'gambar'=>'1a.jpg',
                'pesan'=>'Semoga Membantu'
            ],
            [
                'jenisDonor'=>'Organisasi',
                'idJenisDonor'=>'2',
                'email'=>'hanzo@gmail.com',
                'donatur'=>'RM Hanzo Mangkumalorot',
                'namaBarang'=>'Makanan',
                'gambar'=>'1b.jpg',
                'pesan'=>'Semoga Bermanfaat'
            ],
            [
                'jenisDonor'=>'Retailer',
                'idJenisDonor'=>'3',
                'email'=>'dara@gmail.com',
                'donatur'=>'Dara El Cara',
                'namaBarang'=>'Rak Sepatu',
                'gambar'=>'1d.jpg',
                'pesan'=>'Semoga Bermanfaat'
            ],
            [
                'jenisDonor'=>'Pemerintah',
                'idJenisDonor'=>'4',
                'email'=>'sachio@gmail.com',
                'donatur'=>'Sachio Quinn Gho',
                'namaBarang'=>'Bahan Bangunan',
                'gambar'=>'unknown.jpg',
                'pesan'=>'Semoga Bermanfaat'
            ],
            [
                'jenisDonor'=>'Individu',
                'idJenisDonor'=>'5',
                'email'=>'brynine@gmail.com',
                'donatur'=>'Brynine Gho',
                'namaBarang'=>'Mesin Cuci',
                'gambar'=>'1c.jpg',
                'pesan'=>'Gass Terus'
            ],
        ];
        foreach($userData as $key=> $val){
            donasibarangs::create($val);
        }
    }
}
