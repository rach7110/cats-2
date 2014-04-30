<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
    SChema::create('users', function($table){
      $table->incrememnts('id');
      $table->string('username');
      $table->string('password');
      $table->boolean('is_admin');
      $table->timestamps();
    });

    Schema::table('cats', fucntion($table){
      $table->integer('user_id')->nullable()->reference('id')->on('users');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
