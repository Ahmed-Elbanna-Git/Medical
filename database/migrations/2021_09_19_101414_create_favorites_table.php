<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFavoritesTable extends Migration {

	public function up()
	{
		Schema::create('favorites', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->integer('user_id')->nullable();
			$table->integer('model_id')->nullable();
			$table->string('model_type', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('favorites');
	}
}