<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvicePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advice_prescriptions', function (Blueprint $table) {
            $table->unsignedBigInteger('Prescription_id')->index();
            $table->unsignedBigInteger('Advice_id')->index();
            $table->foreign('Prescription_id')->references('id')->on('Prescriptions')->onDelete('cascade');
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
        Schema::dropIfExists('advice_prescriptions');
    }
}
