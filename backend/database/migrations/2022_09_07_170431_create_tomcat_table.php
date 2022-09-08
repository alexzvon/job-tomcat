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
        Schema::create('tomcat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('species_id');
            $table->integer('old');
            $table->string('name');
            $table->text('img')->nullable();
            $table->timestamps();

            $table->foreign('species_id')->references('id')->on('species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tomcat');
    }
};
