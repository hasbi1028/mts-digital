<?php

namespace Database\Factories;

use App\Models\StudentDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentDetailFactory extends Factory
{
    protected $model = StudentDetail::class;

    public function definition()
    {
        return [
            'student_id' => \App\Models\Student::factory(),
            'img_siswa' => $this->faker->imageUrl(),
            'nisn' => $this->faker->numerify('##########'),
            'wni' => $this->faker->boolean(),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date(),
            'jk' => $this->faker->randomElement(['lk', 'pr']),
            'jml_saudara' => $this->faker->numberBetween(1, 10),
            'anak_ke' => $this->faker->numberBetween(1, 10),
            'agama' => $this->faker->randomElement(['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'kong hu cu']),
            'cita_cita' => $this->faker->randomElement(['PNS', 'TNI/Polri', 'Guru/Dosen', 'Dokter', 'Politikus', 'Wiraswasta', 'Seniman/Artis', 'Ilmuwan', 'Agamawan', 'Lainnya']),
            'memiliki_hp' => $this->faker->boolean(),
            'no_hp' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'hobi' => $this->faker->randomElement(['Olahraga', 'Kesenian', 'Membaca', 'Menulis', 'Jalan-jalan', 'Lainnya']),
            'yg_membiayai' => $this->faker->randomElement(['Orang Tua', 'Wali/Orang Tua Asuh', 'Tanggungan Sendiri', 'Lainnya']),
            'tk_ra' => $this->faker->boolean(),
            'paud' => $this->faker->boolean(),
            'imun_hepaB' => $this->faker->boolean(),
            'imun_polio' => $this->faker->boolean(),
            'imun_BCG' => $this->faker->boolean(),
            'imun_campak' => $this->faker->boolean(),
            'imun_DPT' => $this->faker->boolean(),
            'imun_Covid' => $this->faker->boolean(),
            'no_kip' => $this->faker->numerify('##########'),
            'no_kk' => $this->faker->numerify('##########'),
            'kepala_keluarga' => $this->faker->name,
            'img_kk' => $this->faker->imageUrl(),
            'img_kip' => $this->faker->imageUrl(),
        ];
    }
}
