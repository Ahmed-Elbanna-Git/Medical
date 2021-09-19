<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceItemsTable extends Migration {

	public function up()
	{
		Schema::create('invoice_items', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('invoice_id')->unsigned();
			$table->integer('model_id')->unsigned()->nullable();
			$table->string('model_type', 255)->nullable();
			$table->float('price', 8,2)->nullable()->default('0');
		});
	}

	public function down()
	{
		Schema::drop('invoice_items');
	}
}