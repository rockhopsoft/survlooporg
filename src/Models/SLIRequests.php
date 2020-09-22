<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class SLIRequests extends Model
{
    protected $table      = 'sli_requests';
    protected $primaryKey = 'req_id';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'req_title', 
		'req_description', 
		'req_is_coder', 
		'req_email', 
		'req_is_mobile', 
		'req_user_id', 
		'req_submission_progress', 
		'req_unique_str', 
		'req_tree_version', 
		'req_version_ab', 
		'req_ip_addy', 
    ];
    
    // END Survloop auto-generated portion of Model
    
}
