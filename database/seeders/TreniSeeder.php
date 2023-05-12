<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TreniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i = 0; $i < 10; $i++) {
            $treno = new Train();
            $treno->azienda = $faker -> words(2, true);
            $treno->stazione_di_partenza = $faker -> city();
            $treno->stazione_di_arrivo = $faker -> city();
            $treno->orario_di_partenza = $faker -> datetime();
            $treno->orario_di_arrivo = $faker -> datetime();
            $treno->codice_treno = $faker -> randomNumber(4, true);
            $treno->numero_carrozze = $faker -> randomDigitNotNull();
            $treno->in_orario = $faker -> boolean();
            $treno->cancellato = $faker -> boolean();
            $treno->save();
        }
    }
}
