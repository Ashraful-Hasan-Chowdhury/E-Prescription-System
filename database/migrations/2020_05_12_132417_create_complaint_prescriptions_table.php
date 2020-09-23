<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintPrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaint_prescriptions', function (Blueprint $table) {
            $table->unsignedBigInteger('Prescription_id')->index();
            $table->unsignedBigInteger('Complaint_id')->index();
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
        Schema::dropIfExists('complaint_prescriptions');
    }
}
