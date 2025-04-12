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
        Schema::create('_paquetes__turisticos', function (Blueprint $table) {
            $table->id();
            $table->string('destino');
            $table->text('descripcion');
            $table->string('duracion');
            $table->decimal('precio', 10, 2);
            $table->text('incluye');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_paquetes__turisticos');
    }
};
