<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_ms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->string('idprodi');
            $table->year('angkatan');
            $table->integer('dosen_id');
            $table->float('bobot');
            $table->float('sks');
            $table->integer('jeniskelamin_id');
            $table->integer('agama_id');
            $table->string('notelepon');
            $table->year('tahunlulus');
            $table->float('ipkuap');
            $table->timestamp('tanggalmasuk')->nullable();
            $table->timestamp('tanggalkeluar')->nullable();
            $table->integer('kelas_id');
            $table->string('namaayah');
            $table->string('alamatayah');
            $table->string('noteleponayah');
            $table->char('penghasilanayah');
            $table->string('namaibu');
            $table->string('alamatibu');
            $table->string('noteleponibu');
            $table->char('penghasilanibu');
            $table->char('gelombang');
            $table->char('jeniskelas_id');
            $table->string('settingtampilan');
            $table->integer('sistemkrs_id');
            $table->char('kelompokkurikulum');
            $table->string('pendidikan');
            $table->string('email');
            $table->string('nohandphone');
            $table->char('idcalonmahasiswa');
            $table->char('pilihan');
            $table->string('skpindahan');
            $table->timestamp('tanggalskpindahan')->nullable();
            $table->timestamp('tanggalkartu')->nullable();
            $table->integer('approvebeasiswa');
            $table->string('lambanguap');
            $table->mediumText('ta2');
            $table->string('nirm');
            $table->text('catatan');
            $table->string('noktp');
            $table->char('jasalmameter');
            $table->char('nisn');
            $table->integer('alamat_id');
            $table->integer('kecamatan_id');
            $table->integer('kotakabupaten_id');
            $table->integer('propinsi_id');
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
        Schema::dropIfExists('mahasiswa_ms');
    }
}
