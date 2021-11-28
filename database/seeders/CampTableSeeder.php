<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Menjadi Aku Versi Pro',
                'slug' => 'gas-teruss',
                'price' => '300000',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Menjadi Aku',
                'slug' => 'buat-entar',
                'price' => '290000',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        // Cara 1 Tapi kudu define created & updated kalo ga null
        Camp::insert($camps);

        // Cara 2 kalo ini ga perlu define created & update
        // foreach ($camps as $key => $camp) {
        //     Camp::create($camp);
        // }
    }
}
