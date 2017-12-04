<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsModerOffer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('offers', function(Blueprint $table) {
		    $table->boolean('is_moder');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('offers', function(Blueprint $table) {
		    $table->dropColumn('is_moder');
		});
	}

}
