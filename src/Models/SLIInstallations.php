<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class SLIInstallations extends Model
{
    protected $table      = 'SLI_Installations';
    protected $primaryKey = 'InstID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'InstName', 
		'InstDesc', 
		'InstURL', 
		'InstOnGitHub', 
		'InstLogoUrl',
		'InstIconUrl',
		'InstUserID', 
		'InstIPaddy', 
		'InstSubmissionProgress', 
		'InstVersionAB', 
		'InstTreeVersion', 
		'InstUniqueStr', 
		'InstIsMobile', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
