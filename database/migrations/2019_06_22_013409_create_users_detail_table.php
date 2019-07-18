<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersDetailTable extends Migration {

	public function up()
	{
		Schema::create('users_detail', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('user')->unsigned();
			$table->string('meta_key', 100);
			$table->text('meta_value');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users_detail');
	}
}
