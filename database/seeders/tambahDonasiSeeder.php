<?php

namespace Database\Seeders;

use App\Models\tambahdonases;
use App\Models\tambahdonasis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tambahDonasiSeeder extends Seeder
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
            'foto'=>'gereja.jpg',
            'namaDonasi'=>'Bantuan Pembangunan Gereja',
            'deskripsi'=>'digunanakan dalam pengembangan gereja dan renovasi gereja',
            'nominalDonasi'=>'10000000',
            'targetDonasi'=>'200000000'
            ],
            [
            'jenisDonor'=>'Organisasi',
            'foto'=>'org1.jpg',
            'namaDonasi'=>'Penambahan Fasilitas',
            'deskripsi'=>'Penambahan Fasilitas Organisasi yang kurang',
            'nominalDonasi'=>'15400000',
            'targetDonasi'=>'500000000'
            ],
            [
            'jenisDonor'=>'Retailer',
            'foto'=>'rt1.jpg',
            'namaDonasi'=>'Pengembangan Retailer Satu',
            'deskripsi'=>'Membutuhkan bantuan dalam mengembangkan retailer satu',
            'nominalDonasi'=>'34000000',
            'targetDonasi'=>'950000000'
            ],
            [
            'jenisDonor'=>'Pemerintah',
            'foto'=>'gereja.jpg',
            'namaDonasi'=>'Pembangunan Infrastruktur',
            'deskripsi'=>'Digunakan dalam memperbaiki jalan yang rusak',
            'nominalDonasi'=>'19000000',
            'targetDonasi'=>'1250000000'
            ],
            [
            'jenisDonor'=>'Individu',
            'foto'=>'individu.jpg',
            'namaDonasi'=>'Bantuan Pendidikan Individu Satu',
            'deskripsi'=>'digunakan dalam membiayai pendidikan individu satu sampai tamat',
            'nominalDonasi'=>'89500000',
            'targetDonasi'=>'200000000'
            ],
            
    ];
    foreach($userData as $key=> $val){
        tambahdonases::create($val);
    }
    }
}
