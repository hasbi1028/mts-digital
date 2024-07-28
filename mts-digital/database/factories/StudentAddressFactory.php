<?php

namespace Database\Factories;

use App\Models\StudentAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentAddressFactory extends Factory
{
    protected $model = StudentAddress::class;

    public function definition()
    {
        return [
            'student_id' => \App\Models\Student::factory(),
            'status_rumah_ayah' => $this->faker->randomElement(['Milik Sendiri', 'Rumah Orang Tua', 'Rumah Saudara/Kerabat', 'Rumah Dinas', 'Sewa/Kontrak', 'Lainnya']),
            'provinsi_ayah' => $this->faker->state,
            'kabupaten_ayah' => $this->faker->city,
            'kecamatan_ayah' => $this->faker->citySuffix,
            'keldesa_ayah' => $this->faker->streetName,
            'rt_ayah' => $this->faker->randomDigitNotNull,
            'rw_ayah' => $this->faker->randomDigitNotNull,
            'alamat_ayah' => $this->faker->address,
            'kodepos_ayah' => $this->faker->postcode,

            'status_rumah_ibu' => $this->faker->randomElement(['Milik Sendiri', 'Rumah Orang Tua', 'Rumah Saudara/Kerabat', 'Rumah Dinas', 'Sewa/Kontrak', 'Lainnya']),
            'provinsi_ibu' => $this->faker->state,
            'kabupaten_ibu' => $this->faker->city,
            'kecamatan_ibu' => $this->faker->citySuffix,
            'keldesa_ibu' => $this->faker->streetName,
            'rt_ibu' => $this->faker->randomDigitNotNull,
            'rw_ibu' => $this->faker->randomDigitNotNull,
            'alamat_ibu' => $this->faker->address,
            'kodepos_ibu' => $this->faker->postcode,

            'status_rumah_wali' => $this->faker->randomElement(['Milik Sendiri', 'Rumah Orang Tua', 'Rumah Saudara/Kerabat', 'Rumah Dinas', 'Sewa/Kontrak', 'Lainnya']),
            'provinsi_wali' => $this->faker->state,
            'kabupaten_wali' => $this->faker->city,
            'kecamatan_wali' => $this->faker->citySuffix,
            'keldesa_wali' => $this->faker->streetName,
            'rt_wali' => $this->faker->randomDigitNotNull,
            'rw_wali' => $this->faker->randomDigitNotNull,
            'alamat_wali' => $this->faker->address,
            'kodepos_wali' => $this->faker->postcode,

            'status_tinggal_siswa' => $this->faker->randomElement(['dengan Ayah', 'dengan Ibu', 'dengan Wali', 'ikut Saudara/Kerabat', 'Asrama Madrasah', 'Sewa/Kontrak', 'Asrama Pesantren', 'Panti Asuhan', 'Rumah Singgah', 'Lainnya']),
            'provinsi_siswa' => $this->faker->state,
            'kabupaten_siswa' => $this->faker->city,
            'kecamatan_siswa' => $this->faker->citySuffix,
            'keldesa_siswa' => $this->faker->streetName,
            'rt_siswa' => $this->faker->randomDigitNotNull,
            'rw_siswa' => $this->faker->randomDigitNotNull,
            'alamat_siswa' => $this->faker->address,
            'kodepos_siswa' => $this->faker->postcode,
            
            'koordinat' => $this->faker->latitude . ', ' . $this->faker->longitude,
            'jarak_kesekolah' => $this->faker->randomElement(['Kurang 5 km', 'Antara 5 - 10 km', 'Antara 11 - 20 km', 'Antara 21 - 30 km', 'Lebih dari 30 km']),
            'transportasi' => $this->faker->randomElement(['Jalan Kaki', 'Sepeda', 'Sepeda Motor', 'Mobil Pribadi', 'Antar Jemput Sekolah', 'Angkutan Umum', 'Perahu/Sampan', 'Lainnya', 'Kendaraan Pribadi', 'Kereta Api', 'Ojek', 'Andong/Bendi/Sado/Dokar/Delman/Becak']),
            'jarak_tempuh' => $this->faker->randomElement(['1-10 menit', '10-19 menit', '20-29 menit', '30-39 menit', '1-2 jam', '> 2 jam']),
        ];
    }
}
