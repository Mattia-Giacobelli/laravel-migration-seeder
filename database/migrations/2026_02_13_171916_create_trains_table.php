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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 75);
            $table->string('departure_station', 75);
            $table->string('destination_station', 75);
            $table->date('departure_day');
            $table->time('departure_time');
            $table->string('arrival_time');
            $table->string('train_code', 100);
            $table->smallInteger('carriages');
            $table->boolean('on_time');
            $table->boolean('canceled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
