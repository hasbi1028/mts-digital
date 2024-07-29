<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'fullname',
        'nislokal'
    ];

    // Definisi relasi dengan model StudentDetail
    public function studentDetail()
    {
        return $this->hasOne(StudentDetail::class);
    }

    // Definisi relasi dengan model StudentAddress
    public function studentAddress()
    {
        return $this->hasOne(StudentAddress::class);
    }

    // Definisi relasi dengan model StudentParent
    public function studentParent()
    {
        return $this->hasOne(StudentParent::class);
    }

    // Definisi relasi dengan model RiwayatPendidikanStudent
    public function riwayatPendidikan()
    {
        return $this->hasMany(RiwayatPendidikanStudent::class, 'siswa_id');
    }
}
