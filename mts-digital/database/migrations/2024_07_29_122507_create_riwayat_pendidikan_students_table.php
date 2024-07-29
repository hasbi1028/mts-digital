<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPendidikanStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pendidikan_student', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('student_id')->constrained('student')->onDelete('cascade');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            
            $table->string('tahun_ajaran_semester')->nullable();
            $table->date('tanggal_mulai_masuk')->nullable();
            $table->string('nsm_nama_lembaga')->nullable();
            $table->string('jenjang')->nullable();
            $table->string('tingkat_kelompok')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('rombel')->nullable();
            $table->string('status_keaktifan')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_pendidikan_student');
    }
}
