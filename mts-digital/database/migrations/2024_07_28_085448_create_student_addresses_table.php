<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_addresses', function (Blueprint $table) {
            $table->id();
            $table->enum('status_rumah_ayah',['Milik Sendiri','Rumah Orang Tua','Rumah Saudara/Kerabat','Rumah Dinas','Sewa/Kontrak','Lainnya'])->nullable();
            $table->string('provinsi_ayah')->nullable();
            $table->string('kabupaten_ayah')->nullable();
            $table->string('kecamatan_ayah')->nullable();
            $table->string('keldesa_ayah')->nullable();
            $table->string('rt_ayah')->nullable();
            $table->string('rt_ayah')->nullable();
            $table->string('alamat_ayah')->nullable();
            $table->string('kodepos_ayah')->nullable();

            $table->enum('status_rumah_ibu',['Milik Sendiri','Rumah Orang Tua','Rumah Saudara/Kerabat','Rumah Dinas','Sewa/Kontrak','Lainnya'])->nullable();
            $table->string('provinsi_ibu')->nullable();
            $table->string('kabupaten_ibu')->nullable();
            $table->string('kecamatan_ibu')->nullable();
            $table->string('keldesa_ibu')->nullable();
            $table->string('rt_ibu')->nullable();
            $table->string('rt_ibu')->nullable();
            $table->string('alamat_ibu')->nullable();
            $table->string('kodepos_ibu')->nullable();

            $table->enum('status_rumah_wali',['Milik Sendiri','Rumah Orang Tua','Rumah Saudara/Kerabat','Rumah Dinas','Sewa/Kontrak','Lainnya'])->nullable();
            $table->string('provinsi_wali')->nullable();
            $table->string('kabupaten_wali')->nullable();
            $table->string('kecamatan_wali')->nullable();
            $table->string('keldesa_wali')->nullable();
            $table->string('rt_wali')->nullable();
            $table->string('rt_wali')->nullable();
            $table->string('alamat_wali')->nullable();
            $table->string('kodepos_wali')->nullable();

            $table->enum('status_tinggal_siswa',['dengan Ayah','dengan Ibu','dengan Wali','ikut Saudara/Kerabat',
            'Asrama Madrasah','Sewa/Kontrak','Asrama Pesantren','Panti Asuhan','Rumah Singgah','Lainnya'])->nullable();
            $table->string('provinsi_siswa')->nullable();
            $table->string('kabupaten_siswa')->nullable();
            $table->string('kecamatan_siswa')->nullable();
            $table->string('keldesa_siswa')->nullable();
            $table->string('rt_siswa')->nullable();
            $table->string('rt_siswa')->nullable();
            $table->string('alamat_siswa')->nullable();
            $table->string('kodepos_siswa')->nullable();
            
            $table->string('koordinat')->nullable();
            $table->enum('jarak_kesekolah',['Kurang 5 km','Antara 5 - 10 km','Antara 11 - 20 km',
            'Antara 21 - 30 km','Lebih dari 30 km'])->nullable();
            $table->enum('transportasi',['Jalan Kaki','Sepeda','Sepeda Motor','Mobil Pribadi',
            'Antar Jemput Sekolah','Angkutan Umum','Perahu/Sampan','Lainnya','Kendaraan Pribadi',
            'Kereta Api','Ojek','Andong/Bendi/Sado/Dokar/Delman/Becak'])->nullable();
            $table->enum('jarak_tempuh',['1-10 menit','10-19 menit','20-29 menit','30-39 menit','1-2 jam','> 2 jam'])->nullable();






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_addresses');
    }
};
