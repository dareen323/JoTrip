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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('location')->nullable();
            $table->string('tags')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('city')->nullable();
            // $table->string('duration')->nullable();
            $table->binary('thumbnail1')->nullable();
            $table->binary('thumbnail2')->nullable();
            $table->binary('thumbnail3')->nullable();
            $table->boolean('publish')->default('1');
            $table->softDeletes();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('blogs');
    }
};
