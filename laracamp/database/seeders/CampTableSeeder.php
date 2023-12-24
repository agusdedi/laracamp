<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => 280,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 140,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        // 1st method seeder created and updated
        // foreach ($camps as $key => $camp) {
        //     Camp::create($camp);
        // }

        // 2nd method seeder created and updated
        Camp::insert($camps);
    }
}
