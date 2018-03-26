<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-migration.blade.php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SLICreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
    	Schema::create('SLI_Installations', function(Blueprint $table)
		{
			$table->increments('InstID');
			$table->string('InstName')->nullable();
			$table->string('InstURL')->nullable();
			$table->longText('InstDesc')->nullable();
			$table->integer('InstUserID')->unsigned()->nullable();
			$table->foreign('InstUserID')->references('id')->on('users');
			$table->string('InstIPaddy')->nullable();
			$table->integer('InstSubmissionProgress')->nullable();
			$table->string('InstVersionAB')->nullable();
			$table->string('InstTreeVersion')->nullable();
			$table->string('InstUniqueStr')->nullable();
			$table->string('InstIsMobile')->nullable();
			$table->timestamps();
		});
	
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
    	Schema::drop('SLI_Installations');
	
    }
}
