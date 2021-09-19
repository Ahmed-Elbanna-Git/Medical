<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqsTable extends Migration {

	public function up()
	{
		Schema::create('faqs', function(Blueprint $table) {
			$table->id();

			$table->timestamps();
			$table->softDeletes();
			$table->string('model_type', 255)->nullable();
			$table->integer('model_id')->nullable();
			$table->string('name', 255)->nullable();
			$table->longText('description')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('faqs');
	}
}