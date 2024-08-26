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
        Schema::create('adsos', function (Blueprint $table) {
            $table->id();
            $table->string('adso');
            $table->unsignedBigInteger('id_ados2');

    $table->foreign('id_ados2')->references('id')->on('pruebas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adsos');
    }
};
