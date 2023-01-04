<?php

namespace Database\Seeders;

use App\Models\Negara;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NegaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ngr = ['Brunei', 'Kamboja', 'Indonesia', 'Laos', 'Malaysia', 'Myanmar', 'Papua New Guinea', 'Filipina', 'Singapura', 'Thailand', 'Timor-Leste', 'Vietnam'];
        foreach ($ngr as $key => $value) {
            $data = new Negara();
            $data->nm_negara = $value;
            $data->save(); 
        }
    }
}
