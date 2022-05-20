<?php

namespace Database\Seeders;

use App\Models\Courier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('couriers')->insert([
            [
                'code' => 'jne',
                'title' => 'Jalur Nugaraha Ekakurir (JNE)'
            ],
            [
                'code' => 'pos',
                'title' => 'POS Indonesia'
            ],
            [
                'code' => 'tiki',
                'title' => 'Citra Van Titipan Kilat'
            ]
        ]);
    }
}
