<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('update_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('update_id')->nullable();
            $table->string('event_image')->nullable();
            $table->string('mobile_event_image')->nullable();
            $table->timestamps();
            $table->foreign('update_id')->references('id')->on('updates')->onDelete('cascade');
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
        Schema::dropIfExists('update_images');
    }
}
