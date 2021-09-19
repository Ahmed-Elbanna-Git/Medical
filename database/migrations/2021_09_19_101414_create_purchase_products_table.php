<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseProductsTable extends Migration {

	public function up()
	{
		Schema::create('purchase_products', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->integer('purchase_id')->unsigned();
			$table->string('product_name', 255)->nullable();
			$table->string('quantity', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('purchase_products');
	}
}