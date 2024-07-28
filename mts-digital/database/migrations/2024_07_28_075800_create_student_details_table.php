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
        Schema::create('student_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->string('img_siswa')->nullable();
            $table->string('nisn')->nullable();
            $table->boolean('wni')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jk',['lk','pr'])->nullable();
            $table->integer('jml_saudara')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->string('')->nullable();
            $table->enum('agama',['islam','kristen','katolik','hindu','buddha','kong hu cu'])->nullable();
            $table->enum('cita_cita',['PNS','TNI/Polri','Guru/Dosen','Dokter','Politikus','Wiraswasta','Seniman/Artis','Ilmuwan','Agamawan','Lainnya'])->nullable();
            $table->boolean('memiliki_hp')->nullable();
            $table->string('no_hp')->nullable();    
            $table->string('email')->nullable()->unique;
            $table->enum('hobi',['Olahraga','Kesenian','Membaca','Menulis','Jalan-jalan','Lainnya'])->nullable();        
            $table->enum('yg_membiayai',['Orang Tua','Wali/Orang Tua Asuh','Tanggungan Sendiri','Lainnya'])->nullable();
            $table->boolean('tk_ra')->nullable();
            $table->boolean('paud')->nullable();
            $table->boolean('imun_hepaB')->nullable();
            $table->boolean('imun_polio')->nullable();
            $table->boolean('imun_BCG')->nullable();
            $table->boolean('imun_campak')->nullable();
            $table->boolean('imun_DPT')->nullable();
            $table->boolean('imun_Covid')->nullable();
            $table->string('no_kip')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('kepala_keluarga')->nullable();
            $table->string('img_kk')->nullable();
            $table->string('img_kip')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_details');
    }
};
