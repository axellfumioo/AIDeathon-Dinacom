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
        Schema::create('trashes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Assuming each billing address is linked to a user
            $table->string('trash_uuid');
            $table->string('trash_name');
            $table->enum('trash_type', ['organik', 'nonorganik', 'other']);
            $table->string('description');
            $table->string('message');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trashes');
    }
};
