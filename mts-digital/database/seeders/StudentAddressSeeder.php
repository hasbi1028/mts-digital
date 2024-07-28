<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentAddress;

class StudentAddressSeeder extends Seeder
{
    public function run()
    {
        StudentAddress::factory()->count(5)->create();
    }
}
