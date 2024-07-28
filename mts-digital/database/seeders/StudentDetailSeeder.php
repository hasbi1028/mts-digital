<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentDetail;

class StudentDetailSeeder extends Seeder
{
    public function run()
    {
        StudentDetail::factory()->count(5)->create();
    }
}
