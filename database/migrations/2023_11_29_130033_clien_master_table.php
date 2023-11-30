<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClienMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_master', function (Blueprint $table) {
            $table->id();
            $table->string('ref_code',80)->nullable();
            $table->string('business_name');
            $table->string('contact_person');
            $table->string('email')->unique();
            $table->string('mobile_no',20)->unique();
            $table->longText('address');
            $table->string('pin_code',20);
            $table->bigInteger('country_id')->default(0);
            $table->bigInteger('state_id')->default(0);
            $table->bigInteger('city_id')->default(0);
            $table->string('gstin_no',80)->nullable();
            $table->string('pan_no',80)->nullable();
            $table->string('registration_no',80)->nullable();
            $table->bigInteger('created_by')->defualt(0);
            $table->bigInteger('updated_by')->defualt(0);
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
        Schema::dropIfExists('client_master');
    }
}
