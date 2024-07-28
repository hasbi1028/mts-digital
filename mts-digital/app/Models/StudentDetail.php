<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    use HasFactory;

    protected $table = 'student_details';

    protected $fillable = [
        'student_id',
        'img_siswa',
        'nisn',
        'wni',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
        'jml_saudara',
        'anak_ke',
        'agama',
        'cita_cita',
        'memiliki_hp',
        'no_hp',
        'email',
        'hobi',
        'yg_membiayai',
        'tk_ra',
        'paud',
        'imun_hepaB',
        'imun_polio',
        'imun_BCG',
        'imun_campak',
        'imun_DPT',
        'imun_Covid',
        'no_kip',
        'no_kk',
        'kepala_keluarga',
        'img_kk',
        'img_kip'
    ];

    // Definisi relasi dengan model Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
