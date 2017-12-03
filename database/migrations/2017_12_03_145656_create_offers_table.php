<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('offers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('landing_id');
            $table->timestamps();

            $table->index('name');
            $table->index('landing_id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('offers');
	}

}
