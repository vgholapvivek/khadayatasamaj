<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updates', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('venue')->nullable();
            $table->string('details')->nullable();
            $table->string('date')->nullable();
            $table->string('total_person_in_event')->nullable();
            $table->string('vip_guest_name')->nullable();
            $table->integer('sequence')->nullable();
            $table->string('status');
            $table->integer('show_in_homepage')->nullable();
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
        Schema::dropIfExists('updates');
    }
}
