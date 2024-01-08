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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('table_id')->nullable();
            $table->string('reserver_name');
            $table->string('reserver_email');
            $table->string('reserver_phone');
            $table->timestamp('reservation_date');
            $table->integer('guest');
            $table->foreign('table_id')->references('id')->on('tables')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};