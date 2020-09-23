<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->String("dNameEn");
            $table->String("dNameBn");
            $table->String("vTimeEn");
            $table->String("vTimeBn");
            $table->String("designationEn");
            $table->String("designationBn");
            $table->String("addressEn");
            $table->String("addressBn");
            $table->String("phoneEn");
            $table->String("phoneBn");
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
        Schema::dropIfExists('doctors');
    }
}
