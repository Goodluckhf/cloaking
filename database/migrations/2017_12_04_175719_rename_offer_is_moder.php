<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameOfferIsModer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('offers', function(Blueprint $table) {
            $table->renameColumn('is_moder', 'is_approved');
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
            $table->renameColumn('is_approved', 'is_moder');
        });
	}

}
