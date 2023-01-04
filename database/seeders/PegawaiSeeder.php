<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->delete();

        for ($i=0; $i < 50; $i++) {
            $faker = Faker::create('id_ID');
            $gender = $faker->randomElement(['Laki-laki', 'Perempuan']);
            $data = new Pegawai();
            $data->nip = $faker->numerify('############');
            $data->nama = $faker->name($gender);
            $data->jenis_kelamin = $gender;
            $data->tmpt_lahir = $faker->city();
            $data->tgl_lahir = $faker->date();
            $data->nohp = $faker->phoneNumber();
            $data->alamat = $faker->address();
            $data->agama_id = $faker->randomElement(['1', '2','3','4']);
            $data->negara_id = $faker->randomElement(['1', '2','3','4']);
            $data->gol_darah_id = $faker->randomElement(['1', '2','3','4']);
            $data->skeluarga_id = $faker->randomElement(['1', '2','3','4']);
            $data->save();
        }
    }
}
