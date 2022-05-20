<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fileKota = file_get_contents(base_path('/database/kota.json'));
        $fileKabupaten = file_get_contents(base_path('/database/kabupaten.json'));
        $dataKota = json_decode($fileKota, true);
        $dataKabupaten = json_decode($fileKabupaten, true);

        DB::table('cities')->insert($dataKota);
        DB::table('cities')->insert($dataKabupaten);

    }
}
