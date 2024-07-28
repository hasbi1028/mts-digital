<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'fullname_ayah',
        'status_ayah',
        'wni_ayah',
        'nik_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'memiliki_hp_ayah',
        'no_hp_ayah',
        'img_kk_ayah',
        'fullname_ibu',
        'status_ibu',
        'wni_ibu',
        'nik_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'memiliki_hp_ibu',
        'no_hp_ibu',
        'img_kk_ibu',
        'fullname_wali',
        'status_wali',
        'wni_wali',
        'nik_wali',
        'tempat_lahir_wali',
        'tanggal_lahir_wali',
        'pendidikan_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'memiliki_hp_wali',
        'no_hp_wali',
        'img_kk_wali',
        'no_kks',
        'img_kks',
        'no_pkh',
        'img_pkh'
    ];
}
