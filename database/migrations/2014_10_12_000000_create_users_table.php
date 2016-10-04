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
            $table->string('username')->nullable()->unique();
            $table->string('email')->unique();
            $table->enum('user_type', array('isAdmin', 'customer', 'business')); // DONT CHANGE THIS BECAUSE FOR REGISTRATION VALIDATION HAVE BEEN APPLIED, WHICH CAN CONFLICT.
            $table->string('profession')->nullable();
            $table->string('address')->nullable();
            $table->string('about')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linked_in_link')->nullable();
            $table->boolean('confirmed')->default(0); // FOR EMAIL ID CONFIRMATION
            $table->boolean('registration_confirm')->default(0); // THIS COLUMN IS HERE TO CHECK IF USER HAS COMPLETED THE CONFERMATION PROCESS.
            $table->string('confirmation_code')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        User::create([
            'name'      => 'Admin',
            'username'  => 'admin',
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
