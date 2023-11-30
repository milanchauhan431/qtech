<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LedgerMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ledger_master', function(Blueprint $table){
            $table->id();
            $table->bigInteger('firm_id')->defualt(0)->index();
            $table->string('ledger_code');
            $table->string('ledger_name')->index();
            $table->string('salutation',4)->nullable();
            $table->string('contact_person',180)->nullable();
            $table->string('email',80)->nullable();
            $table->string('mobile_no',15)->nullable();
            $table->string('whatsapp_no',15)->nullable();
            $table->integer('credit_days')->defualt(0);
            $table->bigInteger('group_id')->defualt(0)->index();
            $table->string('group_name',180)->nullable()->index();
            $table->string('group_code',10)->nullable()->index();
            $table->double('op_balance',12,5)->defualt(0);
            $table->double('cl_balance',12,5)->defualt(0);
            $table->string('registration_type',40)->nullable()->comment('1 = Registerd, 2 = Composition, 3 = Overseas, 4 = Un-Registerd');
            $table->string('gstin_no',80)->nullable();
            $table->string('pan_no',80)->nullable();
            $table->string('reg_no',80)->nullable();
            $table->bigInteger('country_id')->default(0);
            $table->bigInteger('state_id')->default(0);
            $table->bigInteger('city_id')->default(0);
            $table->longText('address')->nullable();
            $table->string('pin_code',10)->nullable();
            $table->bigInteger('ship_country_id')->default(0);
            $table->bigInteger('ship_state_id')->default(0);
            $table->bigInteger('ship_city_id')->default(0);
            $table->longText('ship_address')->nullable();
            $table->string('ship_pin_code',10)->nullable();
            $table->tinyInteger('is_billwise')->defualt(0)->comment('0 = No, 1 = Yes');    
            $table->string('system_code',80)->nullable();
            $table->tinyInteger('is_active')->defualt(1)->comment('0 = In-active, 1 = Active');
            $table->bigInteger('created_by')->default(0)->index();
            $table->bigInteger('updated_by')->default(0)->index();
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
        Schema::dropIfExists('ledger_master');
    }
}
