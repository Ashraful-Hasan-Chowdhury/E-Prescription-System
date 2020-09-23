<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('pName')->nullable();
            $table->string('pAge')->nullable();
            $table->string('date')->nullable();
            $table->text('eproblem')->nullable();
            $table->string('elu')->nullable();
            $table->string('eru')->nullable();
            $table->string('eld')->nullable();
            $table->string('erd')->nullable();

            $table->text('iproblem')->nullable();
            $table->string('ilu')->nullable();
            $table->string('iru')->nullable();
            $table->string('ild')->nullable();
            $table->string('ird')->nullable();

            $table->text('aproblem1')->nullable();
            $table->string('alu1')->nullable();
            $table->string('aru1')->nullable();
            $table->string('ald1')->nullable();
            $table->string('ard1')->nullable();
            $table->text('aproblem2')->nullable();
            $table->string('alu2')->nullable();
            $table->string('aru2')->nullable();
            $table->string('ald2')->nullable();
            $table->string('ard2')->nullable();
            $table->text('aproblem3')->nullable();
            $table->string('alu3')->nullable();
            $table->string('aru3')->nullable();
            $table->string('ald3')->nullable();
            $table->string('ard3')->nullable();

            $table->text('prescription')->nullable();
            $table->string('meet')->nullable();
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
        Schema::dropIfExists('prescriptions');
    }
}
