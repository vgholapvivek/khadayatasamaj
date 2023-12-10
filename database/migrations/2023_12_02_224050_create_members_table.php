<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('membership_no')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('whatsapp_no');
            $table->string('gender');
            $table->date('dob');
            $table->string('blood_group')->nullable();
            $table->string('marital_status');
            $table->string('pan_no')->nullable();
            $table->text('address');
            $table->string('native_place');
            $table->string('state');
            $table->string('pin_code');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo_path')->nullable();
            // Add any other fields you need here
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
        Schema::dropIfExists('members');
    }
}
