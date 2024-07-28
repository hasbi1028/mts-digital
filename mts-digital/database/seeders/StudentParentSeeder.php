<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentParent;

class StudentParentSeeder extends Seeder
{
    public function run()
    {
        StudentParent::factory()->count(5)->create();
    }
}
