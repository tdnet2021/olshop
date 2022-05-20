<?php
namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(base_path('/database/provinsi.json'));
        $data = json_decode($file, true);

        DB::table('provinces')->insert($data);
    }
}
