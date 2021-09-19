<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagTable extends Migration {

	public function up()
	{
		Schema::create('tag', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->string('tag', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('tag');
	}
}