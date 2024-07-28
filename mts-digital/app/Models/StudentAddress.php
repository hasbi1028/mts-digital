<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    use HasFactory;

    protected $table = 'student_addresses';

    protected $fillable = [
        'student_id',
        'status_rumah_ayah',
        'provinsi_ayah',
        'kabupaten_ayah',
        'kecamatan_ayah',
        'keldesa_ayah',
        'rt_ayah',
        'rw_ayah',
        'alamat_ayah',
        'kodepos_ayah',
        'status_rumah_ibu',
        'provinsi_ibu',
        'kabupaten_ibu',
        'kecamatan_ibu',
        'keldesa_ibu',
        'rt_ibu',
        'rw_ibu',
        'alamat_ibu',
        'kodepos_ibu',
        'status_rumah_wali',
        'provinsi_wali',
        'kabupaten_wali',
        'kecamatan_wali',
        'keldesa_wali',
        'rt_wali',
        'rw_wali',
        'alamat_wali',
        'kodepos_wali',
        'status_tinggal_siswa',
        'provinsi_siswa',
        'kabupaten_siswa',
        'kecamatan_siswa',
        'keldesa_siswa',
        'rt_siswa',
        'rw_siswa',
        'alamat_siswa',
        'kodepos_siswa',
        'koordinat',
        'jarak_kesekolah',
        'transportasi',
        'jarak_tempuh'
    ];

    // Definisi relasi dengan model Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
