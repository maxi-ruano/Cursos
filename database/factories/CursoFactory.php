<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement(['desarrollo web','diseño web']),
        ];
    }
}
