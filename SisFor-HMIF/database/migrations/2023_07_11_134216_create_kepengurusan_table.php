<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepengurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepengurusan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('divisi')->unique();
            $table->text('jabatan');
            $table->text('periode');
            $table->string('image');
            $table->text('judul');
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
        Schema::dropIfExists('kepengurusan');
    }
}
