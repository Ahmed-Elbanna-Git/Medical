<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromoCodesTable extends Migration {

	public function up()
	{
		Schema::create('promo_codes', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->datetime('expire_date')->nullable();
			$table->integer('limit')->nullable()->default('100');
			$table->boolean('active')->default(0);
			$table->float('discount')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('promo_codes');
	}
}