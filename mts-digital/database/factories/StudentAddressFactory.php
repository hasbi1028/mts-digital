<?php

namespace Database\Factories;

use App\Models\StudentAddress;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

class StudentAddressFactory extends Factory
{
    protected $model = StudentAddress::class;

    public function definition()
    {
        return [
            'student_id' => Student::factory(),
            'address' => $this->faker->address,
            'province' => $this->faker->state,
            'district' => $this->faker->city,
            'sub_district' => $this->faker->citySuffix,
            'village' => $this->faker->streetSuffix,
            'postal_code' => $this->faker->postcode,
        ];
    }
}
