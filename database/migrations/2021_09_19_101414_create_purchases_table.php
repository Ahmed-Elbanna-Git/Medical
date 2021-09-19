<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchasesTable extends Migration {

	public function up()
	{
		Schema::create('purchases', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->softDeletes();
			$table->integer('code')->nullable();
			$table->longText('note')->nullable();
			$table->integer('supplier_id')->unsigned();
			$table->float('total')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('purchases');
	}
}