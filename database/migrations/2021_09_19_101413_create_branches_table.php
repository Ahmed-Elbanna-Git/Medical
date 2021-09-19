<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchesTable extends Migration {

	public function up()
	{
		Schema::create('branches', function(Blueprint $table) {
			 $table->id();
			$table->timestamps();
			$table->softDeletes(); 
			$table->string('name', 255)->default('name');
			$table->longText('address')->nullable();
			$table->datetime('working_from');
			$table->datetime('working_to');
			$table->string('lat', 255)->nullable();
			$table->string('long', 255)->nullable();
			$table->string('phone')->nullable();
			$table->boolean('active')->default(0);
		});
	}

	public function down()
	{
		Schema::drop('branches');
	}
}