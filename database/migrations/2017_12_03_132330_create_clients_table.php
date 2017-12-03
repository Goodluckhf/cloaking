<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('clients', function(Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
            $table->boolean('is_proxy');
            $table->timestamps();
            $table->json('data');

            $table->index('ip');
            $table->index('is_proxy');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('clients');
	}

}
