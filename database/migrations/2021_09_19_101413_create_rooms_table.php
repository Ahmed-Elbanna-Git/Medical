<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomsTable extends Migration {

	public function up()
	{
		Schema::create('rooms', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->string('name')->nullable();
			$table->integer('branch_id')->unsigned();
			$table->datetime('working_from');
			$table->datetime('working_to');
			$table->string('phone')->nullable();
			$table->boolean('active')->default(0);
		});
	}

	public function down()
	{
		Schema::drop('rooms');
	}
}