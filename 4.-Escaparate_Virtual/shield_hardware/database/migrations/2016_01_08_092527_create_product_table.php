<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('name');
                        $table->float('price');
                        $table->string('image');
                        $table->float('discount');
                        $table->boolean('promotion');
                        $table->boolean('offer');
                        
                        $table->integer('category_id')->unsigned();
                        $table->foreign('category_id')
                              ->references('id')
                              ->on('category')
                              ->onDelete('cascade');
                        
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}
}
