<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dusun_id');
            $table->unsignedBigInteger('jenis_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image');
            $table->decimal('Latitude',10,8);
            $table->decimal('Longitude',11,8);
            $table->timestamps();

            $table->foreign('dusun_id')->references('id')->on('dusuns')->onDelete('cascade');
            $table->foreign('jenis_id')->references('id')->on('jenis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
