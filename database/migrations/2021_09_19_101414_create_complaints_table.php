<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComplaintsTable extends Migration {

	public function up()
	{
		Schema::create('complaints', function(Blueprint $table) {
			 $table->id();
			$table->timestamps();
			$table->string('name', 255)->nullable();
			$table->string('email', 255)->nullable();
			$table->string('phone', 255)->nullable();
			$table->longText('note')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('complaints');
	}
}