<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuppliersTable extends Migration {

	public function up()
	{
		Schema::create('suppliers', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 255);
			$table->string('phone', 255)->nullable();
			$table->longText('notes')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('suppliers');
	}
}