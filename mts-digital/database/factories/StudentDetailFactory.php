<?php

namespace Database\Factories;

use App\Models\StudentDetail;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

class StudentDetailFactory extends Factory
{
    protected $model = StudentDetail::class;

    public function definition()
    {
        return [
            'student_id' => Student::factory(),
            'birthplace' => $this->faker->city,
            'birthdate' => $this->faker->date,
            'religion' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']),
            'gender' => $this->faker->randomElement(['L', 'P']),
            'child_order' => $this->faker->numberBetween(1, 5),
            'status_in_family' => $this->faker->randomElement(['Anak Kandung', 'Anak Angkat']),
            'number_of_siblings' => $this->faker->numberBetween(1, 5),
            'living_with' => $this->faker->randomElement(['Orang Tua', 'Wali', 'Saudara', 'Asrama']),
        ];
    }
}
