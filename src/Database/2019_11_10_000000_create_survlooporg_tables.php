<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-migration.blade.php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurvLoopOrgTables extends Migration
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
			$table->longText('InstDesc')->nullable();
			$table->string('InstURL')->nullable();
			$table->string('InstLogoUrl')->nullable();
			$table->integer('InstUserID')->unsigned()->nullable();
			$table->string('InstIPaddy')->nullable();
			$table->integer('InstSubmissionProgress')->nullable();
			$table->string('InstVersionAB')->nullable();
			$table->string('InstTreeVersion')->nullable();
			$table->string('InstUniqueStr')->nullable();
			$table->string('InstIsMobile')->nullable();
			$table->timestamps();
		});
		Schema::create('SLI_InstallStats', function(Blueprint $table)
		{
			$table->increments('InstStatID');
			$table->integer('InstStatInstallID')->unsigned()->nullable();
			$table->date('InstStatDate')->nullable();
			$table->integer('InstStatDbTables')->nullable();
			$table->integer('InstStatDbFields')->nullable();
			$table->integer('InstStatSurveys')->nullable();
			$table->integer('InstStatSurveyNodes')->nullable();
			$table->integer('InstStatSurveyNodesMult')->nullable();
			$table->integer('InstStatSurveyNodesOpen')->nullable();
			$table->integer('InstStatSurveyNodesNumb')->nullable();
			$table->integer('InstStatPages')->nullable();
			$table->integer('InstStatPageNodes')->nullable();
			$table->integer('InstStatUsers')->nullable();
			$table->integer('InstStatSurvey1Complete')->nullable();
			$table->integer('InstStatCodeLinesControllers')->nullable();
			$table->integer('InstStatCodeLinesViews')->nullable();
			$table->integer('InstStatBytesControllers')->nullable();
			$table->integer('InstStatBytesDatabase')->nullable();
			$table->integer('InstStatBytesViews')->nullable();
			$table->integer('InstStatBytesUploads')->nullable();
			$table->timestamps();
		});
		Schema::create('SLI_Requests', function(Blueprint $table)
		{
			$table->increments('ReqID');
			$table->string('ReqTitle')->nullable();
			$table->longText('ReqDescription')->nullable();
			$table->boolean('ReqIsCoder')->nullable();
			$table->string('ReqEmail')->nullable();
			$table->string('ReqIsMobile')->nullable();
			$table->integer('ReqUserID')->unsigned()->nullable();
			$table->integer('ReqSubmissionProgress')->nullable();
			$table->string('ReqUniqueStr')->nullable();
			$table->string('ReqTreeVersion')->nullable();
			$table->string('ReqVersionAB')->nullable();
			$table->string('ReqIPaddy')->nullable();
			$table->timestamps();
		});
		Schema::create('SLI_RequestSkills', function(Blueprint $table)
		{
			$table->increments('ReqSklID');
			$table->integer('ReqSklRequestID')->unsigned()->nullable();
			$table->integer('ReqSklSkill')->unsigned()->nullable();
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
		Schema::drop('SLI_InstallStats');
		Schema::drop('SLI_Requests');
		Schema::drop('SLI_RequestSkills');
	
    }
}
