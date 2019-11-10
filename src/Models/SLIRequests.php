<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class SLIRequests extends Model
{
    protected $table      = 'SLI_Requests';
    protected $primaryKey = 'ReqID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'ReqTitle', 
		'ReqDescription', 
		'ReqIsCoder', 
		'ReqEmail', 
		'ReqIsMobile', 
		'ReqUserID', 
		'ReqSubmissionProgress', 
		'ReqUniqueStr', 
		'ReqTreeVersion', 
		'ReqVersionAB', 
		'ReqIPaddy', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
