<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikanSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'tahun_ajaran_semester',
        'tanggal_mulai_masuk',
        'nsm_nama_lembaga',
        'jenjang',
        'tingkat_kelompok',
        'jurusan',
        'rombel',
        'status_keaktifan',
        'keterangan',
    ];

    public function siswa()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
