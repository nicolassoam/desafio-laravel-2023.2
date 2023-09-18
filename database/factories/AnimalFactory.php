<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\'App\Animal'>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Animal::class;  
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'species' => $this->faker->text(),
            'race' => $this->faker->text(),
            'date_of_birth' => $this->faker->date(),
            'treatment' => $this->faker->text()
        ];
    }
}
