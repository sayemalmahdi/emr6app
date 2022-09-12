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
            $table->bigIncrements('id');

            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->string('patient_weight')->nullable();
            $table->string('blood_pressure')->nullable();
            $table->string('pulse')->nullable();
            $table->string('patient_complaint')->nullable();
            $table->string('notes')->nullable();
            $table->string('duration')->nullable();
            $table->string('investigation_name')->nullable();
            $table->string('instrustion')->nullable();
            $table->string('diagnosis_name')->nullable();
            $table->string('comment')->nullable();
            $table->string('visit_after_days')->nullable();
            $table->string('medicines')->nullable();
            

            

            $table->integer('status')->nullable();
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
