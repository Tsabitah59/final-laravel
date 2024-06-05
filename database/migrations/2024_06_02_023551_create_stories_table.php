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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('slug');
            $table->mediumText('synopsis');
            $table->longText('story');
            $table->string('image');

            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->string('meta_description');

            $table->tinyInteger('trending')->default('0')->comment('0=no, 1=trending');
            $table->tinyInteger('status')->default('0')->comment('0=visible, 1=trending');

            // Relasi
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
