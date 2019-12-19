<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexslidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indexsliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('indexslider_heading');
            $table->string('indexslider_sub_heading');
            $table->string('indexslider_details');
            $table->string('indexslider_image');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indexsliders');
    }
}
