<?php

use Illuminate\Database\Seeder;
use App\Warga;


class WargaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Warga::class, 20)->create();
    }
}
