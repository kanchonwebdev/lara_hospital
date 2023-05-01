<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dob');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('nid');
            $table->string('address');
            $table->string('blood');
            $table->string('height');
            $table->string('weight');
            $table->string('b_pressure');
            $table->string('pulse');
            $table->string('temp');
            $table->string('title');
            $table->string('type');
            $table->string('casualty');
            $table->string('dep');
            $table->string('doctor');
            $table->string('patient_type');
            $table->string('ad_date');
            $table->string('bed');
            $table->string('bed_number');
            $table->string('test_report');
            $table->string('patient_id');
            $table->text('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
