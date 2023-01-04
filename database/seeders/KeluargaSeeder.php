<?php

namespace Database\Seeders;

use App\Models\Keluarga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $st = ['Kawin','Belum Kawin','Cerai'];
        foreach ($st as $key => $value) {
            $data = new Keluarga();
            $data->nmstatusk = $value;
            $data->save();
        }
    }
}
