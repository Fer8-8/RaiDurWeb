<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
      Schema::create('tinacos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->text('descripcion');
        $table->decimal('precio', 8, 2);
        $table->string('imagen');
        $table->string('categoria')->nullable();
        $table->timestamps();
    });
    }
    public function down(): void
    {
        Schema::dropIfExists('accesorios');
    }
};
