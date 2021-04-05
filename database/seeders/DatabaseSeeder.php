<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //execute le factorie conternant le modele User
        \App\Models\User::factory(10)->create();
        //execute le factorie conternant le modele Entreprise
        \App\Models\Entreprise::factory(20)->create();
        //execute le factorie conternant le modele Client
        \App\Models\Client::factory(25)->create();
    }
}
