<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->city() . $this->getRandomSchoolType()
        ];
    }

    private function getRandomSchoolType(){
        $schoolType = [' Primary school', ' Secondary school'];

        return $schoolType[rand(0,1)];
    }
}
