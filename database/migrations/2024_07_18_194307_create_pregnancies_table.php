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
        Schema::create('pregnancies', function (Blueprint $table) {
            $table->id();
            $table->enum('birth_type', ['normal', 'cesarean', 'forceps']);
            $table->boolean('ectopic');
            $table->boolean('eclampsia');
            $table->enum('pregnancy_type', ['single', 'twin', 'triple_or_more', 'unknown']);
            $table->enum('result', ['in progress', 'failure', 'success', 'terminated', 'complicated', 'unknown']);
            $table->enum('risk', ['low', 'high']);
            $table->enum('status', ['candidate', 'pregnant', 'postpartum', 'done']);
            $table->string('start_blood_pressure');
            $table->float('start_weight');
            $table->enum('start_date_method', ['last menstrual period', 'ultrasound', 'unknown']);
            $table->date('probable_birth_date')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('medical_notes')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregnancies');
    }
};
