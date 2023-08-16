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
        Schema::create('res', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('Apaterno');
            $table->string('Amaterno',);
            $table->date('fdn');
            $table->string('correo');
            $table->string('tel',10);
            $table->string('espe');
            $table->string('curso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('res');
    }
};
