<?php

namespace Database\Seeders;

use App\Models\GolonganDarah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GolonganDarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gol = ['A','B','AB','O'];
        foreach ($gol as $key => $value) {
            $data = new GolonganDarah();
            $data->nama_gol_darah = $value;
            $data->save();
        }

    }
}
