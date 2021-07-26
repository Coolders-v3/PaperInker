<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIllustrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illustrations', function (Blueprint $table) {
            $table->id();
            $table->string('genre');
            $table->string('title');
            $table->string('description');
            $table->year('year');
            $table->boolean('favorite')->default(0);
            $table->unsignedBigInteger('illustrator_id')->nullable();
           // $table->foreign('illustrator_id')->references('id')->on('illustrators')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('illustrations');
    }
}
