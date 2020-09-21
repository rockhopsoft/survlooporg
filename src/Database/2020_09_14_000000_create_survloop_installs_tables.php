<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-migration.blade.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurvLoopInstallsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        \Illuminate\Support\Facades\DB::statement('SET SESSION sql_require_primary_key=0');
        Schema::create('sli_installations', function(Blueprint $table)
        {
            $table->increments('inst_id');
            $table->string('inst_name')->nullable();
            $table->longText('inst_desc')->nullable();
            $table->string('inst_url')->nullable();
            $table->string('inst_logo_url')->nullable();
            $table->integer('inst_user_id')->unsigned()->nullable();
            $table->string('inst_ip_addy')->nullable();
            $table->integer('inst_submission_progress')->nullable();
            $table->string('inst_version_ab')->nullable();
            $table->string('inst_tree_version')->nullable();
            $table->string('inst_unique_str')->nullable();
            $table->string('inst_is_mobile')->nullable();
            $table->string('inst_on_github')->nullable();
            $table->timestamps();
        });
        Schema::create('sli_install_stats', function(Blueprint $table)
        {
            $table->increments('inst_stat_id');
            $table->integer('inst_stat_install_id')->unsigned()->nullable();
            $table->date('inst_stat_date')->nullable();
            $table->integer('inst_stat_db_tables')->nullable();
            $table->integer('inst_stat_db_fields')->nullable();
            $table->integer('inst_stat_db_links')->nullable();
            $table->integer('inst_stat_surveys')->nullable();
            $table->integer('inst_stat_survey_nodes')->nullable();
            $table->integer('inst_stat_survey_nodes_mult')->nullable();
            $table->integer('inst_stat_survey_nodes_open')->nullable();
            $table->integer('inst_stat_survey_nodes_numb')->nullable();
            $table->integer('inst_stat_pages')->nullable();
            $table->integer('inst_stat_page_nodes')->nullable();
            $table->integer('inst_stat_users')->nullable();
            $table->integer('inst_stat_survey1_complete')->nullable();
            $table->integer('inst_stat_lines_controllers')->nullable();
            $table->integer('inst_stat_lines_views')->nullable();
            $table->integer('inst_stat_bytes_controllers')->nullable();
            $table->integer('inst_stat_bytes_database')->nullable();
            $table->integer('inst_stat_bytes_views')->nullable();
            $table->integer('inst_stat_bytes_uploads')->nullable();
            $table->timestamps();
            $table->index('inst_stat_install_id');
            $table->index('inst_stat_date');
        });
        Schema::create('sli_requests', function(Blueprint $table)
        {
            $table->increments('req_id');
            $table->string('req_title')->nullable();
            $table->longText('req_description')->nullable();
            $table->boolean('req_is_coder')->nullable();
            $table->string('req_email')->nullable();
            $table->string('req_is_mobile')->nullable();
            $table->integer('req_user_id')->unsigned()->nullable();
            $table->integer('req_submission_progress')->nullable();
            $table->string('req_unique_str')->nullable();
            $table->string('req_tree_version')->nullable();
            $table->string('req_version_ab')->nullable();
            $table->string('req_ip_addy')->nullable();
            $table->timestamps();
        });
        Schema::create('sli_request_skills', function(Blueprint $table)
        {
            $table->increments('req_skl_id');
            $table->integer('req_skl_request_id')->unsigned()->nullable();
            $table->integer('req_skl_skill')->unsigned()->nullable();
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
        Schema::drop('sli_requests');
        Schema::drop('sli_request_skills');
    
    }
}
