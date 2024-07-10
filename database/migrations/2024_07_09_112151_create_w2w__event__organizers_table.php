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
        Schema::create('w2w__event__organizers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->string('organizer_name');
            $table->string('organizer_location')->nullable();
            $table->string('organizer_logo')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_confirmed')->default(false);
            $table->timestamps();

            // Reference the correct table name
            $table->foreign('event_id')->references('id')->on('w2w__events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('w2w__event__organizers');
    }
};
