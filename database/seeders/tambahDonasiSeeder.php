<?php

namespace Database\Seeders;

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
        'namaDonasi'=>'DOKITA Project Ichi',
        'deskripsi'=>'Proses Bantuan pengembangan gereja dan penigkatan gerja'
        ],
    ];
    foreach($userData as $key=> $val){
        tambahdonasis::create($val);
    }
    }
}
