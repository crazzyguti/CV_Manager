<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('fname', 100);
			$table->string('lname', 100);
            $table->string('email', 100)->unique();
            $table->string('phone',30)->unique();
			$table->string('password', 100);
            $table->string('gender', 10);
            $table->date('bdate');
			$table->string('register_ip', 15);
			$table->string('remember_token', 100)->nullable();
            $table->string('active_token', 100)->nullable();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}
