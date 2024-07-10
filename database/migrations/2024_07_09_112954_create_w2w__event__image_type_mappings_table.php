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
        Schema::create('w2w__event__image_type_mappings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_type_id');
            $table->unsignedBigInteger('image_type_id');
            $table->string('aspect_size')->nullable();
            $table->integer('maximum_size')->nullable();
            $table->string('allowed_types')->nullable();
            $table->timestamps();

            $table->foreign('event_type_id')->references('id')->on('w2w__events')->onDelete('cascade');
            $table->foreign('image_type_id')->references('id')->on('w2w__event__image_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('w2w__event__image_type_mappings');
    }
};
