<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('main_category_id')->comment = 'Parent id i.e id from service_main_category';
            $table->integer('sub_category_id');
            $table->string('service_name');
            $table->string('sub_service_name');
            $table->text('service_description');
            $table->integer('service_price');
            $table->time('service_time');
            $table->string('service_image_1');
            $table->string('service_image_2');
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
        Schema::dropIfExists('services');
    }
}
