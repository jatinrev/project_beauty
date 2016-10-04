<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_setting', function(Blueprint $table){
            $table->increments('id')->comment = 'master table of user table.';
            $table->string('table_setting_key')->comment = 'like \'user_language\'';
            $table->text('table_setting_value')->comment = 'like \'english\', only unique things will come.';
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
        Schema::dropIfExists('table_setting');
    }
}
