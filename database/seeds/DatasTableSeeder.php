<?php

use Illuminate\Database\Seeder;
use App\Models\Data;

class DatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Data::class, 15)->create();
    }
}
