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
        Schema::create('w2w__events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_type_id');
            $table->string('event_type');
            $table->string('short_description');
            $table->text('long_description')->nullable();
            $table->string('event_logo')->nullable();
            $table->date('event_date');
            $table->time('event_start_time');
            $table->time('event_end_time');
            $table->string('event_location');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_postponed')->default(false);
            $table->date('postponed_date')->nullable();
            $table->timestamps();

            $table->foreign('event_type_id')->references('id')->on('w2w__event_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('w2w__events');
    }
};
