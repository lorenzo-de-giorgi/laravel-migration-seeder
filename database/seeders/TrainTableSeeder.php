<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $trains = json_decode(file_get_contents(__DIR__ . '/trains.json'), true);
        // dd($trains);
        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->azienda = $train['azienda'];
            $new_train->stazione_di_partenza = $train['stazione_di_partenza'];
            $new_train->stazione_di_arrivo = $train['stazione_di_partenza'];
            $new_train->orario_di_partenza = $train['orario_di_partenza'];
            $new_train->orario_di_arrivo = $train['orario_di_arrivo'];
            $new_train->codice_treno = $train['codice_treno'];
            $new_train->numero_carrozze = $train['numero_carrozze'];
            $new_train->in_orario = $train['in_orario'];
            $new_train->cancellato = $train['cancellato'];
            $new_train->save();
        }
    }
}
