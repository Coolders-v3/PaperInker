<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIllustratorWriterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illustrator_writer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('illustrator_id');
            $table->unsignedBigInteger('writer_id');
            $table->foreign('illustrator_id')->references('id')->on('illustrators')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('writer_id')->references('id')->on('writers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('illustrator_writer');
    }
}
