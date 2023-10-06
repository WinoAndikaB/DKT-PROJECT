<?php

namespace Database\Seeders;

use App\Models\donasiuangs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class donasiUangSeeder extends Seeder
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
                'email'=>'wino1@gmail.com',
                'donatur'=>'Wino Andika Batara',
                'nominalDonasi'=>'200000',
                'pesan'=>'Mantap Jiwaaa',
            ],
            [
                'jenisDonor'=>'Organisasi',
                'idJenisDonor'=>'2',
                'email'=>'bintang@gmail.com',
                'donatur'=>'Bintang Harapan',
                'nominalDonasi'=>'350000',
                'pesan'=>'Semoga Bermanfaat',
            ],
            [
                'jenisDonor'=>'Retailer',
                'idJenisDonor'=>'3',
                'email'=>'kobo@gmail.com',
                'donatur'=>'Kobo Kanaeru',
                'nominalDonasi'=>'550000',
                'pesan'=>'Semoga Berguna',
            ],
            [
                'jenisDonor'=>'Pemerintah',
                'idJenisDonor'=>'4',
                'email'=>'moona@gmail.com',
                'donatur'=>'Moona Hoshinova',
                'nominalDonasi'=>'650000',
                'pesan'=>'Hadiah Dari Puteri Bulan',
            ],
            [
                'jenisDonor'=>'Individu',
                'idJenisDonor'=>'5',
                'email'=>'zeta@gmail.com',
                'donatur'=>'Vestia Zeta',
                'nominalDonasi'=>'750000',
                'pesan'=>'Hadiah dari kucing PON',
            ],

        ];
        foreach($userData as $key=> $val){
            donasiuangs::create($val);
        }
    }
}
