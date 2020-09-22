<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class SLIInstallations extends Model
{
    protected $table      = 'sli_installations';
    protected $primaryKey = 'inst_id';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'inst_name', 
		'inst_desc', 
		'inst_url', 
		'inst_on_github', 
		'inst_logo_url',
		'inst_icon_url',
		'inst_user_id', 
		'inst_ip_addy', 
		'inst_submission_progress', 
		'inst_version_ab', 
		'inst_tree_version', 
		'inst_unique_str', 
		'inst_is_mobile', 
    ];
    
    // END Survloop auto-generated portion of Model
    
}
