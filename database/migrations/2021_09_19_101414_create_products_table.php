<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 255)->nullable();
			$table->longText('description')->nullable();
			$table->string('image', 255)->nullable();
			$table->string('product_price', 255)->nullable();
			$table->string('service_price', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}