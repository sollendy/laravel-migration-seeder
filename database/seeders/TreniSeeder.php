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
         $foglioTreni = fopen(__DIR__ . "/../trains.csv", "r");

         $treniCSV = fgetcsv($foglioTreni);
         $treniCSV = fgetcsv($foglioTreni);
        //  dd($foglioTreni);


        while ($treniCSV != false) {
            $treno = new Train();
            $treno->azienda = $treniCSV[0];
            $treno->stazione_di_partenza = $treniCSV[1];
            $treno->stazione_di_arrivo = $treniCSV[2];
            $treno->orario_di_partenza = $treniCSV[3];
            $treno->orario_di_arrivo = $treniCSV[4];
            $treno->codice_treno = $treniCSV[5];
            $treno->numero_carrozze = $treniCSV[6];
            $treno->in_orario = $treniCSV[7];
            $treno->cancellato = $treniCSV[8];
            $treno->save();
            $treniCSV = fgetcsv($foglioTreni);
        }
    }
}