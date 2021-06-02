<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('season_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('course_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('title');
            $table->string('video');
            $table->integer('episode_number');
            $table->string('slug')->unique();
            $table->boolean('freeable')->default(0);
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
        Schema::dropIfExists('episodes');
    }
}
