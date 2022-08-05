<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('role')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->boolean('mobile_status')->default(0);
            $table->string('email')->nullable();
            $table->boolean('email_status')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->longText('upload_photo')->nullable();
            $table->string('dob')->nullable();
            $table->string('address_id')->nullable();
            $table->string('password')->nullable();
            $table->boolean('is_active')->default(1);
            $table->string('device_id')->nullable();
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}