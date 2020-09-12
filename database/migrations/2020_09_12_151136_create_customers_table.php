<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();//menghindari duplicate data
            $table->string('phone_number');
            $table->string('address');
            $table->unsignedBigInteger('district_id');//file ini akan merujuk pada table districts, nantinya akan mengambil data kota customer
            $table->boolean('status')->default(false);//tipenya boolean, dengan merujuk nilai default adalah false
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
        Schema::dropIfExists('customers');
    }
}
