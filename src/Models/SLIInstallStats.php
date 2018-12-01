<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class SLIInstallStats extends Model
{
    protected $table      = 'SLI_InstallStats';
    protected $primaryKey = 'InstStatID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'InstStatInstallID', 
		'InstStatDate', 
		'InstStatCodeLinesControllers', 
		'InstStatCodeLinesViews', 
		'InstStatDbTables', 
		'InstStatDbFields', 
		'InstStatSurveys', 
		'InstStatSurveyNodes', 
		'InstStatSurveyNodesMult',
		'InstStatSurveyNodesOpen',
		'InstStatSurveyNodesNumb',
		'InstStatPages', 
		'InstStatPageNodes', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
