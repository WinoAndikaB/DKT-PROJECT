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
                'email'=>'wino1@gmail.com',
                'donatur'=>'Wino Andika Batara',
                'nominalDonasi'=>'200.000',
                'pesan'=>'Lahhh11111',
            ],
            [
                'email'=>'wino@gmail.com',
                'donatur'=>'Wino Andika Batara',
                'nominalDonasi'=>'200.000',
                'pesan'=>'Lahhh2222',
            ],
        ];
        foreach($userData as $key=> $val){
            donasiuangs::create($val);
        }
    }
}
