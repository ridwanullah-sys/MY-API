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
        \App\Models\product::factory(50)->create();
        \App\Models\review::factory(300)->create();
        //factory(App\Model\product::class,50)->create();
        //factory(App\Model\review::class,300)->create();

    }
}
