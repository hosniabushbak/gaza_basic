<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('crm_customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->longText('full_name')->nullable();
            $table->string('user_identification')->nullable();
            $table->string('clinic_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->date('birthday')->nullable();
            $table->longText('new_address')->nullable();
            $table->longText('unrwa_clinic')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
