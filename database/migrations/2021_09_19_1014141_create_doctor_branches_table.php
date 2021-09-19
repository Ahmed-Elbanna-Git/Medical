<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorBranchesTable extends Migration {

	public function up()
	{
		Schema::create('doctor_branches', function(Blueprint $table) {
			 $table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('doctor_id')->unsigned();
			$table->integer('branch_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('doctor_branches');
	}
}