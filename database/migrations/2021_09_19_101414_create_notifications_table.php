<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificationsTable extends Migration {

	public function up()
	{
		Schema::create('notifications', function(Blueprint $table) {
			$table->id();

			$table->timestamps();
			$table->integer('user_id')->nullable();
			$table->string('link', 255)->nullable();
			$table->longText('content')->nullable();
			$table->integer('model_id')->nullable();
			$table->string('model_type', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('notifications');
	}
}