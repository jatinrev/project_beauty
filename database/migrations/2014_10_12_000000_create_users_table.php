<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('user_type', array('isAdmin', 'customer', 'business')); // DONT CHANGE THIS BECAUSE FOR REGISTRATION VALIDATION HAVE BEEN APPLIED, WHICH CAN CONFLICT.
            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@admin.com',
            'confirmed' => 1,
            'password'  => bcrypt('admin'),
            'user_type' => 'isAdmin'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
