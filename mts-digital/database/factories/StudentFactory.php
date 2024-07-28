<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'nislokal' => $this->faker->unique()->numerify('#######'),
        ];
    }
}
