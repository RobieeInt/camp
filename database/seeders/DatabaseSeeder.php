<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Manggil Seedernya biar masuk DB
        $this->call([
            CampTableSeeder::class
        ]);
        $this->call([
            CampBenefitTableSeeder::class
        ]);
        $this->call([
            AdminTableSeeder::class
        ]);
    }
}
