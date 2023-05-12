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
    public function run()
    {
        $altriTreni = [
            [
                'azienda' => 'EduaLines',
                'stazione_di_partenza' => 'termoli',
                'stazione_di_arrivo' => 'monopoli',
                'codice_treno' => 1309,
                'numero_carrozze' => 6,
                'in_orario' => true,
                'cancellato' => false,
            ],
            [
                'azienda' => 'Ferrovischie',
                'stazione_di_partenza' => 'carrapipi',
                'stazione_di_arrivo' => 'biancavilla',
                'codice_treno' => 9608,
                'numero_carrozze' => 9,
                'in_orario' => false,
                'cancellato' => true,
            ],
        ];
        foreach ($altriTreni as $treNuovo) {
            $treno = new Train();
            $treno->azienda = $treNuovo['azienda'];
            $treno->stazione_di_partenza = $treNuovo['stazione_di_partenza'];
            $treno->stazione_di_arrivo = $treNuovo['stazione_di_arrivo'];
            $treno->codice_treno = $treNuovo['codice_treno'];
            $treno->numero_carrozze = $treNuovo['numero_carrozze'];
            $treno->in_orario = $treNuovo['in_orario'];
            $treno->cancellato = $treNuovo['cancellato'];
            $treno->save();
        }
    }
}
