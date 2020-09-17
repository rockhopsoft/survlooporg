<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-seeder.blade.php

namespace Database\Seeders;

use Auth;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SurvLoopOrgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {

	DB::table('sl_databases')->insert([
			'db_id' => 1,
			'db_user' => '1',
			'db_prefix' => 'sli_',
			'db_name' => 'SurvLoop Installs',
			'db_desc' => 'Who\'s Using SurvLoop?',
			'db_tables' => '5',
			'db_fields' => '43'
		]);
	
	DB::table('sl_tables')->insert([
			'tbl_id' => 30,
			'tbl_database' => '1',
			'tbl_name' => 'users',
			'tbl_eng' => 'Users',
			'tbl_desc' => 'This represents the Laravel Users table, but will not actually be implemented by SurvLoop as part of the database installation.',
			'tbl_group' => 'Users',
			'tbl_ord' => '15',
			'tbl_num_foreign_in' => '2'
		]);
		DB::table('sl_tables')->insert([
			'tbl_id' => 40,
			'tbl_database' => '1',
			'tbl_abbr' => 'inst_stat_',
			'tbl_name' => 'install_stats',
			'tbl_eng' => 'Install Stats',
			'tbl_desc' => 'Each record preserves a snapshot of various statistics tracked for this SurvLoop installation.',
			'tbl_notes' => 'Maybe auto-loadable via SurvLoop.php function getJsonSurvLoopStats()',
			'tbl_group' => 'SurvLoop Installations',
			'tbl_num_fields' => '19',
			'tbl_num_foreign_keys' => '1'
		]);
		DB::table('sl_tables')->insert([
			'tbl_id' => 45,
			'tbl_database' => '1',
			'tbl_abbr' => 'req_',
			'tbl_name' => 'requests',
			'tbl_eng' => 'Open Data Requests',
			'tbl_desc' => 'Each record represents a site visitor\'s request for some open data to be collected and shared with the world.',
			'tbl_group' => 'SurvLoop Installations',
			'tbl_num_fields' => '11',
			'tbl_num_foreign_keys' => '1',
			'tbl_num_foreign_in' => '1'
		]);
		DB::table('sl_tables')->insert([
			'tbl_id' => 46,
			'tbl_database' => '1',
			'tbl_abbr' => 'req_skl_',
			'tbl_name' => 'request_skills',
			'tbl_eng' => 'Open Data Request Skills',
			'tbl_desc' => 'Each record associates one programming skill with one user who requested the open data. This allows many skills to be linked to one request.',
			'tbl_type' => 'Subset',
			'tbl_group' => 'SurvLoop Installations',
			'tbl_num_fields' => '2',
			'tbl_num_foreign_keys' => '1'
		]);
		DB::table('sl_tables')->insert([
			'tbl_id' => 29,
			'tbl_database' => '1',
			'tbl_abbr' => 'inst_',
			'tbl_name' => 'installations',
			'tbl_eng' => 'SurvLoop Installations',
			'tbl_desc' => 'This represents each website or system which is currently powered by SurvLoop.',
			'tbl_group' => 'SurvLoop Installations',
			'tbl_num_fields' => '11',
			'tbl_num_foreign_keys' => '1',
			'tbl_num_foreign_in' => '1'
		]);
	
	DB::table('sl_fields')->insert([
			'fld_id' => 409,
			'fld_database' => '1',
			'fld_table' => '29',
			'fld_spec_source' => '0',
			'fld_name' => 'name',
			'fld_eng' => 'System Name',
			'fld_desc' => 'Indicates the plain name of the system which is powered by SurvLoop.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_data_length' => '0',
			'fld_char_support' => ',Letters,Numbers,Keyboard,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 402,
			'fld_database' => '1',
			'fld_table' => '29',
			'fld_ord' => '2',
			'fld_spec_source' => '0',
			'fld_name' => 'url',
			'fld_eng' => 'System URL',
			'fld_desc' => 'Indicates the URL of the system which is powered by SurvLoop.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_data_length' => '0',
			'fld_char_support' => ',Letters,Numbers,Keyboard,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 434,
			'fld_database' => '1',
			'fld_table' => '29',
			'fld_ord' => '1',
			'fld_spec_source' => '0',
			'fld_name' => 'desc',
			'fld_eng' => 'System Description',
			'fld_desc' => 'Describes the system which is powered by SurvLoop.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'TEXT',
			'fld_data_length' => '0',
			'fld_key_type' => ',',
			'fld_null_support' => '0'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 432,
			'fld_database' => '1',
			'fld_table' => '29',
			'fld_ord' => '4',
			'fld_spec_source' => '0',
			'fld_name' => 'user_id',
			'fld_eng' => 'User ID',
			'fld_desc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'fld_foreign_table' => '30',
			'fld_foreign_min' => '0',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => '0',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',Foreign,',
			'fld_null_support' => '0'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 408,
			'fld_database' => '1',
			'fld_table' => '29',
			'fld_ord' => '5',
			'fld_spec_source' => '0',
			'fld_name' => 'ip_addy',
			'fld_eng' => 'IP Address',
			'fld_desc' => 'Encrypted IP address of the current user.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_data_length' => '0',
			'fld_key_type' => ',',
			'fld_null_support' => '0'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 433,
			'fld_database' => '1',
			'fld_table' => '29',
			'fld_ord' => '6',
			'fld_spec_source' => '0',
			'fld_name' => 'submission_progress',
			'fld_eng' => 'Experience Node Progress',
			'fld_desc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 435,
			'fld_database' => '1',
			'fld_table' => '29',
			'fld_ord' => '7',
			'fld_spec_source' => '0',
			'fld_name' => 'version_ab',
			'fld_eng' => 'A/B Testing Version',
			'fld_desc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_data_length' => '0',
			'fld_key_type' => ',',
			'fld_null_support' => '0'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 436,
			'fld_database' => '1',
			'fld_table' => '29',
			'fld_ord' => '8',
			'fld_spec_source' => '0',
			'fld_name' => 'tree_version',
			'fld_eng' => 'Tree Version Number',
			'fld_desc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_data_length' => '0',
			'fld_key_type' => ',',
			'fld_null_support' => '0'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 431,
			'fld_database' => '1',
			'fld_table' => '29',
			'fld_ord' => '9',
			'fld_spec_source' => '0',
			'fld_name' => 'unique_str',
			'fld_eng' => 'Unique String For Record',
			'fld_desc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_data_length' => '0',
			'fld_key_type' => ',',
			'fld_null_support' => '0'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 410,
			'fld_database' => '1',
			'fld_table' => '29',
			'fld_ord' => '10',
			'fld_spec_source' => '0',
			'fld_name' => 'is_mobile',
			'fld_eng' => 'Using Mobile Device',
			'fld_desc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_data_length' => '0',
			'fld_key_type' => ',',
			'fld_null_support' => '0'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 430,
			'fld_database' => '1',
			'fld_table' => '29',
			'fld_ord' => '3',
			'fld_spec_source' => '0',
			'fld_name' => 'logo_url',
			'fld_eng' => 'Logo Image URL',
			'fld_desc' => 'Indicates the URL of this SurvLoop Installation\'s public location on the internet.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_data_length' => '0',
			'fld_char_support' => ',Letters,Numbers,Keyboard,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 411,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_spec_source' => '0',
			'fld_name' => 'install_id',
			'fld_eng' => 'Installation ID',
			'fld_desc' => 'Indicates the unique Installation ID number of the SurvLoop Installation associated with the statistics in this record.',
			'fld_foreign_table' => '29',
			'fld_foreign_min' => '0',
			'fld_foreign_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',Foreign,',
			'fld_null_support' => '0',
			'fld_compare_same' => '878800'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 423,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '13',
			'fld_spec_source' => '0',
			'fld_name' => 'code_lines_controllers',
			'fld_eng' => 'Code Base Line Count: Controllers',
			'fld_desc' => 'Indicates the total number of lines of codes in the Controllers folder for this Installation\'s package. This count indicates a relative quantity of largely PHP code, database queries and data processing.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 412,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '14',
			'fld_spec_source' => '0',
			'fld_name' => 'code_lines_views',
			'fld_eng' => 'Code Base Line Count: Views',
			'fld_desc' => 'Indicates the total number of lines of codes in the Controllers folder for this Installation\'s package. This count indicates a relative quantity of largely HTML, Javascript, and CSS code, with targeted PHP variables echoed.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 422,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '3',
			'fld_spec_source' => '0',
			'fld_name' => 'db_fields',
			'fld_eng' => 'Database Count: Fields',
			'fld_desc' => 'Indicates the total number of database fields designed within this Installation\'s package. This count indicates a relative span of the database.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 413,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '2',
			'fld_spec_source' => '0',
			'fld_name' => 'db_tables',
			'fld_eng' => 'Database Count: Tables',
			'fld_desc' => 'Indicates the total number of database tables designed within this Installation\'s package. This count indicates a relative quantity of database structures and complexity.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 414,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '10',
			'fld_spec_source' => '0',
			'fld_name' => 'page_nodes',
			'fld_eng' => 'Page Nodes Count',
			'fld_desc' => 'Indicates the total number of page nodes designed within this Installation\'s package.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 421,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '9',
			'fld_spec_source' => '0',
			'fld_name' => 'pages',
			'fld_eng' => 'Pages Count',
			'fld_desc' => 'Indicates the total number of pages designed within this Installation\'s package.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 415,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '5',
			'fld_spec_source' => '0',
			'fld_name' => 'survey_nodes',
			'fld_eng' => 'Survey Nodes Count',
			'fld_desc' => 'Indicates the total number of survey nodes designed within this Installation\'s package.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 420,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '4',
			'fld_spec_source' => '0',
			'fld_name' => 'surveys',
			'fld_eng' => 'Survey Count',
			'fld_desc' => 'Indicates the total number of surveys designed within this Installation\'s package.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 416,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '1',
			'fld_spec_source' => '0',
			'fld_name' => 'date',
			'fld_eng' => 'Log Date',
			'fld_desc' => 'Indicates the date when these statistics were logged, important for seeing trends over time.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'DATE',
			'fld_data_type' => 'DateTime',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,Keyboard,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 419,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '12',
			'fld_spec_source' => '0',
			'fld_name' => 'survey1_complete',
			'fld_eng' => 'Survey 1: Completed',
			'fld_desc' => 'Indicated the total number of completed responses for the Installation\'s Primary Survey.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 417,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '11',
			'fld_spec_source' => '0',
			'fld_name' => 'users',
			'fld_eng' => 'User Count',
			'fld_desc' => 'Indicates the total number of full Users in the SurvLoop Installation.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 418,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '8',
			'fld_spec_source' => '0',
			'fld_name' => 'survey_nodes_numb',
			'fld_eng' => 'Survey Nodes Numeric Count',
			'fld_desc' => 'Indicates the total number of survey nodes designed with numeric/quantitative responses within this Installation\'s package.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 429,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '7',
			'fld_spec_source' => '0',
			'fld_name' => 'survey_nodes_open',
			'fld_eng' => 'Survey Nodes Open-Ended Count',
			'fld_desc' => 'Indicates the total number of survey nodes designed with open-ended responses within this Installation\'s package.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 424,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '6',
			'fld_spec_source' => '0',
			'fld_name' => 'survey_nodes_mult',
			'fld_eng' => 'Survey Nodes Multiple Choice Count',
			'fld_desc' => 'Indicates the total number of survey nodes designed with multiple choice responses within this Installation\'s package.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 428,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '17',
			'fld_spec_source' => '0',
			'fld_name' => 'bytes_views',
			'fld_eng' => 'Code Base Bytes: Views',
			'fld_desc' => 'Indicates the total bytes for the codes in the Uploads folder for this Installation\'s package. This count indicates a relative quantity of largely HTML, Javascript, and CSS code, with targeted PHP variables echoed.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 425,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '18',
			'fld_spec_source' => '0',
			'fld_name' => 'bytes_uploads',
			'fld_eng' => 'Code Base Bytes: Uploads',
			'fld_desc' => 'Indicates the total bytes for the codes in the Uploads folder for this Installation\'s package. This count indicates a relative quantity of various types of other uploaded files, largely images.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 427,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '16',
			'fld_spec_source' => '0',
			'fld_name' => 'bytes_database',
			'fld_eng' => 'Code Base Bytes: Database',
			'fld_desc' => 'Indicates the total bytes for the codes in the Database folder for this Installation\'s package. This count indicates a relative quantity of Laravel-specific PHP code, initializing database tables.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 426,
			'fld_database' => '1',
			'fld_table' => '40',
			'fld_ord' => '15',
			'fld_spec_source' => '0',
			'fld_name' => 'bytes_controllers',
			'fld_eng' => 'Code Base Bytes: Controllers',
			'fld_desc' => 'Indicates the total bytes for the codes in the Controllers folder for this Installation\'s package. This count indicates a relative quantity of largely PHP code, database queries, input, and data processing.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10274,
			'fld_database' => '1',
			'fld_table' => '45',
			'fld_spec_source' => '0',
			'fld_name' => 'title',
			'fld_eng' => 'Title of Database Concept',
			'fld_desc' => 'Indicates the title the user gives to this database they are conceptualizing.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_data_length' => '0',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '6',
			'fld_compare_value' => '6'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10275,
			'fld_database' => '1',
			'fld_table' => '45',
			'fld_ord' => '1',
			'fld_spec_source' => '0',
			'fld_name' => 'description',
			'fld_eng' => 'Description of Database Concept',
			'fld_desc' => 'Indicates the user\'s fuller description of this concept database.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_type' => 'TEXT',
			'fld_data_length' => '0',
			'fld_key_type' => ',',
			'fld_null_support' => '0'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10276,
			'fld_database' => '1',
			'fld_table' => '45',
			'fld_ord' => '5',
			'fld_spec_type' => 'Replica',
			'fld_name' => 'user_id',
			'fld_eng' => 'User ID',
			'fld_desc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'fld_foreign_table' => '30',
			'fld_foreign_min' => '11',
			'fld_foreign_max' => '11',
			'fld_foreign2_min' => '11',
			'fld_foreign2_max' => '11',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',Foreign,',
			'fld_opts' => '39'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10277,
			'fld_database' => '1',
			'fld_table' => '45',
			'fld_ord' => '6',
			'fld_spec_type' => 'Replica',
			'fld_name' => 'submission_progress',
			'fld_eng' => 'Experience Node Progress',
			'fld_desc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'fld_foreign_min' => '11',
			'fld_foreign_max' => '11',
			'fld_foreign2_min' => '11',
			'fld_foreign2_max' => '11',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_char_support' => ',Numbers,',
			'fld_opts' => '39'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10278,
			'fld_database' => '1',
			'fld_table' => '45',
			'fld_ord' => '8',
			'fld_spec_type' => 'Replica',
			'fld_name' => 'tree_version',
			'fld_eng' => 'Tree Version Number',
			'fld_desc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'fld_foreign_min' => '11',
			'fld_foreign_max' => '11',
			'fld_foreign2_min' => '11',
			'fld_foreign2_max' => '11',
			'fld_opts' => '39'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10279,
			'fld_database' => '1',
			'fld_table' => '45',
			'fld_ord' => '9',
			'fld_spec_type' => 'Replica',
			'fld_name' => 'version_ab',
			'fld_eng' => 'A/B Testing Version',
			'fld_desc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'fld_foreign_min' => '11',
			'fld_foreign_max' => '11',
			'fld_foreign2_min' => '11',
			'fld_foreign2_max' => '11',
			'fld_opts' => '39'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10280,
			'fld_database' => '1',
			'fld_table' => '45',
			'fld_ord' => '7',
			'fld_spec_type' => 'Replica',
			'fld_name' => 'unique_str',
			'fld_eng' => 'Unique String For Record',
			'fld_desc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'fld_foreign_min' => '11',
			'fld_foreign_max' => '11',
			'fld_foreign2_min' => '11',
			'fld_foreign2_max' => '11',
			'fld_opts' => '39'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10281,
			'fld_database' => '1',
			'fld_table' => '45',
			'fld_ord' => '10',
			'fld_spec_type' => 'Replica',
			'fld_name' => 'ip_addy',
			'fld_eng' => 'IP Address',
			'fld_desc' => 'Encrypted IP address of the current user.',
			'fld_foreign_min' => '11',
			'fld_foreign_max' => '11',
			'fld_foreign2_min' => '11',
			'fld_foreign2_max' => '11',
			'fld_opts' => '39'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10282,
			'fld_database' => '1',
			'fld_table' => '45',
			'fld_ord' => '4',
			'fld_spec_type' => 'Replica',
			'fld_name' => 'is_mobile',
			'fld_eng' => 'Using Mobile Device',
			'fld_desc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'fld_foreign_min' => '11',
			'fld_foreign_max' => '11',
			'fld_foreign2_min' => '11',
			'fld_foreign2_max' => '11',
			'fld_opts' => '39'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10283,
			'fld_database' => '1',
			'fld_table' => '45',
			'fld_ord' => '2',
			'fld_spec_source' => '0',
			'fld_name' => 'is_coder',
			'fld_eng' => 'Are You A Coder?',
			'fld_desc' => 'Indicates whether or not the user requesting this open data has coding skills.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_values' => '0;1',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '1',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '878800',
			'fld_compare_value' => '878800'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10284,
			'fld_database' => '1',
			'fld_table' => '45',
			'fld_ord' => '3',
			'fld_spec_source' => '0',
			'fld_name' => 'email',
			'fld_eng' => 'Email Address for Updates',
			'fld_desc' => 'Indicates the email address of the user, if they want updates on the progress of SurvLoop.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_data_length' => '0',
			'fld_char_support' => ',Letters,Numbers,Keyboard,',
			'fld_key_type' => ',',
			'fld_null_support' => '0'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10285,
			'fld_database' => '1',
			'fld_table' => '46',
			'fld_spec_source' => '0',
			'fld_name' => 'request_id',
			'fld_eng' => 'Request ID',
			'fld_desc' => 'Indicates the unique Open Data Request ID number associated with the skill stored in this record.',
			'fld_foreign_table' => '45',
			'fld_foreign_min' => '0',
			'fld_foreign_max' => 'N',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',Foreign,',
			'fld_null_support' => '0',
			'fld_compare_same' => '878800',
			'fld_compare_other' => '54925'
		]);
		DB::table('sl_fields')->insert([
			'fld_id' => 10286,
			'fld_database' => '1',
			'fld_table' => '46',
			'fld_ord' => '1',
			'fld_spec_source' => '0',
			'fld_name' => 'skill',
			'fld_eng' => 'Coding Skill',
			'fld_desc' => 'Indicates some area of web development in which the user has some proficiency.',
			'fld_foreign_min' => 'N',
			'fld_foreign_max' => 'N',
			'fld_foreign2_min' => 'N',
			'fld_foreign2_max' => 'N',
			'fld_values' => 'Def::SurvLoop Coder Skills',
			'fld_type' => 'INT',
			'fld_data_type' => 'Numeric',
			'fld_data_length' => '0',
			'fld_char_support' => ',Numbers,',
			'fld_key_type' => ',',
			'fld_null_support' => '0',
			'fld_compare_same' => '878800',
			'fld_compare_value' => '878800'
		]);
	
	DB::table('sl_definitions')->insert([
			'def_id' => 473,
			'def_database' => '1',
			'def_set' => 'Blurbs',
			'def_subset' => 'Footer',
			'def_order' => '3',
			'def_description' => '<div id="pubFooter"><div class="container">
    <div class="row">
        <div class="col-md-3 pB20">
            <a href="/">Home</a><br>
            <a href="/documentation">Documentation</a><br>
            <a href="/site-map">Site Map</a><br>
        </div><div class="col-md-3 pB20">
            <a href="https://github.com/rockhopsoft/survloop" target="_blank">On GitHub
            <div class="disBlo mTn10" style="font-size: 550%;"><i class="fa fa-github" aria-hidden="true"></i></div></a>
        </div><div class="col-md-3 pB20">
            <span class="slGrey">A project by,<br />and for the toolbox of</span>
            <h4 class="mT10 mB10"><a href="http://wikiworldorder.org" target="_blank">Wiki World Order</a></h4>
            <a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Creative Commons
            <i class="fa fa-creative-commons mL5 mR3" aria-hidden="true"></i> 2015-2019</a>
        </div><div class="col-md-3 taR pB20">
            <a href="http://wikiworldorder.org" target="_blank"><img src="/survloop/uploads/wikiworldorder-logo-white.png" 
                border=0 style="width: 190px; margin-top: -8px;"></a>
        </div>
    </div>
</div></div>'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 523,
			'def_database' => '1',
			'def_set' => 'System Checks',
			'def_subset' => 'system-updates',
			'def_description' => '2018-03-27'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 526,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'cust-package',
			'def_description' => 'rockhopsoft/survlooporg'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 594,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'spinner-code',
			'def_description' => '<i class="fa-li fa fa-spinner fa-spin"></i>'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 595,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'twitter',
			'def_description' => '@SurvLoop'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 596,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'parent-company',
			'def_description' => 'Wiki World Order'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 597,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'parent-website',
			'def_description' => 'http://WikiWorldOrder.org'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 632,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-main-faintr',
			'def_description' => '#FCFBFF'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 673,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'has-volunteers',
			'def_description' => '0'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 675,
			'def_database' => '1',
			'def_set' => 'User Roles',
			'def_subset' => 'partner',
			'def_order' => '3',
			'def_value' => 'Partner Member',
			'def_description' => 'Basic permission to pages and tools just for partners'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 674,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'has-partners',
			'def_description' => '0'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 682,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'has-canada',
			'def_description' => '1'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 688,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'app-license-snc',
			'def_description' => '2015'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 687,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'user-name-req',
			'def_description' => '1 or 0'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 689,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'has-avatars',
			'def_description' => '/survloop/uploads/avatar-shell.png'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 694,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'sys-cust-ajax',
			'def_description' => 'function reqFormFldCustom() { return 0; }'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 693,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'sys-cust-js',
			'def_description' => 'var custom = 1;'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 695,
			'def_database' => '1',
			'def_subset' => 'SurvLoop Coder Skills',
			'def_value' => 'PHP'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 696,
			'def_database' => '1',
			'def_subset' => 'SurvLoop Coder Skills',
			'def_order' => '1',
			'def_value' => 'Laravel'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 697,
			'def_database' => '1',
			'def_subset' => 'SurvLoop Coder Skills',
			'def_order' => '2',
			'def_value' => 'Javascript'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 698,
			'def_database' => '1',
			'def_subset' => 'SurvLoop Coder Skills',
			'def_order' => '3',
			'def_value' => 'jQuery / AJAX'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 699,
			'def_database' => '1',
			'def_subset' => 'SurvLoop Coder Skills',
			'def_order' => '4',
			'def_value' => 'CSS'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 700,
			'def_database' => '1',
			'def_subset' => 'SurvLoop Coder Skills',
			'def_order' => '5',
			'def_value' => 'GitHub'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 701,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'app-root-path',
			'def_description' => '/var/www/laravel'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 28,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'show-logo-title',
			'def_description' => 'Off'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 29,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-logo',
			'def_order' => '20',
			'def_description' => '#4429B4'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 30,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'users-create-db',
			'def_description' => '0'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 31,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'xml-example-core-id',
			'def_description' => '1'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 32,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'app-license',
			'def_description' => 'Creative Commons Attribution-ShareAlike License'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 33,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'app-license-url',
			'def_description' => 'http://creativecommons.org/licenses/by-sa/3.0/'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 34,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'app-license-img',
			'def_description' => '/survloop/uploads/creative-commons-by-sa-88x31.png'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 51,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'login-instruct',
			'def_description' => 'Here you can login to interact more with the site.'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 52,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'tree-1-example',
			'def_description' => '1'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 53,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'header-code',
			'def_description' => '<!-- -->'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 59,
			'def_database' => '1',
			'def_set' => 'Style CSS',
			'def_subset' => 'main',
			'def_description' => 'body {
  background: rgb(255,255,255);
  background: radial-gradient(circle, rgba(255,255,255,1) 30%, rgba(245,242,254,1) 100%); 
}

#mainNav { box-shadow: 2px 2px 1px #F6F6F6; }

#loginLnk { display: none; }

pre { background: #FCFBFF; padding: 20px; }

#pubFooter {
    width: 100%;
    margin: 80px 0px 0px 0px;
    padding: 60px 15px;
    background: rgb(68,41,180);
    background: radial-gradient(circle, rgba(68,41,180,1) 30%, rgba(35,12,120,1) 100%);
    color: #FFF;
}
#pubFooter a:link, #pubFooter a:visited, #pubFooter a:active, #pubFooter a:hover {
    color: #F5F2FE;
}
#pubFooter a:hover {
    text-decoration: underline;
}'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 68,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'user-email-optional',
			'def_description' => 'On'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 69,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'user-name-ask',
			'def_description' => 'On'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 70,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'user-name-optional',
			'def_description' => 'Off'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 71,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'tree-1-core-record-singular',
			'def_description' => 'Installation'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 72,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'tree-1-core-record-plural',
			'def_description' => 'Installations'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 453,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-main-text',
			'def_order' => '1',
			'def_description' => '#555'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 454,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'font-main',
			'def_description' => 'Helvetica,Arial,sans-serif'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 455,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-main-grey',
			'def_order' => '10',
			'def_description' => '#999'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 456,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-main-bg',
			'def_order' => '6',
			'def_description' => '#FFF'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 457,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-nav-bg',
			'def_order' => '5',
			'def_description' => '#FFF'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 458,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-nav-text',
			'def_order' => '4',
			'def_description' => '#999'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 459,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-info-on',
			'def_order' => '15',
			'def_description' => '#0E3D93'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 1,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'cust-abbr',
			'def_description' => 'SurvLoopOrg'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 463,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-line-hr',
			'def_order' => '19',
			'def_description' => '#999'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 464,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-field-bg',
			'def_order' => '21',
			'def_description' => '#FFF'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 466,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-form-text',
			'def_order' => '3',
			'def_description' => '#333'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 471,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-main-link',
			'def_order' => '2',
			'def_description' => '#416CBD'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 472,
			'def_database' => '1',
			'def_set' => 'Style CSS',
			'def_subset' => 'email'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 474,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'css-extra-files'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 470,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'log-css-reload',
			'def_description' => '1600115129'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 461,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-warn-on',
			'def_order' => '17',
			'def_description' => '#FFB01F'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 2,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'app-url',
			'def_description' => 'http://survloop.local'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 3,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'logo-url',
			'def_description' => 'http://survloop.local'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 4,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'site-name',
			'def_description' => 'SurvLoop.org'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 5,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'meta-title',
			'def_description' => 'SurvLoop - All Our Data Are Belong'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 6,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'meta-desc',
			'def_description' => 'Empower you to design your complex databases, collect data with an easy user experience, and create an API to share the data with the world!'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 7,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'meta-keywords',
			'def_description' => 'SurvLoop, WikiWorldOrder, app, application, survey, database, data, database design, user experience, xml,'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 8,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'meta-img',
			'def_description' => '/survloop/uploads/survloop-meta-img.jpg'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 9,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'logo-img-lrg',
			'def_description' => '/survloop/uploads/survloop.png'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 10,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'logo-img-md',
			'def_description' => '/survloop/uploads/survloop.png'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 11,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'logo-img-sm',
			'def_description' => '/survloop/uploads/survloop.png'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 12,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'shortcut-icon',
			'def_description' => '/survloop/uploads/survloop-ico.png'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 13,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'test-mode',
			'def_description' => 'Off'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 14,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'upload-types',
			'def_description' => 'Evidence Types'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 15,
			'def_database' => '1',
			'def_set' => 'User Roles',
			'def_subset' => 'administrator',
			'def_value' => 'Administrator',
			'def_description' => 'Highest system administrative privileges, can add, remove, and change permissions of other users'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 16,
			'def_database' => '1',
			'def_set' => 'User Roles',
			'def_subset' => 'staff',
			'def_order' => '2',
			'def_value' => 'Staff/Analyst',
			'def_description' => 'Full staff priveleges, can view but not edit technical specs'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 17,
			'def_database' => '1',
			'def_set' => 'User Roles',
			'def_subset' => 'volunteer',
			'def_order' => '4',
			'def_value' => 'Volunteer',
			'def_description' => 'Basic permission to pages and tools just for volunteers'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 18,
			'def_database' => '1',
			'def_set' => 'User Roles',
			'def_subset' => 'databaser',
			'def_order' => '1',
			'def_value' => 'Database Designer',
			'def_description' => 'Permissions to make edits in the database designing tools'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 19,
			'def_database' => '1',
			'def_set' => 'User Roles',
			'def_subset' => 'brancher',
			'def_order' => '2',
			'def_value' => 'User Experience Editor',
			'def_description' => 'Permissions to make edits in the user experience tools'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 20,
			'def_database' => '1',
			'def_set' => 'System Settings',
			'def_subset' => 'signup-instruct',
			'def_description' => '<h1 class="mT0">Sign Up</h1>'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 22,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-main-on',
			'def_order' => '7',
			'def_description' => '#4429B4'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 23,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-main-faint',
			'def_order' => '9',
			'def_description' => '#F5F2FE'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 25,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-danger-on',
			'def_order' => '11',
			'def_description' => '#D40202'
		]);
		DB::table('sl_definitions')->insert([
			'def_id' => 27,
			'def_database' => '1',
			'def_set' => 'Style Settings',
			'def_subset' => 'color-success-on',
			'def_order' => '13',
			'def_description' => '#006D36'
		]);
	

	DB::table('sl_tree')->insert([
			'tree_id' => 5,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Home',
			'tree_slug' => 'home',
			'tree_root' => '15',
			'tree_first_page' => '15',
			'tree_last_page' => '15',
			'tree_opts' => '7'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 6,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Admin Dashboard',
			'tree_slug' => 'dashboard',
			'tree_root' => '26',
			'tree_first_page' => '26',
			'tree_last_page' => '26',
			'tree_opts' => '21'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 7,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'My Profile',
			'tree_slug' => 'my-profile',
			'tree_root' => '28',
			'tree_opts' => '23'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 8,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'How To Install SurvLoop',
			'tree_slug' => 'how-to-install-survloop',
			'tree_root' => '44',
			'tree_first_page' => '44',
			'tree_last_page' => '44'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 9,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'How To Install Laravel Locally On A Mac',
			'tree_slug' => 'how-to-install-laravel-locally-on-a-mac',
			'tree_root' => '52',
			'tree_first_page' => '52',
			'tree_last_page' => '52'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 10,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'How To Install Laravel on an Ubuntu Server',
			'tree_slug' => 'how-to-install-laravel-on-an-ubuntu-server',
			'tree_root' => '60',
			'tree_first_page' => '60',
			'tree_last_page' => '60'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 11,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Redirect',
			'tree_name' => 'https://github.com/rockhopsoft/survloop',
			'tree_desc' => 'https://github.com/rockhopsoft/survloop',
			'tree_slug' => 'github'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 14,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Dashboard Search',
			'tree_slug' => 'search',
			'tree_root' => '66',
			'tree_opts' => '93'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 15,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Volunteer Search',
			'tree_slug' => 'volun-search',
			'tree_root' => '68',
			'tree_opts' => '527'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 12,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Volunteer',
			'tree_slug' => 'volunteer',
			'tree_root' => '62',
			'tree_opts' => '119'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 13,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Search',
			'tree_slug' => 'search',
			'tree_root' => '64',
			'tree_opts' => '31'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 16,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'How To Setup Emailing With Mailgun',
			'tree_slug' => 'how-to-setup-emailing-with-mailgun',
			'tree_root' => '70',
			'tree_first_page' => '70',
			'tree_last_page' => '70'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 17,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Partner',
			'tree_slug' => 'partner',
			'tree_root' => '72',
			'tree_opts' => '287'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 18,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Staff',
			'tree_slug' => 'staff',
			'tree_root' => '74',
			'tree_opts' => '301'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 19,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Gather Install Stats',
			'tree_slug' => 'gather-install-stats',
			'tree_root' => '76',
			'tree_first_page' => '76',
			'tree_last_page' => '76'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 20,
			'tree_database' => '1',
			'tree_user' => '0',
			'tree_type' => 'Page',
			'tree_name' => 'Staff Search',
			'tree_slug' => 'staff-search',
			'tree_root' => '83',
			'tree_opts' => '1333'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 21,
			'tree_database' => '1',
			'tree_user' => '0',
			'tree_type' => 'Page',
			'tree_name' => 'Partner Search',
			'tree_slug' => 'partner-search',
			'tree_root' => '85',
			'tree_opts' => '1271'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 22,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'How To Create Your Own VPN',
			'tree_slug' => 'how-to-create-your-own-vpn',
			'tree_root' => '258',
			'tree_first_page' => '258',
			'tree_last_page' => '258'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 23,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'WordPress Installs Checklist',
			'tree_slug' => 'wordpress-installs-checklist',
			'tree_root' => '275',
			'tree_first_page' => '275',
			'tree_last_page' => '275',
			'tree_opts' => '3'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 24,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'SurvLoop Software Documentation Overview',
			'tree_slug' => 'documentation',
			'tree_root' => '588',
			'tree_first_page' => '588',
			'tree_last_page' => '588'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 25,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Package Files, Folders, and Classes',
			'tree_slug' => 'package-files-folders-classes',
			'tree_root' => '742',
			'tree_first_page' => '742',
			'tree_last_page' => '742'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 26,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'How To Setup SurvLoop After Installation',
			'tree_slug' => 'how-to-setup-survloop',
			'tree_root' => '1452',
			'tree_first_page' => '1452',
			'tree_last_page' => '1452'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 27,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'How To Install SurvLoop with Docker',
			'tree_slug' => 'how-to-install-survloop-with-docker',
			'tree_root' => '1641',
			'tree_first_page' => '1641',
			'tree_last_page' => '1641'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 28,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'How To Setup an Ubuntu Server on Digital Ocean',
			'tree_slug' => 'how-to-setup-an-ubuntu-server-on-digital-ocean',
			'tree_root' => '2185',
			'tree_first_page' => '2185',
			'tree_last_page' => '2185'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 29,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Developer Work Flows',
			'tree_slug' => 'developer-work-flows',
			'tree_root' => '2646',
			'tree_first_page' => '2646',
			'tree_last_page' => '2646'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 30,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'How A Basic Page Loads With SurvLoop',
			'tree_slug' => 'how-a-basic-page-loads-with-survloop',
			'tree_root' => '3082',
			'tree_first_page' => '3082',
			'tree_last_page' => '3082'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 31,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Page',
			'tree_name' => 'Introduction to the SurvLoop Codebase',
			'tree_slug' => 'introduction-to-survloop-codebase',
			'tree_root' => '3093',
			'tree_first_page' => '3093',
			'tree_last_page' => '3093'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 33,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Survey XML',
			'tree_name' => 'Open Data Requests',
			'tree_slug' => 'open-data-requests'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 32,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Survey',
			'tree_name' => 'Open Data Requests',
			'tree_slug' => 'open-data-requests',
			'tree_root' => '3100',
			'tree_first_page' => '3101',
			'tree_last_page' => '3102',
			'tree_core_table' => '45',
			'tree_opts' => '2'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 1,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Survey',
			'tree_name' => 'SurvLoop Installs',
			'tree_desc' => 'Record of all websites and systems powered by the SurvLoop open data engine.',
			'tree_slug' => 'survloop-installs',
			'tree_root' => '13',
			'tree_first_page' => '-3',
			'tree_last_page' => '-3',
			'tree_core_table' => '29'
		]);
		DB::table('sl_tree')->insert([
			'tree_id' => 2,
			'tree_database' => '1',
			'tree_user' => '1',
			'tree_type' => 'Survey XML',
			'tree_name' => 'SurvLoop Installs',
			'tree_slug' => 'survloop-installs',
			'tree_root' => '12',
			'tree_first_page' => '-3',
			'tree_last_page' => '-3',
			'tree_core_table' => '29'
		]);
	
	DB::table('sl_node_responses')->insert([
			'node_res_id' => 1,
			'node_res_node' => '3107',
			'node_res_eng' => 'Yes',
			'node_res_value' => '1',
			'node_res_show_kids' => '3108'
		]);
		DB::table('sl_node_responses')->insert([
			'node_res_id' => 2,
			'node_res_node' => '3107',
			'node_res_ord' => '1',
			'node_res_eng' => 'No',
			'node_res_value' => '0'
		]);
		DB::table('sl_node_responses')->insert([
			'node_res_id' => 3,
			'node_res_node' => '3108',
			'node_res_eng' => 'PHP',
			'node_res_value' => '695'
		]);
		DB::table('sl_node_responses')->insert([
			'node_res_id' => 4,
			'node_res_node' => '3108',
			'node_res_ord' => '1',
			'node_res_eng' => 'Laravel',
			'node_res_value' => '696'
		]);
		DB::table('sl_node_responses')->insert([
			'node_res_id' => 5,
			'node_res_node' => '3108',
			'node_res_ord' => '2',
			'node_res_eng' => 'Javascript',
			'node_res_value' => '697'
		]);
		DB::table('sl_node_responses')->insert([
			'node_res_id' => 6,
			'node_res_node' => '3108',
			'node_res_ord' => '3',
			'node_res_eng' => 'jQuery / AJAX',
			'node_res_value' => '698'
		]);
		DB::table('sl_node_responses')->insert([
			'node_res_id' => 7,
			'node_res_node' => '3108',
			'node_res_ord' => '4',
			'node_res_eng' => 'CSS',
			'node_res_value' => '699'
		]);
		DB::table('sl_node_responses')->insert([
			'node_res_id' => 8,
			'node_res_node' => '3108',
			'node_res_ord' => '5',
			'node_res_eng' => 'GitHub',
			'node_res_value' => '700'
		]);

	DB::table('sl_data_helpers')->insert([
			'data_help_id' => 1,
			'data_help_tree' => '32',
			'data_help_parent_table' => 'requests',
			'data_help_table' => 'request_skills',
			'data_help_key_field' => 'req_skl_request_id',
			'data_help_value_field' => 'req_skl_skill'
		]);
	

	DB::table('sl_images')->insert([
			'img_id' => 1,
			'img_database_id' => '1',
			'img_user_id' => '0',
			'img_file_loc' => '.DS_Store',
			'img_full_filename' => '/survlooporg/uploads/.DS_Store',
			'img_type' => 'ds_store',
			'img_file_size' => '6148'
		]);
		DB::table('sl_images')->insert([
			'img_id' => 2,
			'img_database_id' => '1',
			'img_user_id' => '0',
			'img_file_loc' => 'drugstory.png',
			'img_full_filename' => '/survlooporg/uploads/drugstory.png',
			'img_type' => 'png',
			'img_file_size' => '25436',
			'img_width' => '410',
			'img_height' => '94'
		]);
		DB::table('sl_images')->insert([
			'img_id' => 3,
			'img_database_id' => '1',
			'img_user_id' => '0',
			'img_file_loc' => 'openpolicecomplaints.png',
			'img_full_filename' => '/survlooporg/uploads/openpolicecomplaints.png',
			'img_type' => 'png',
			'img_file_size' => '58173',
			'img_width' => '1636',
			'img_height' => '291'
		]);
		DB::table('sl_images')->insert([
			'img_id' => 4,
			'img_database_id' => '1',
			'img_user_id' => '0',
			'img_file_loc' => 'PowerScoreLogo-.jpg',
			'img_full_filename' => '/survlooporg/uploads/PowerScoreLogo-.jpg',
			'img_type' => 'jpg',
			'img_file_size' => '17669',
			'img_width' => '700',
			'img_height' => '67'
		]);
		DB::table('sl_images')->insert([
			'img_id' => 5,
			'img_database_id' => '1',
			'img_user_id' => '1',
			'img_file_loc' => 'laravel-digital-ocean-01.png',
			'img_full_filename' => '/survlooporg/uploads/laravel-digital-ocean-01.png',
			'img_node_id' => '-3',
			'img_type' => 'png',
			'img_file_size' => '180474',
			'img_width' => '2688',
			'img_height' => '840'
		]);
		DB::table('sl_images')->insert([
			'img_id' => 6,
			'img_database_id' => '1',
			'img_user_id' => '0',
			'img_file_loc' => 'laravel-digital-ocean-02.png',
			'img_full_filename' => '/survlooporg/uploads/laravel-digital-ocean-02.png',
			'img_type' => 'png',
			'img_file_size' => '165292',
			'img_width' => '1629',
			'img_height' => '1080'
		]);
		DB::table('sl_images')->insert([
			'img_id' => 7,
			'img_database_id' => '1',
			'img_user_id' => '1',
			'img_file_loc' => 'laravel-digital-ocean-03.png',
			'img_full_filename' => '/survlooporg/uploads/laravel-digital-ocean-03.png',
			'img_node_id' => '-3',
			'img_type' => 'png',
			'img_file_size' => '96009',
			'img_width' => '2037',
			'img_height' => '816'
		]);
		DB::table('sl_images')->insert([
			'img_id' => 8,
			'img_database_id' => '1',
			'img_user_id' => '1',
			'img_file_loc' => 'laravel-digital-ocean-04.png',
			'img_full_filename' => '/survlooporg/uploads/laravel-digital-ocean-04.png',
			'img_node_id' => '-3',
			'img_type' => 'png',
			'img_file_size' => '140617',
			'img_width' => '2000',
			'img_height' => '868'
		]);
		DB::table('sl_images')->insert([
			'img_id' => 9,
			'img_database_id' => '1',
			'img_user_id' => '1',
			'img_file_loc' => 'laravel-digital-ocean-05.png',
			'img_full_filename' => '/survlooporg/uploads/laravel-digital-ocean-05.png',
			'img_node_id' => '-3',
			'img_type' => 'png',
			'img_file_size' => '105120',
			'img_width' => '927',
			'img_height' => '1092'
		]);
		DB::table('sl_images')->insert([
			'img_id' => 10,
			'img_database_id' => '1',
			'img_user_id' => '1',
			'img_file_loc' => 'laravel-digital-ocean-06.png',
			'img_full_filename' => '/survlooporg/uploads/laravel-digital-ocean-06.png',
			'img_node_id' => '-3',
			'img_type' => 'png',
			'img_file_size' => '112353',
			'img_width' => '1188',
			'img_height' => '513'
		]);
	

 } }