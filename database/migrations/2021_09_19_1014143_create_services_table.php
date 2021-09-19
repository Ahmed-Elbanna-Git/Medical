<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	public function up()
	{
		Schema::create('services', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 255)->nullable();
			$table->integer('service_category_id')->unsigned();
			$table->enum('type',['sessions' ,'appointment'])->default('appointment');
			$table->decimal('price_from', 8,2)->nullable();
			$table->datetime('duration')->nullable();
			$table->decimal('price_to', 8,2)->nullable();
			$table->boolean('active')->default(0);
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}