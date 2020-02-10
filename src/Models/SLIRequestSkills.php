<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class SLIRequestSkills extends Model
{
    protected $table      = 'sli_request_skills';
    protected $primaryKey = 'req_skl_id';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'req_skl_request_id', 
		'req_skl_skill', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
