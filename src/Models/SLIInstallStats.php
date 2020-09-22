<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class SLIInstallStats extends Model
{
    protected $table      = 'sli_install_stats';
    protected $primaryKey = 'inst_stat_id';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'inst_stat_install_id', 
		'inst_stat_date', 
		'inst_stat_db_tables', 
		'inst_stat_db_fields', 
		'inst_stat_db_links', 
		'inst_stat_surveys', 
		'inst_stat_survey_nodes', 
		'inst_stat_survey_nodes_mult',
		'inst_stat_survey_nodes_open',
		'inst_stat_survey_nodes_numb',
		'inst_stat_pages', 
		'inst_stat_page_nodes', 
		'inst_stat_users', 
		'inst_stat_survey1_complete', 
		'inst_stat_lines_controllers', 
		'inst_stat_lines_views', 
		'inst_stat_bytes_controllers',
		'inst_stat_bytes_database',
		'inst_stat_bytes_uploads',
		'inst_stat_bytes_views',
    ];
    
    // END Survloop auto-generated portion of Model
    
}
