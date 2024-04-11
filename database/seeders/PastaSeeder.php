<?php

namespace Database\Seeders;

use App\Models\Pasta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PastaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $pastas = config('pastas');

        // possiamo lasciarci dei messaggi in console con questo comando:
        // questo comando ci lascia il messaggio solo quando il file in cui è scritto viene eseguito
        // infatti in questo caso dobbiamo lanciare da terminale il comando per fare il seed, altrimenti non lo leggeremmo
        // $this->command->info(print_r($pastas));

        foreach($pastas as $pasta) {
            $newPasta = new Pasta();

            $newPasta->src = $pasta['src'];
            $newPasta->title = $pasta['titolo'];
            $newPasta->description = $pasta['descrizione'];
            $newPasta->type = $pasta['tipo'];
            $newPasta->cooking_time = $pasta['cottura'];
            $newPasta->weight = $pasta['peso'];

            $newPasta->save();

        }

    }
}
