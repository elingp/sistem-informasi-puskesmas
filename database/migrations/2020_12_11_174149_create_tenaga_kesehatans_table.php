<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenagaKesehatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenaga_kesehatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('poli_id');
            $table->foreign('poli_id')->references('id')->on('polis')->onDelete('cascade');
            $table->string('nama');
            $table->string('jadwal');
            $table->string('no_telepon', 13);
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
        Schema::dropIfExists('tenaga_kesehatans');
    }
}
