<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name')->unique();
            $table->string('password');
            $table->string('user_type');
            $table->string('user_email');
            $table->integer('user_phone');
            $table->timestamps();
         });
    }

   
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
