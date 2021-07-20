<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilWebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_web', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aplikasi');
            $table->string('informasi_aplikasi');
            $table->string('logo');
            $table->text('alamat_lengkap');
            $table->text('google_maps');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
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
        Schema::dropIfExists('profil_web');
    }
}
