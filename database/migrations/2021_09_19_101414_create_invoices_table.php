<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	public function up()
	{
		Schema::create('invoices', function(Blueprint $table) {
			$table->id();

			$table->timestamps();
			$table->softDeletes();
			$table->integer('reservation_id')->unsigned();
			$table->float('total', 8,2)->nullable()->default('0');
			$table->integer('promo_code')->nullable();
			$table->float('discount', 8,2)->nullable()->default('0');
			$table->string('discount_type', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('invoices');
	}
}