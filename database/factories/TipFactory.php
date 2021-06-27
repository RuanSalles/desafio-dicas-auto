<?php

namespace Database\Factories;

use App\Models\Tip;
use App\Models\User;
use Faker\Provider\ar_JO\Text;
use Illuminate\Database\Eloquent\Factories\Factory;



class TipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tip::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::first();
        $modelos = ['Gol', 'Palio', 'Uno', 'Celta', 'Strada'];
        $tipo = ['Carro', 'Moto', 'Caminhão'];
        $marca = ['Fiat', 'Chevrolet', 'Hyundai', 'Volkswagem', 'Skoda'];
        $versao = ['Hatch', 'Sedan', 'Pick-up', 'Scania'];
        $descricao = ['Ótimo carro', 'Veículo sustentável', 'Me arrependi', 'Compraria novamente', 'Nunca mais quero ver', 'Bastante econômico'];
        return [
            'user_id' => $user->id,
            'tipo' => $tipo[array_rand($tipo, 1)],
            'marca' => $marca[array_rand($marca, 1)],
            'modelo'  => $modelos[array_rand($modelos, 1)],
            'versao'  => $versao[array_rand($versao, 1)],
            'descricao' => $descricao[array_rand($descricao, 1)],
            //'descricao' => $this->faker->text(20)
        ];
    }
}
