<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatrimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrimonials', function (Blueprint $table) {
            $table->id();
            $table->string('gender');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->text('profile_desc');
            $table->text('interest');
            $table->text('family_details');
            $table->text('image');
            $table->integer('status');
            $table->string('type');
            $table->integer('member_status');
            $table->date('date');
            $table->integer('created_by');
            $table->smallInteger('ad_type');
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
        Schema::dropIfExists('matrimonials');
    }
}
