<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dish_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dish_id')
                ->constrained('dishes')
                ->cascadeOnDelete();
            $table->string('locale', 5);
            $table->string('name', 200);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->unique(['dish_id', 'locale']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dish_translations');
    }
};
