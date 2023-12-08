<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_ms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('status');
            $table->integer('departemen_id');
            $table->string('nippns');
            $table->string('instansi');
            $table->string('akte');
            $table->string('izin');
            $table->char('statuskerja');
            $table->char('sesuaibidang');
            $table->string('jabatan');
            $table->string('email');
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
        Schema::dropIfExists('dosen_ms');
    }
}
