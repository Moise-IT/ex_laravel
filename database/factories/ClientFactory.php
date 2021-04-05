<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //une fois l'entreprise crée on recuperer son id pour l'affecter à la table client
            'entreprise_id' => Entreprise::factory()->create(),
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'status' => 1
        ];
    }
}
