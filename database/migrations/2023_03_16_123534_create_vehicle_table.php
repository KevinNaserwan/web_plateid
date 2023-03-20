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
        Schema::create('vehicle', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->string('registnum');
            $table->string('name');
            $table->string('address');
            $table->string('brand');
            $table->string('type');
            $table->integer('manufacture');
            $table->string('cilinder');
            $table->string('color');
            $table->integer('year');
            $table->string('dateinspire');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
