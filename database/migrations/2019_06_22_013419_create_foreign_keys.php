<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('permission_role', function(Blueprint $table) {
			$table->foreign('permission_id')->references('id')->on('permissions')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('permission_role', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('roles')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('role_user', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('roles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('role_user', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('role_user', function(Blueprint $table) {
			$table->foreign('createdby')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('login_attempts', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('users_detail', function(Blueprint $table) {
			$table->foreign('user')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('permission_role', function(Blueprint $table) {
			$table->dropForeign('permission_role_permission_id_foreign');
		});
		Schema::table('permission_role', function(Blueprint $table) {
			$table->dropForeign('permission_role_role_id_foreign');
		});
		Schema::table('role_user', function(Blueprint $table) {
			$table->dropForeign('role_user_role_id_foreign');
		});
		Schema::table('role_user', function(Blueprint $table) {
			$table->dropForeign('role_user_user_id_foreign');
		});
		Schema::table('role_user', function(Blueprint $table) {
			$table->dropForeign('role_user_createdby_foreign');
		});
		Schema::table('login_attempts', function(Blueprint $table) {
			$table->dropForeign('login_attempts_user_id_foreign');
		});
		Schema::table('users_detail', function(Blueprint $table) {
			$table->dropForeign('users_detail_user_foreign');
		});
	}
}