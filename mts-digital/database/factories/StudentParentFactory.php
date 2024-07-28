<?php

namespace Database\Factories;

use App\Models\StudentParent;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

class StudentParentFactory extends Factory
{
    protected $model = StudentParent::class;

    public function definition()
    {
        return [
            'student_id' => Student::factory(),
            'fullname_ayah' => $this->faker->name('male'),
            'status_ayah' => $this->faker->randomElement(['masih hidup', 'sudah meninggal', 'tidak diketahui']),
            'wni_ayah' => $this->faker->boolean,
            'nik_ayah' => $this->faker->unique()->numerify('###############'),
            'tempat_lahir_ayah' => $this->faker->city,
            'tanggal_lahir_ayah' => $this->faker->date,
            'pendidikan_ayah' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4/S1', 'S2', 'S3', 'tidak sekolah']),
            'pekerjaan_ayah' => $this->faker->randomElement(['Tidak Bekerja', 'Pensiunan', 'PNS', 'TNI/Polri', 'Guru/Dosen', 'Pegawai Swasta', 'Wiraswasta', 'Pengacara/Jaksa/Hakim/Notaris', 'Seniman/Pelukis/Artis/Sejenis', 'Dokter/Bidan/Perawat', 'Pilot/Pramugara', 'Pedagang', 'Petani/Peternak', 'Nelayan', 'Buruh(Tani/Pabrik/Bangunan)', 'Sopir/Masinis/Kondektur', 'Politikus', 'Lainnya']),
            'penghasilan_ayah' => $this->faker->randomElement(['Kurang dari 500.000', '500.001 - 1.000.000', '1.000.001 - 2.000.000', '2.000.001 - 3.000.000', '3.000.001 - 5.000.000', 'Lebih dari 5.000.000']),
            'memiliki_hp_ayah' => $this->faker->boolean,
            'no_hp_ayah' => $this->faker->phoneNumber,
            'img_kk_ayah' => $this->faker->imageUrl,

            'fullname_ibu' => $this->faker->name('female'),
            'status_ibu' => $this->faker->randomElement(['masih hidup', 'sudah meninggal', 'tidak diketahui']),
            'wni_ibu' => $this->faker->boolean,
            'nik_ibu' => $this->faker->unique()->numerify('###############'),
            'tempat_lahir_ibu' => $this->faker->city,
            'tanggal_lahir_ibu' => $this->faker->date,
            'pendidikan_ibu' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4/S1', 'S2', 'S3', 'tidak sekolah']),
            'pekerjaan_ibu' => $this->faker->randomElement(['Tidak Bekerja', 'Pensiunan', 'PNS', 'TNI/Polri', 'Guru/Dosen', 'Pegawai Swasta', 'Wiraswasta', 'Pengacara/Jaksa/Hakim/Notaris', 'Seniman/Pelukis/Artis/Sejenis', 'Dokter/Bidan/Perawat', 'Pilot/Pramugara', 'Pedagang', 'Petani/Peternak', 'Nelayan', 'Buruh(Tani/Pabrik/Bangunan)', 'Sopir/Masinis/Kondektur', 'Politikus', 'Lainnya']),
            'penghasilan_ibu' => $this->faker->randomElement(['Kurang dari 500.000', '500.001 - 1.000.000', '1.000.001 - 2.000.000', '2.000.001 - 3.000.000', '3.000.001 - 5.000.000', 'Lebih dari 5.000.000']),
            'memiliki_hp_ibu' => $this->faker->boolean,
            'no_hp_ibu' => $this->faker->phoneNumber,
            'img_kk_ibu' => $this->faker->imageUrl,

            'fullname_wali' => $this->faker->name,
            'status_wali' => $this->faker->randomElement(['masih hidup', 'sudah meninggal', 'tidak diketahui']),
            'wni_wali' => $this->faker->boolean,
            'nik_wali' => $this->faker->unique()->numerify('###############'),
            'tempat_lahir_wali' => $this->faker->city,
            'tanggal_lahir_wali' => $this->faker->date,
            'pendidikan_wali' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4/S1', 'S2', 'S3', 'tidak sekolah']),
            'pekerjaan_wali' => $this->faker->randomElement(['Tidak Bekerja', 'Pensiunan', 'PNS', 'TNI/Polri', 'Guru/Dosen', 'Pegawai Swasta', 'Wiraswasta', 'Pengacara/Jaksa/Hakim/Notaris', 'Seniman/Pelukis/Artis/Sejenis', 'Dokter/Bidan/Perawat', 'Pilot/Pramugara', 'Pedagang', 'Petani/Peternak', 'Nelayan', 'Buruh(Tani/Pabrik/Bangunan)', 'Sopir/Masinis/Kondektur', 'Politikus', 'Lainnya']),
            'penghasilan_wali' => $this->faker->randomElement(['Kurang dari 500.000', '500.001 - 1.000.000', '1.000.001 - 2.000.000', '2.000.001 - 3.000.000', '3.000.001 - 5.000.000', 'Lebih dari 5.000.000']),
            'memiliki_hp_wali' => $this->faker->boolean,
            'no_hp_wali' => $this->faker->phoneNumber,
            'img_kk_wali' => $this->faker->imageUrl,

            'no_kks' => $this->faker->numerify('###########'),
            'img_kks' => $this->faker->imageUrl,
            'no_pkh' => $this->faker->numerify('###########'),
            'img_pkh' => $this->faker->imageUrl
        ];
    }
}
