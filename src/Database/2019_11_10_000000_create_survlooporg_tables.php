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
    	Schema::create('sli_installations', function(Blueprint $table)
		{
			$table->increments('inst_id');
			$table->string('inst_name')->nullable();
			$table->longText('InstDesc')->nullable();
			$table->string('inst_url')->nullable();
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
		Schema::create('sli_install_stats', function(Blueprint $table)
		{
			$table->increments('InstStatID');
			$table->integer('inst_stat_install_id')->unsigned()->nullable();
			$table->date('inst_stat_date')->nullable();
			$table->integer('inst_stat_db_tables')->nullable();
			$table->integer('inst_stat_db_fields')->nullable();
			$table->integer('inst_stat_surveys')->nullable();
			$table->integer('inst_stat_survey_nodes')->nullable();
			$table->integer('inst_stat_survey_nodes_mult')->nullable();
			$table->integer('inst_stat_survey_nodes_open')->nullable();
			$table->integer('inst_stat_survey_nodes_numb')->nullable();
			$table->integer('inst_stat_pages')->nullable();
			$table->integer('inst_stat_page_nodes')->nullable();
			$table->integer('inst_stat_users')->nullable();
			$table->integer('inst_stat_survey1_complete')->nullable();
			$table->integer('inst_stat_code_lines_controllers')->nullable();
			$table->integer('inst_stat_code_lines_views')->nullable();
			$table->integer('inst_stat_bytes_controllers')->nullable();
			$table->integer('inst_stat_bytes_database')->nullable();
			$table->integer('inst_stat_bytes_views')->nullable();
			$table->integer('inst_stat_bytes_uploads')->nullable();
			$table->timestamps();
		});
		Schema::create('sli_Requests', function(Blueprint $table)
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
		Schema::create('sli_RequestSkills', function(Blueprint $table)
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
    	Schema::drop('sli_installations');
		Schema::drop('sli_install_stats');
		Schema::drop('sli_Requests');
		Schema::drop('sli_RequestSkills');
	
    }
}
