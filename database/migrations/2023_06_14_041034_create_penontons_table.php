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
        Schema::create('penontons', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nomorid', 100)->uniqid;
            $table->string('name', 100);
            $table->string('gender', 100);
            $table->string('type_tiket', 100);
            $table->string('konser', 255);
            $table->string('status', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penontons');
    }
};
