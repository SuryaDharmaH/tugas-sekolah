<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murids', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('name');
            $table->enum('kelas',['X','XI','XII']);
            $table->enum('jurusan',['RPL','TKJ','MM','DI','FILM','ANIMASI','PEKSOS','KI','TV']);
            $table->enum('keahlian', ['Frontend','Backend']);
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
        Schema::dropIfExists('murids');
    }
};
