<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class SLIRequestSkills extends Model
{
    protected $table      = 'SLI_RequestSkills';
    protected $primaryKey = 'ReqSklID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'ReqSklRequestID', 
		'ReqSklSkill', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
