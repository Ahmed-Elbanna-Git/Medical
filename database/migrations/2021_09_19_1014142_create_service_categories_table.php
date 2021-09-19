<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('service_categories', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name', 255)->nullable();
			$table->boolean('active')->default(0);
		});
	}

	public function down()
	{
		Schema::drop('service_categories');
	}
}