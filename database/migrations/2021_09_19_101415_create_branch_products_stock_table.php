<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchProductsStockTable extends Migration {

	public function up()
	{
		Schema::create('branch_products_stock', function(Blueprint $table) {
			$table->id();

			$table->timestamps();
			$table->softDeletes();
			$table->integer('product_id')->unsigned();
			$table->integer('branch_id')->unsigned();
			$table->string('amount', 255);
			$table->integer('unit_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('branch_products_stock');
	}
}