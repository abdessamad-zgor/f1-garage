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
        Schema::create('reparations', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('status')->default('en attente');
            $table->timestamp('startDate')->nullable();
            $table->timestamp('endDate')->nullable();
            $table->text('mechanicNotes')->nullable();
            $table->text('clientNotes')->nullable();
            $table->foreignId('client_id')->constrained('users');
            $table->foreignId('vehicule_id')->constrained();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reparations');
    }
};
