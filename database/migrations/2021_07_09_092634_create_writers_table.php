<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickName');
            $table->string('password');
            $table->string('confirmPassword');
            $table->string('personaldescription');
            $table->string('personalImage')->nullable();
            $table->string('jobGenre');
            $table->string('title');
            $table->string('jobText');
            $table->date('yearOfCreation');
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
        Schema::dropIfExists('writers');
    }
}
