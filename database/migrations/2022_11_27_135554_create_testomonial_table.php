<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
        
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('type');
            $table->string('designation')->nullable();
            $table->string('facebook');
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->text('testimonial')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testomonial');
    }
};
