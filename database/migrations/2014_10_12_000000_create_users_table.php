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
            $table->string('name');
            $table->tinyInteger('role');
            $table->longText("profile_photo")->nullable();
            $table->string('email')->unique();
            $table->string('mobile_no',20)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->longText('password');
            $table->rememberToken();
            $table->string('otp',10)->nullable();
            $table->tinyInteger('is_active')->default(0)->comment('0 = In-active, 1 = Active, 2 = Block');
            $table->bigInteger('client_id');
            $table->bigInteger('created_by')->default(0);
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
