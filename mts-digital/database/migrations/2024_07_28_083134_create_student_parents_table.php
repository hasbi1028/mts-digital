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
        Schema::create('student_parents', function (Blueprint $table) {
            $table->id();
            $table->string('fullname_ayah')->nullable();
            $table->enum('status_ayah',['masih hidup','sudah meninggal','tidak diketahui'])->nullable();
            $table->boolean('wni_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->enum('pendidikan_ayah',['SD','SMP','SMA','D1','D2','D3','D4/S1','S2','S3','tidak sekolah'])->nullable();
            $table->enum('pekerjaan_ayah',['Tidak Bekerja','Pensiunan','PNS','TNI/Polri',
            'Guru/Dosen','Pegawai Swasta','Wiraswasta','Pengacara/Jaksa/Hakim/Notaris',
            'Seniman/Pelukis/Artis/Sejenis','Dokter/Bidan/Perawat',
            'Pilot/Pramugara','Pedagang','Petani/Peternak','Nelayan',
            'Buruh(Tani/Pabrik/Bangunan)','Sopir/Masinis/Kondektur','Politikus','Lainnya'])->nullable();
            $table->enum('penghasilan_ayah',['Kurang dari 500.000','500.001 - 1.000.000','1.000.001 - 2.000.000',
            '2.000.001 - 3.000.000','3.000.001 - 5.000.000','Lebih dari 5.000.000'])->nullable();
            $table->boolean('memiliki_hp_ayah')->nullable();
            $table->string('no_hp_ayah')->nullable();
            $table->string('img_kk_ayah')->nullable();

            $table->string('fullname_ibu')->nullable();
            $table->enum('status_ibu',['masih hidup','sudah meninggal','tidak diketahui'])->nullable();
            $table->boolean('wni_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->enum('pendidikan_ibu',['SD','SMP','SMA','D1','D2','D3','D4/S1','S2','S3','tidak sekolah'])->nullable();
            $table->enum('pekerjaan_ibu',['Tidak Bekerja','Pensiunan','PNS','TNI/Polri',
            'Guru/Dosen','Pegawai Swasta','Wiraswasta','Pengacara/Jaksa/Hakim/Notaris',
            'Seniman/Pelukis/Artis/Sejenis','Dokter/Bidan/Perawat',
            'Pilot/Pramugara','Pedagang','Petani/Peternak','Nelayan',
            'Buruh(Tani/Pabrik/Bangunan)','Sopir/Masinis/Kondektur','Politikus','Lainnya'])->nullable();
            $table->enum('penghasilan_ibu',['Kurang dari 500.000','500.001 - 1.000.000','1.000.001 - 2.000.000',
            '2.000.001 - 3.000.000','3.000.001 - 5.000.000','Lebih dari 5.000.000'])->nullable();
            $table->boolean('memiliki_hp_ibu')->nullable();
            $table->string('no_hp_ibu')->nullable();
            $table->string('img_kk_ibu')->nullable();

            $table->string('fullname_wali')->nullable();
            $table->enum('status_wali',['masih hidup','sudah meninggal','tidak diketahui'])->nullable();
            $table->boolean('wni_wali')->nullable();
            $table->string('nik_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->date('tanggal_lahir_wali')->nullable();
            $table->enum('pendidikan_wali',['SD','SMP','SMA','D1','D2','D3','D4/S1','S2','S3','tidak sekolah'])->nullable();
            $table->enum('pekerjaan_wali',['Tidak Bekerja','Pensiunan','PNS','TNI/Polri',
            'Guru/Dosen','Pegawai Swasta','Wiraswasta','Pengacara/Jaksa/Hakim/Notaris',
            'Seniman/Pelukis/Artis/Sejenis','Dokter/Bidan/Perawat',
            'Pilot/Pramugara','Pedagang','Petani/Peternak','Nelayan',
            'Buruh(Tani/Pabrik/Bangunan)','Sopir/Masinis/Kondektur','Politikus','Lainnya'])->nullable();
            $table->enum('penghasilan_wali',['Kurang dari 500.000','500.001 - 1.000.000','1.000.001 - 2.000.000',
            '2.000.001 - 3.000.000','3.000.001 - 5.000.000','Lebih dari 5.000.000'])->nullable();
            $table->boolean('memiliki_hp_wali')->nullable();
            $table->string('no_hp_wali')->nullable();
            $table->string('img_kk_wali')->nullable();

            $table->string('no_kks')->nullable();
            $table->string('img_kks')->nullable();
            $table->string('no_pkh')->nullable();
            $table->string('img_pkh')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_parents');
    }
};
