<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-seeder.blade.php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SLISeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {

	DB::table('SL_Databases')->insert([
			'DbID' => 1,
			'DbUser' => '1',
			'DbPrefix' => 'SLI_',
			'DbName' => 'SurvLoop Installs',
			'DbDesc' => 'Who\'s Using SurvLoop?',
			'DbTables' => '5',
			'DbFields' => '43'
		]);
	
	DB::table('SL_Tables')->insert([
			'TblID' => 29,
			'TblDatabase' => '1',
			'TblAbbr' => 'Inst',
			'TblName' => 'Installations',
			'TblEng' => 'SurvLoop Installations',
			'TblDesc' => 'This represents each website or system which is currently powered by SurvLoop.',
			'TblGroup' => 'SurvLoop Installations',
			'TblNumFields' => '11',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 30,
			'TblDatabase' => '1',
			'TblName' => 'users',
			'TblEng' => 'Users',
			'TblDesc' => 'This represents the Laravel Users table, but will not actually be implemented by SurvLoop as part of the database installation.',
			'TblGroup' => 'Users',
			'TblOrd' => '15',
			'TblNumForeignIn' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 40,
			'TblDatabase' => '1',
			'TblAbbr' => 'InstStat',
			'TblName' => 'InstallStats',
			'TblEng' => 'Install Stats',
			'TblDesc' => 'Each record preserves a snapshot of various statistics tracked for this SurvLoop installation.',
			'TblNotes' => 'Maybe auto-loadable via SurvLoop.php function getJsonSurvLoopStats()',
			'TblGroup' => 'SurvLoop Installations',
			'TblNumFields' => '19',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 45,
			'TblDatabase' => '1',
			'TblAbbr' => 'Req',
			'TblName' => 'Requests',
			'TblEng' => 'Open Data Requests',
			'TblDesc' => 'Each record represents a site visitor\'s request for some open data to be collected and shared with the world.',
			'TblGroup' => 'SurvLoop Installations',
			'TblNumFields' => '11',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 46,
			'TblDatabase' => '1',
			'TblAbbr' => 'ReqSkl',
			'TblName' => 'RequestSkills',
			'TblEng' => 'Open Data Request Skills',
			'TblDesc' => 'Each record associates one programming skill with one user who requested the open data. This allows many skills to be linked to one request.',
			'TblType' => 'Subset',
			'TblGroup' => 'SurvLoop Installations',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
	
	DB::table('SL_Fields')->insert([
			'FldID' => 409,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'System Name',
			'FldDesc' => 'Indicates the plain name of the system which is powered by SurvLoop.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 402,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'URL',
			'FldEng' => 'System URL',
			'FldDesc' => 'Indicates the URL of the system which is powered by SurvLoop.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 434,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Desc',
			'FldEng' => 'System Description',
			'FldDesc' => 'Describes the system which is powered by SurvLoop.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 432,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'FldForeignTable' => '30',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 408,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 433,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 435,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 436,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 431,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 410,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 430,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'LogoUrl',
			'FldEng' => 'Logo Image URL',
			'FldDesc' => 'Indicates the URL of this SurvLoop Installation\'s public location on the internet.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 411,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldSpecSource' => '0',
			'FldName' => 'InstallID',
			'FldEng' => 'Installation ID',
			'FldDesc' => 'Indicates the unique Installation ID number of the SurvLoop Installation associated with the statistics in this record.',
			'FldForeignTable' => '29',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 423,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'CodeLinesControllers',
			'FldEng' => 'Code Base Line Count: Controllers',
			'FldDesc' => 'Indicates the total number of lines of codes in the Controllers folder for this Installation\'s package. This count indicates a relative quantity of largely PHP code, database queries and data processing.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 412,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'CodeLinesViews',
			'FldEng' => 'Code Base Line Count: Views',
			'FldDesc' => 'Indicates the total number of lines of codes in the Controllers folder for this Installation\'s package. This count indicates a relative quantity of largely HTML, Javascript, and CSS code, with targeted PHP variables echoed.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 422,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'DbFields',
			'FldEng' => 'Database Count: Fields',
			'FldDesc' => 'Indicates the total number of database fields designed within this Installation\'s package. This count indicates a relative span of the database.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 413,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'DbTables',
			'FldEng' => 'Database Count: Tables',
			'FldDesc' => 'Indicates the total number of database tables designed within this Installation\'s package. This count indicates a relative quantity of database structures and complexity.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 414,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'PageNodes',
			'FldEng' => 'Page Nodes Count',
			'FldDesc' => 'Indicates the total number of page nodes designed within this Installation\'s package.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 421,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'Pages',
			'FldEng' => 'Pages Count',
			'FldDesc' => 'Indicates the total number of pages designed within this Installation\'s package.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 415,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'SurveyNodes',
			'FldEng' => 'Survey Nodes Count',
			'FldDesc' => 'Indicates the total number of survey nodes designed within this Installation\'s package.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 420,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Surveys',
			'FldEng' => 'Survey Count',
			'FldDesc' => 'Indicates the total number of surveys designed within this Installation\'s package.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 416,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Date',
			'FldEng' => 'Log Date',
			'FldDesc' => 'Indicates the date when these statistics were logged, important for seeing trends over time.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'DATE',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 419,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'Survey1Complete',
			'FldEng' => 'Survey 1: Completed',
			'FldDesc' => 'Indicated the total number of completed responses for the Installation\'s Primary Survey.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 417,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'Users',
			'FldEng' => 'User Count',
			'FldDesc' => 'Indicates the total number of full Users in the SurvLoop Installation.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 418,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'SurveyNodesNumb',
			'FldEng' => 'Survey Nodes Numeric Count',
			'FldDesc' => 'Indicates the total number of survey nodes designed with numeric/quantitative responses within this Installation\'s package.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 429,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'SurveyNodesOpen',
			'FldEng' => 'Survey Nodes Open-Ended Count',
			'FldDesc' => 'Indicates the total number of survey nodes designed with open-ended responses within this Installation\'s package.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 424,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'SurveyNodesMult',
			'FldEng' => 'Survey Nodes Multiple Choice Count',
			'FldDesc' => 'Indicates the total number of survey nodes designed with multiple choice responses within this Installation\'s package.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 428,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '17',
			'FldSpecSource' => '0',
			'FldName' => 'BytesViews',
			'FldEng' => 'Code Base Bytes: Views',
			'FldDesc' => 'Indicates the total bytes for the codes in the Uploads folder for this Installation\'s package. This count indicates a relative quantity of largely HTML, Javascript, and CSS code, with targeted PHP variables echoed.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 425,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '18',
			'FldSpecSource' => '0',
			'FldName' => 'BytesUploads',
			'FldEng' => 'Code Base Bytes: Uploads',
			'FldDesc' => 'Indicates the total bytes for the codes in the Uploads folder for this Installation\'s package. This count indicates a relative quantity of various types of other uploaded files, largely images.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 427,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'BytesDatabase',
			'FldEng' => 'Code Base Bytes: Database',
			'FldDesc' => 'Indicates the total bytes for the codes in the Database folder for this Installation\'s package. This count indicates a relative quantity of Laravel-specific PHP code, initializing database tables.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 426,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'BytesControllers',
			'FldEng' => 'Code Base Bytes: Controllers',
			'FldDesc' => 'Indicates the total bytes for the codes in the Controllers folder for this Installation\'s package. This count indicates a relative quantity of largely PHP code, database queries, input, and data processing.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10274,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldSpecSource' => '0',
			'FldName' => 'Title',
			'FldEng' => 'Title of Database Concept',
			'FldDesc' => 'Indicates the title the user gives to this database they are conceptualizing.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6',
			'FldCompareValue' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10275,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Description',
			'FldEng' => 'Description of Database Concept',
			'FldDesc' => 'Indicates the user\'s fuller description of this concept database.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10276,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '5',
			'FldSpecType' => 'Replica',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'FldForeignTable' => '30',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10277,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '6',
			'FldSpecType' => 'Replica',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10278,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '8',
			'FldSpecType' => 'Replica',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version Number',
			'FldDesc' => 'Stores the current version number of this User Experience, important for tracking bugs.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10279,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '9',
			'FldSpecType' => 'Replica',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10280,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '7',
			'FldSpecType' => 'Replica',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String For Record',
			'FldDesc' => 'This unique string is for cases when including the record ID number is not appropriate.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10281,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10282,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '4',
			'FldSpecType' => 'Replica',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the current user is interacting via a mobile deviced.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10283,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'IsCoder',
			'FldEng' => 'Are You A Coder?',
			'FldDesc' => 'Indicates whether or not the user requesting this open data has coding skills.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareValue' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10284,
			'FldDatabase' => '1',
			'FldTable' => '45',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Email',
			'FldEng' => 'Email Address for Updates',
			'FldDesc' => 'Indicates the email address of the user, if they want updates on the progress of SurvLoop.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10285,
			'FldDatabase' => '1',
			'FldTable' => '46',
			'FldSpecSource' => '0',
			'FldName' => 'RequestID',
			'FldEng' => 'Request ID',
			'FldDesc' => 'Indicates the unique Open Data Request ID number associated with the skill stored in this record.',
			'FldForeignTable' => '45',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '54925'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10286,
			'FldDatabase' => '1',
			'FldTable' => '46',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Skill',
			'FldEng' => 'Coding Skill',
			'FldDesc' => 'Indicates some area of web development in which the user has some proficiency.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::SurvLoop Coder Skills',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldCompareValue' => '878800'
		]);
	
	DB::table('SL_Definitions')->insert([
			'DefID' => 1,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'cust-abbr',
			'DefDescription' => 'SurvLoopOrg'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 2,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-url',
			'DefDescription' => 'http://survloop.local'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 3,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-url',
			'DefDescription' => 'http://survloop.local'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 4,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'site-name',
			'DefDescription' => 'SurvLoop.org'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 5,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-title',
			'DefDescription' => 'SurvLoop - All Our Data Are Belong'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 6,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-desc',
			'DefDescription' => 'Empower you to design your complex databases, collect data with an easy user experience, and create an API to share the data with the world!'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 7,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-keywords',
			'DefDescription' => 'SurvLoop, WikiWorldOrder, app, application, survey, database, data, database design, user experience, xml,'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 8,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-img',
			'DefDescription' => '/survloop/uploads/survloop-meta-img.jpg'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 9,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-lrg',
			'DefDescription' => '/survloop/uploads/survloop.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 10,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-md',
			'DefDescription' => '/survloop/uploads/survloop.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 11,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-sm',
			'DefDescription' => '/survloop/uploads/survloop.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 12,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'shortcut-icon',
			'DefDescription' => '/survloop/uploads/survloop-ico.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 13,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'test-mode',
			'DefDescription' => 'Off'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 14,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'upload-types',
			'DefDescription' => 'Evidence Types'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 15,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'administrator',
			'DefValue' => 'Administrator',
			'DefDescription' => 'Highest system administrative privileges, can add, remove, and change permissions of other users'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 16,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'staff',
			'DefOrder' => '2',
			'DefValue' => 'Staff/Analyst',
			'DefDescription' => 'Full staff priveleges, can view but not edit technical specs'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 17,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'volunteer',
			'DefOrder' => '4',
			'DefValue' => 'Volunteer',
			'DefDescription' => 'Basic permission to pages and tools just for volunteers'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 18,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'databaser',
			'DefOrder' => '1',
			'DefValue' => 'Database Designer',
			'DefDescription' => 'Permissions to make edits in the database designing tools'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 19,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'brancher',
			'DefOrder' => '2',
			'DefValue' => 'User Experience Editor',
			'DefDescription' => 'Permissions to make edits in the user experience tools'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 20,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'signup-instruct',
			'DefDescription' => '<h1 class="mT0">Sign Up</h1>'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 22,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-on',
			'DefOrder' => '7',
			'DefDescription' => '#4429B4'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 23,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-faint',
			'DefOrder' => '9',
			'DefDescription' => '#F5F2FE'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 25,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-danger-on',
			'DefOrder' => '11',
			'DefDescription' => '#D40202'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 27,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-success-on',
			'DefOrder' => '13',
			'DefDescription' => '#006D36'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 28,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'show-logo-title',
			'DefDescription' => 'Off'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 29,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-logo',
			'DefOrder' => '20',
			'DefDescription' => '#4429B4'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 30,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'users-create-db',
			'DefDescription' => '0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 31,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'xml-example-core-id',
			'DefDescription' => '1'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 32,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license',
			'DefDescription' => 'Creative Commons Attribution-ShareAlike License'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 33,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license-url',
			'DefDescription' => 'http://creativecommons.org/licenses/by-sa/3.0/'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 34,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license-img',
			'DefDescription' => '/survloop/uploads/creative-commons-by-sa-88x31.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 51,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'login-instruct',
			'DefDescription' => 'Here you can login to interact more with the site.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 52,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'tree-1-example',
			'DefDescription' => '1'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 53,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'header-code',
			'DefDescription' => '<!-- -->'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 59,
			'DefDatabase' => '1',
			'DefSet' => 'Style CSS',
			'DefSubset' => 'main',
			'DefDescription' => 'body {
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
		DB::table('SL_Definitions')->insert([
			'DefID' => 68,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'user-email-optional',
			'DefDescription' => 'On'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 69,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'user-name-ask',
			'DefDescription' => 'On'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 70,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'user-name-optional',
			'DefDescription' => 'Off'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 71,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'tree-1-core-record-singular',
			'DefDescription' => 'Installation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 72,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'tree-1-core-record-plural',
			'DefDescription' => 'Installations'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 453,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-text',
			'DefOrder' => '1',
			'DefDescription' => '#555'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 454,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'font-main',
			'DefDescription' => 'Helvetica,Arial,sans-serif'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 455,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-grey',
			'DefOrder' => '10',
			'DefDescription' => '#999'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 456,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-bg',
			'DefOrder' => '6',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 457,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-nav-bg',
			'DefOrder' => '5',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 458,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-nav-text',
			'DefOrder' => '4',
			'DefDescription' => '#999'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 459,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-info-on',
			'DefOrder' => '15',
			'DefDescription' => '#0E3D93'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 461,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-warn-on',
			'DefOrder' => '17',
			'DefDescription' => '#FFB01F'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 463,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-line-hr',
			'DefOrder' => '19',
			'DefDescription' => '#999'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 464,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-field-bg',
			'DefOrder' => '21',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 466,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-form-text',
			'DefOrder' => '3',
			'DefDescription' => '#333'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 470,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'log-css-reload',
			'DefDescription' => '1573412520'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 471,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-link',
			'DefOrder' => '2',
			'DefDescription' => '#416CBD'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 472,
			'DefDatabase' => '1',
			'DefSet' => 'Style CSS',
			'DefSubset' => 'email'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 474,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'css-extra-files'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 473,
			'DefDatabase' => '1',
			'DefSet' => 'Blurbs',
			'DefSubset' => 'Footer',
			'DefIsActive' => '3',
			'DefDescription' => '<div id="pubFooter"><div class="container">
    <div class="row">
        <div class="col-md-3 pB20">
            <a href="/">Home</a><br>
            <a href="/documentation">Documentation</a><br>
            <a href="/site-map">Site Map</a><br>
        </div><div class="col-md-3 pB20">
            <a href="https://github.com/wikiworldorder/survloop" target="_blank">On GitHub
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
		DB::table('SL_Definitions')->insert([
			'DefID' => 523,
			'DefDatabase' => '1',
			'DefSet' => 'System Checks',
			'DefSubset' => 'system-updates',
			'DefDescription' => '2018-03-27'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 526,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'cust-package',
			'DefDescription' => 'wikiworldorder/survlooporg'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 594,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'spinner-code',
			'DefDescription' => '<i class="fa-li fa fa-spinner fa-spin"></i>'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 595,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'twitter',
			'DefDescription' => '@SurvLoop'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 596,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'parent-company',
			'DefDescription' => 'Wiki World Order'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 597,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'parent-website',
			'DefDescription' => 'http://WikiWorldOrder.org'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 632,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-faintr',
			'DefDescription' => '#FCFBFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 673,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-volunteers',
			'DefDescription' => '0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 674,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-partners',
			'DefDescription' => '0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 675,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'partner',
			'DefOrder' => '3',
			'DefValue' => 'Partner Member',
			'DefDescription' => 'Basic permission to pages and tools just for partners'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 682,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-canada',
			'DefDescription' => '1'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 687,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'user-name-req',
			'DefDescription' => '1 or 0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 688,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license-snc',
			'DefDescription' => '2015'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 689,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-avatars',
			'DefDescription' => '/survloop/uploads/avatar-shell.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 693,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'sys-cust-js',
			'DefDescription' => 'var custom = 1;'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 694,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'sys-cust-ajax',
			'DefDescription' => 'function reqFormFldCustom() { return 0; }'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 695,
			'DefDatabase' => '1',
			'DefSubset' => 'SurvLoop Coder Skills',
			'DefValue' => 'PHP'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 696,
			'DefDatabase' => '1',
			'DefSubset' => 'SurvLoop Coder Skills',
			'DefOrder' => '1',
			'DefValue' => 'Laravel'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 697,
			'DefDatabase' => '1',
			'DefSubset' => 'SurvLoop Coder Skills',
			'DefOrder' => '2',
			'DefValue' => 'Javascript'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 698,
			'DefDatabase' => '1',
			'DefSubset' => 'SurvLoop Coder Skills',
			'DefOrder' => '3',
			'DefValue' => 'jQuery / AJAX'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 699,
			'DefDatabase' => '1',
			'DefSubset' => 'SurvLoop Coder Skills',
			'DefOrder' => '4',
			'DefValue' => 'CSS'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 700,
			'DefDatabase' => '1',
			'DefSubset' => 'SurvLoop Coder Skills',
			'DefOrder' => '5',
			'DefValue' => 'GitHub'
		]);
	

	DB::table('SL_Tree')->insert([
			'TreeID' => 1,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey',
			'TreeName' => 'SurvLoop Installs',
			'TreeDesc' => 'Record of all websites and systems powered by the SurvLoop open data engine.',
			'TreeSlug' => 'survloop-installs',
			'TreeRoot' => '13',
			'TreeFirstPage' => '-3',
			'TreeLastPage' => '-3',
			'TreeCoreTable' => '29'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 2,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'SurvLoop Installs',
			'TreeSlug' => 'survloop-installs',
			'TreeRoot' => '12',
			'TreeFirstPage' => '-3',
			'TreeLastPage' => '-3',
			'TreeCoreTable' => '29'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 5,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Home',
			'TreeSlug' => 'home',
			'TreeRoot' => '15',
			'TreeFirstPage' => '15',
			'TreeLastPage' => '15',
			'TreeOpts' => '7'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 6,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Admin Dashboard',
			'TreeSlug' => 'dashboard',
			'TreeRoot' => '26',
			'TreeFirstPage' => '26',
			'TreeLastPage' => '26',
			'TreeOpts' => '21'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 7,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'My Profile',
			'TreeSlug' => 'my-profile',
			'TreeRoot' => '28',
			'TreeOpts' => '23'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 8,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How To Install SurvLoop',
			'TreeSlug' => 'how-to-install-survloop',
			'TreeRoot' => '44',
			'TreeFirstPage' => '44',
			'TreeLastPage' => '44'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 9,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How To Install Laravel Locally On A Mac',
			'TreeSlug' => 'how-to-install-laravel-locally-on-a-mac',
			'TreeRoot' => '52',
			'TreeFirstPage' => '52',
			'TreeLastPage' => '52'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 10,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How To Install Laravel on an Ubuntu Server',
			'TreeSlug' => 'how-to-install-laravel-on-an-ubuntu-server',
			'TreeRoot' => '60',
			'TreeFirstPage' => '60',
			'TreeLastPage' => '60'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 11,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Redirect',
			'TreeName' => 'https://github.com/wikiworldorder/survloop',
			'TreeDesc' => 'https://github.com/wikiworldorder/survloop',
			'TreeSlug' => 'github'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 12,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Volunteer',
			'TreeSlug' => 'volunteer',
			'TreeRoot' => '62',
			'TreeOpts' => '119'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 13,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Search',
			'TreeSlug' => 'search',
			'TreeRoot' => '64',
			'TreeOpts' => '31'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 14,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Dashboard Search',
			'TreeSlug' => 'search',
			'TreeRoot' => '66',
			'TreeOpts' => '93'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 15,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Volunteer Search',
			'TreeSlug' => 'volun-search',
			'TreeRoot' => '68',
			'TreeOpts' => '527'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 16,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How To Setup Emailing With Mailgun',
			'TreeSlug' => 'how-to-setup-emailing-with-mailgun',
			'TreeRoot' => '70',
			'TreeFirstPage' => '70',
			'TreeLastPage' => '70'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 17,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Partner',
			'TreeSlug' => 'partner',
			'TreeRoot' => '72',
			'TreeOpts' => '287'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 18,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Staff',
			'TreeSlug' => 'staff',
			'TreeRoot' => '74',
			'TreeOpts' => '301'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 19,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Gather Install Stats',
			'TreeSlug' => 'gather-install-stats',
			'TreeRoot' => '76',
			'TreeFirstPage' => '76',
			'TreeLastPage' => '76'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 20,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Staff Search',
			'TreeSlug' => 'staff-search',
			'TreeRoot' => '83',
			'TreeOpts' => '1333'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 21,
			'TreeDatabase' => '1',
			'TreeUser' => '0',
			'TreeType' => 'Page',
			'TreeName' => 'Partner Search',
			'TreeSlug' => 'partner-search',
			'TreeRoot' => '85',
			'TreeOpts' => '1271'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 22,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How To Create Your Own VPN',
			'TreeSlug' => 'how-to-create-your-own-vpn',
			'TreeRoot' => '258',
			'TreeFirstPage' => '258',
			'TreeLastPage' => '258'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 23,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'WordPress Installs Checklist',
			'TreeSlug' => 'wordpress-installs-checklist',
			'TreeRoot' => '275',
			'TreeFirstPage' => '275',
			'TreeLastPage' => '275',
			'TreeOpts' => '3'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 24,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'SurvLoop Software Documentation Overview',
			'TreeSlug' => 'documentation',
			'TreeRoot' => '588',
			'TreeFirstPage' => '588',
			'TreeLastPage' => '588'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 25,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Package Files, Folders, and Classes',
			'TreeSlug' => 'package-files-folders-classes',
			'TreeRoot' => '742',
			'TreeFirstPage' => '742',
			'TreeLastPage' => '742'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 26,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How To Setup SurvLoop After Installation',
			'TreeSlug' => 'how-to-setup-survloop',
			'TreeRoot' => '1452',
			'TreeFirstPage' => '1452',
			'TreeLastPage' => '1452'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 27,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How To Install SurvLoop with Docker',
			'TreeSlug' => 'how-to-install-survloop-with-docker',
			'TreeRoot' => '1641',
			'TreeFirstPage' => '1641',
			'TreeLastPage' => '1641'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 28,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How To Setup an Ubuntu Server on Digital Ocean',
			'TreeSlug' => 'how-to-setup-an-ubuntu-server-on-digital-ocean',
			'TreeRoot' => '2185',
			'TreeFirstPage' => '2185',
			'TreeLastPage' => '2185'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 29,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Developer Work Flows',
			'TreeSlug' => 'developer-work-flows',
			'TreeRoot' => '2646',
			'TreeFirstPage' => '2646',
			'TreeLastPage' => '2646'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 30,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How A Basic Page Loads With SurvLoop',
			'TreeSlug' => 'how-a-basic-page-loads-with-survloop',
			'TreeRoot' => '3082',
			'TreeFirstPage' => '3082',
			'TreeLastPage' => '3082'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 31,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Introduction to the SurvLoop Codebase',
			'TreeSlug' => 'introduction-to-survloop-codebase',
			'TreeRoot' => '3093',
			'TreeFirstPage' => '3093',
			'TreeLastPage' => '3093'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 32,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey',
			'TreeName' => 'Open Data Requests',
			'TreeSlug' => 'open-data-requests',
			'TreeRoot' => '3100',
			'TreeFirstPage' => '3101',
			'TreeLastPage' => '3102',
			'TreeCoreTable' => '45',
			'TreeOpts' => '2'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 33,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Open Data Requests',
			'TreeSlug' => 'open-data-requests'
		]);
	
	DB::table('SL_Node')->insert([
			'NodeID' => 25,
			'NodeTree' => '5',
			'NodeParentID' => '21',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 12,
			'NodeTree' => '2',
			'NodeType' => 'XML',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 13,
			'NodeTree' => '1',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'Installations'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 15,
			'NodeTree' => '5',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'home',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 16,
			'NodeTree' => '5',
			'NodeParentID' => '40',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>Updates</h3>
<p><iframe width="100%" height="350" src="https://www.youtube.com/embed/DcooFRrepBA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 17,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '3',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<p><a href="https://openpolice.org" target="_blank"><img src="/survlooporg/uploads/openpolicecomplaints.png" border=0 width=75% ></a></p>
<p>&nbsp;</p>',
			'NodeResponseSet' => 'Default',
			'NodeDefault' => '#000;;#FFF;;#FFF;;;;w100;;N;;center;;auto',
			'NodeOpts' => '71'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 18,
			'NodeTree' => '5',
			'NodeParentID' => '22',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark mT0">SurvLoop is an open data engine used to create, fill, and share complex databases.</h2>
<p>Back in the day we created database tables, queries, forms, reports, and pages with Microsoft Access<sup style="font-size: 8pt;">TM</sup> (and probably today, but who would). This is a full content management system that can generate mobile-friendly forms as complex as TurboTax<sup style="font-size: 8pt;">TM</sup>.</p>
<p>Translating each data field\'s meaning (in English) as you build your database, means computer-friendly API data listings and schema can be auto-generated once you start collecting data.</p>
<p>Because the tools to create complex forms continue to become more useful, it was a logical next step to reuse them to generate complex pages for the rest of a website\'s main content. The basics needs are just about complete!</p>
<p>A lot of progress was made in 2018! And the goal is to significantly improve all the admin editing tools by the end of 2019.</p>
<p>And hopefully by the end of 2020, almost all of the admin tools will be replaced with SurvLoop-generated forms, to also approach the status of a being self~replicating GUI!</p>
<p><em>A theme is branching trees, in many directions. Fractals are fun.</em></p>',
			'NodePromptAfter' => '<style> #treeWrap21 { margin-top: 30px; } </style>',
			'NodeOpts' => '5963'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 21,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 22,
			'NodeTree' => '5',
			'NodeParentID' => '21',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '6'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 23,
			'NodeTree' => '5',
			'NodeParentID' => '21',
			'NodeParentOrder' => '2',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 24,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p><img src="/survloop/uploads/survloop-logo-trans.png" width="100%" border="0"></p>
<center><h3>All Our Data Are Belong</h3><p>[ TO US ]</p></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 26,
			'NodeTree' => '6',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'dashboard',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 27,
			'NodeTree' => '6',
			'NodeParentID' => '26',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Welcome to Admin Dashboard.</h2>
<p>Edit this node to fill in your page! This node could be your entire page, or just one little component.</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 28,
			'NodeTree' => '7',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'my-profile'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 29,
			'NodeTree' => '7',
			'NodeParentID' => '28',
			'NodeType' => 'Member Profile Basics'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 30,
			'NodeTree' => '7',
			'NodeParentID' => '28',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 31,
			'NodeTree' => '7',
			'NodeParentID' => '30',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '7'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 32,
			'NodeTree' => '7',
			'NodeParentID' => '30',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 33,
			'NodeTree' => '7',
			'NodeParentID' => '30',
			'NodeParentOrder' => '2',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 34,
			'NodeTree' => '7',
			'NodeParentID' => '31',
			'NodeType' => 'Search Results',
			'NodePromptText' => '<h2>Your Participation</h2>',
			'NodeResponseSet' => '1',
			'NodeDataBranch' => 'users'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 35,
			'NodeTree' => '7',
			'NodeParentID' => '33',
			'NodeType' => 'Incomplete Sess Check',
			'NodeResponseSet' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 36,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '4',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<p><a href="http://cannabispowerscore.org" target="_blank" rel="noopener"><img src="/survlooporg/uploads/PowerScoreLogo-.jpg" width="70%" border="0" /></a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
			'NodeDefault' => '#FFF;;#666;;#416CBD;;;;w100;;N;;center;;auto',
			'NodeOpts' => '71'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 37,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '5',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<p><a href="https://drugstory.me" target="_blank"><img src="/survlooporg/uploads/drugstory.png" border=0 width=50% ></a></p>
<p>&nbsp;</p>',
			'NodeDefault' => '#000;;#DDD;;#FFF;;;;w100;;N;;center;;auto',
			'NodeOpts' => '71'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 38,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h3><i><br /><br />Other Sites Currently Running SurvLoop:<br /><br /><br /></i></h3></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 39,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '7',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 40,
			'NodeTree' => '5',
			'NodeParentID' => '39',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 42,
			'NodeTree' => '5',
			'NodeParentID' => '39',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 43,
			'NodeTree' => '5',
			'NodeParentID' => '42',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<a href="https://github.com/wikiworldorder/survloop" target="_blank" class="btn btn-primary btn-lg btn-block taL mB20"><div class="row"><div class="col-3 fPerc300 pT5 pL20"><i class="fa fa-github" aria-hidden="true"></i></div><div class="col-9 taL pT15">github.com/<br />wikiworldorder/survloop</div></div></a>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 44,
			'NodeTree' => '8',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-install-survloop',
			'NodePromptAfter' => 'How To Install SurvLoop::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 52,
			'NodeTree' => '9',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-install-laravel-locally-on-a-mac',
			'NodePromptAfter' => 'How To Install Laravel Locally On A Mac::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 53,
			'NodeTree' => '9',
			'NodeParentID' => '985',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>How To Install Laravel Locally On A Mac</h2>
<p><i>So You Can Install SurvLoop</i></p>
<p>&nbsp;I have only been learning <a href="https://laravel.com/" target="_blank" rel="noopener">Laravel</a> for a year, but below is the Homestead install process which has worked best for me. <a href="https://laravel.com/docs/6.x/homestead" target="_blank">Homestead</a> is Laravel\'s own development environment, powered by Vagrant.</p>
<p><b>Replace all references to "ProjectName" with a short name for your own project.</b></p>
<ol>
 	<li>Install <a href="https://apps.apple.com/us/app/xcode/id497799835" target="_blank">XCode from the App Store</a>. Open it, and accept the user agreement.</li>
 	<li>Install VirtualBox: <a href="https://www.virtualbox.org/wiki/Downloads" target="_blank" rel="noopener">https://www.virtualbox.org/wiki/Downloads</a></li>
 	<li>Install Vagrant: <a href="https://www.vagrantup.com/downloads.html" target="_blank" rel="noopener">https://www.vagrantup.com/downloads.html</a></li>
 	<li>To the command line (Mac OS Terminal, or <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a>)! Create local ssh key, if you haven\'t on this computer before:
<pre>$ ssh-keygen -t rsa -C "your@emailaddress.com"</pre>
</li>
 	<li>Install Composer, Homestead, and initialize. For this example, the work area\'s directory is "~/web", and the project folder is installed to "ProjectName", but you can adjust those as needed:<br><pre>$ <code class=" language-php">vagrant box add laravel<span class="token operator">/</span>homestead<br></code>$ curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer  
$ mkdir ~/web
$ cd ~/web
$ git clone https://github.com/laravel/homestead.git ProjectName<br><code class=" language-php">$ </code><code class=" language-php">git checkout release</code>
$ cd ProjectName
$ bash init.sh</pre>
<p>&nbsp;</p>
</li>
 	<li>Edit paths in Homestead.yaml:
<pre>$ nano Homestead.yaml</pre>
<em>Change the folders and sites</em><em> to:</em>
<pre>folders: 
	- map: ~/web/ProjectName/code
	  to: /home/vagrant/code
sites:
    - map: survloop.local
      to: /home/vagrant/code/ProjectName/public</pre>
<p>&nbsp;</p>
</li>
 	<li>Edit the hosts file:
<pre>$ sudo nano /etc/hosts</pre>
Add one line to the bottom:
<pre>192.168.10.10   homestead.local</pre>
<p>&nbsp;</p>
</li>
 	<li>Launch your local server ("vagrant up"), log into it, and install Laravel!...
<pre>$ cd ~/web/ProjectName
$ vagrant up
$ vagrant ssh
$ cd /home/vagrant/Code
$ composer global require "laravel/installer"
$ composer create-project laravel/laravel ProjectName "5.8.*"
</pre>
</li>
</ol>
<p>&nbsp;</p>
<p>Now you should be able to confirm your successful installation by pulling up <a href="http://homestead.local" target="_blank">http://homestead.local</a> in your browser!</p>
<ul>
 	<li>If you like, you can now connect to your server\'s database with something like <a href="https://www.sequelpro.com/" target="_blank" rel="noopener">Sequel Pro</a>, and the following default login info.... Host: 127.0.0.1 , Username: homestead , Password: secret , Port: 33060 , Database: homestead .</li>
</ul>
<p>&nbsp;</p>
And you\'re ready to start installing more Laravel packages and building your own world. Here, inside your virtual vagrant server via SSH, you can enter your new project\'s main composer directory (/home/vagrant/code/ProjectName), which displays in your actual machine\'s file system in ~/web/ProjectName/code/ProjectName (that\'s within your main user account folder alongside Documents, Pictures, etc).
<pre>$ cd ProjectName</pre>
<p>&nbsp;</p>
<p>Edit the environment file to connect the database:</p>
<pre>$ nano .env</pre>
<pre>DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret</pre>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
You could do things like install Laravel\'s out-of-the-box user authentication tools:
<pre>$ php artisan make:auth</pre>
<p>Or install the SurvLoop software I\'ve started: <a href="https://packagist.org/packages/wikiworldorder/survloop" target="_blank" rel="noopener">https://packagist.org/packages/wikiworldorder/survloop</a></p>
<p>Or anything else you can imagine: <a href="https://laravel.com/docs/5.8" target="_blank" rel="noopener">https://laravel.com/docs/5.8</a></p>
<p>&nbsp;</p>
<h3><a href="/how-to-install-survloop#n494"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> How to install SurvLoop <nobr>(after installing Laravel)</nobr></a></h3>
<p></p>&nbsp;<p></p>',
			'NodePromptAfter' => '<style> #treeWrap984 { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 60,
			'NodeTree' => '10',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-install-laravel-on-an-ubuntu-server',
			'NodePromptAfter' => 'How To Install Laravel on an Ubuntu Server::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 61,
			'NodeTree' => '10',
			'NodeParentID' => '1049',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark">How To Install Laravel on an <nobr>Ubuntu Server</nobr></h2>
<h4>So you can run SurvLoop on the web.</h4>
<p class="slGrey">Updated: March 23, 2019</p>
<a href="/how-to-setup-an-ubuntu-server-on-digital-ocean" class="btn btn-lg btn-primary btn-block taL">How To Setup an Ubuntu Server on <nobr>Digital Ocean</nobr></a>

<p> </p>
<h3>Create Non-Root User</h3>
<p>I\'m calling this user <span class="red">frank</span>, but you can call it anything. This is a summary of <a href="https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-18-04" target="_blank">Digital Ocean\'s Initial Server Setup with Ubuntu 18.04</a>.</p>
<pre># ssh root@your_server_ip
$ adduser <span class="red">frank</span>
$ usermod -aG sudo <span class="red">frank</span>
$ ufw allow OpenSSH
$ ufw enable</pre>
<p>And copy your SSH Key from your root user to your new one:</p>
<pre>$ rsync --archive --chown=<span class="red">frank</span>:<span class="red">frank</span> ~/.ssh /home/<span class="red">frank</span></pre>
<p>Then exit as root, and log back in as your non-root user.</p>
<pre>$ exit
# ssh <span class="red">frank</span>@your_server_ip</pre>

<h3>Install LEMP Stack</h3>
<p>This is a summary of <a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-ubuntu-18-04" target="_blank">How To Install Linux, Nginx, MySQL, PHP (LEMP stack) on Ubuntu 18.04</a></p>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key. When you create a MYSQL password, be sure to copy and securely save it.</p>
<pre>$ sudo apt update
$ sudo apt install nginx
$ sudo ufw allow \'Nginx HTTP\'
$ sudo apt install mysql-server
$ sudo mysql_secure_installation</pre>
During the MYSQL install, I choose to...<ul>
<li><b>n</b> - No thanks, password plugin</li>
<li><b>strong-password</b> - Needs to be copied and saved somewhere safe</li>
<li><b>y</b> - Remove anonymous user</li>
<li><b>y</b> - Disallow root login remotely</li>
<li><b>y</b> - Remove test database</li>
<li><b>y</b> - Reload privelege tables</li>
</ul><pre>
$ sudo mysql
</pre><pre>
mysql> ALTER USER \'root\'@\'localhost\' IDENTIFIED WITH mysql_native_password BY \'<span class="red">super_strong_password</span>\';
mysql> FLUSH PRIVILEGES;
mysql> exit
</pre><pre>
$ sudo add-apt-repository universe
$ sudo apt install php-fpm php-mysql</pre>
<p>This is a good time to associate your domain with the server, which is described in <a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-ubuntu-18-04#step-3-%E2%80%93-installing-php-and-configuring-nginx-to-use-the-php-processor" target="_blank">Step 3 of the tutorial</a>.</p>
<pre>$ sudo systemctl reload nginx</pre>
<p> </p>
<h4>Test That PHP Is Running (optional)</h4>
<p>Create a new file in the default public root:</p>
<pre>nano /var/www/html/index.php</pre>
<p>Type this, "<?php phpinfo();", into the empty file, and save it. If things are working, you should be able to type your IP address (or propagated domain name) into your browser, and <a href="https://s14-eu5.ixquick.com/cgi-bin/serveimage?url=https:%2F%2Fassets.digitalocean.com%2Farticles%2Fphp_edit%2Fphpinfo.png&sp=65cea842f80f5dedbeba0cc83ec9851d" target="_blank" rel="noopener">see a bunch of details</a> about your PHP installation.</p>
<p> </p>
<h4>Install Pear & Composer</h4>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key:</p>
<pre>$ wget http://pear.php.net/go-pear.phar
$ php go-pear.phar
$ apt-get install curl
$ curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
$ service apache2 restart</pre>
<p> </p>
<hr>
<p> </p>
<div class="row"><div class="col-md-7">
<h3>Create A Database</h3>
<p><b>Enable Remote MYSQL Connection (>=v5.7)</b></p>
<pre>$ nano /etc/mysql/mysql.conf.d/mysqld.cnf</pre>
<p>Comment out the line for bind-address, set it to 0.0.0.0, or increase security with your own IP address.</p>
<p>Down the line, you might want a GUI to play with your databases. I\'ve enjoyed <a href="https://www.sequelpro.com/" target="_blank" rel="noopener">Sequel Pro</a>.</p>
<p>Give your new SSH connection an appropriate name, and use your Droplet\'s IP address for the hosts. Copy the MYSQL root password you created while installing the core packages above.</p>
<p>Finally, link your SSH Key in your operating system, "~/.ssh/id_rsa.pub". This can sometimes be challenging since this is a hidden folder which you may need to <a href="https://www.lifewire.com/display-hidden-files-in-os-x-153332" target="_blank" rel="noopener">work to reveal</a>.</p>
</div><div class="col-md-1"></div><div class="col-md-4">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-05.png">
</div></div>
<p> </p>
<div class="row"><div class="col-md-4">
<p>Once you are connected, use the drop-down in the top-left corner to "Add Database...". Give your database an appropriate name, and write it down for later.</p>
</div><div class="col-md-2"></div><div class="col-md-6">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-06.png">
</div></div>
<p> </p>
<hr>
<p> </p>
<h3>Install Laravel</h3>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key:</p>
<pre>$ rm /var/www/html/index.html
$ composer create-project laravel/laravel /var/www/laravel 5.8.*
$ rm /var/www/laravel/vendor/compiled.php
$ cd /var/www/laravel
$ composer update
$ php artisan key:generate
$ chown -R www-data:33 /var/www/laravel/storage
$ chmod -R gu+w /var/www/laravel/storage
$ nano .env</pre>
<p>While editing Laravel\'s .env file, enter your domain name for the APP_URL, and database connection info:</p>
<pre>APP_URL=https://example.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=newdatabasename
DB_USERNAME=root
DB_PASSWORD=strongpassword</pre>
<p>Finally just clear the cache...</p>
<pre>php artisan cache:clear</pre>
<p> </p>
<hr>
<p> </p>
<h3>Setup Server\'s Domain</h3>
<pre>$ cd /etc/apache2/sites-available
$ cp 000-default.conf example.com.conf
$ nano /etc/apache2/sites-available/example.com.conf</pre>
<p>Edit this file to replace "DocumentRoot /var/www/html" with:</p>
<pre>DocumentRoot /var/www/laravel/public</pre>
<p>Open up one more file to edit:</p>
<pre>nano /etc/apache2/apache2.conf</pre>
<p>Edit the bottom of this new file, to replace these two default lines for the public directory settings (/var/www) with...</p>
<pre>Directory /var/www/laravel/public
        AllowOverride All</pre>
<p>Run a few more commands to finish this step:</p>
<pre>$ a2dissite 000-default && sudo a2ensite example.com
$ a2enmod rewrite
$ /etc/init.d/apache2 restart</pre>
<p> </p>
<hr>
<p> </p>
<h3>Install SSL Certificate</h3>
<p>Thanks to the <a href="https://www.eff.org/" target="_blank" rel="noopener">EFF</a>\'s <a href="https://certbot.eff.org/" target="_blank" rel="noopener">Certbot</a>, you can now get this step down quickly and easily... for free!! Just run these commands:</p>
<pre>$ apt-get install software-properties-common
$ add-apt-repository ppa:certbot/certbot
$ apt-get update
$ apt-get install python-certbot-apache
$ certbot --apache
$ certbot renew</pre>
<p> </p>
<hr>
<p> </p>
<h2>Start Using Laravel or Install SurvLoop</h2>
<p>You should now have a functioning server with basic, common security measures installed! From here, you can <a href="https://github.com/wikiworldorder/survloop#getting-started">install SurvLoop</a>, any other Laravel-based projects, or start building your own. You should now see the basic Laravel page when you browse to your IP address or domain name.</p>
<p><a href="/how-to-install-survloop" class="btn btn-lg btn-primary btn-block taL">Next, Install SurvLoop on top of Laravel</a></p>',
			'NodePromptAfter' => '<style> #treeWrap1048 { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 62,
			'NodeTree' => '12',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'volunteer'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 63,
			'NodeTree' => '12',
			'NodeParentID' => '62',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 64,
			'NodeTree' => '13',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 65,
			'NodeTree' => '13',
			'NodeParentID' => '64',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 66,
			'NodeTree' => '14',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 67,
			'NodeTree' => '14',
			'NodeParentID' => '66',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 68,
			'NodeTree' => '15',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'volun-search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 69,
			'NodeTree' => '15',
			'NodeParentID' => '68',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 70,
			'NodeTree' => '16',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-setup-emailing-with-mailgun',
			'NodePromptAfter' => 'How To Setup Emailing With Mailgun::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 71,
			'NodeTree' => '16',
			'NodeParentID' => '70',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<h2>How To Setup Emailing With Mailgun</h2>
<h3><a href="https://documentation.mailgun.com/en/latest/quickstart-sending.html#how-to-start-sending-email" target="_blank">How To Start Sending Email with Mailgun</a></h3>
<p><a href="http://code.krister.ee/mailgun-digitalocean/" target="_blank">Mailgun + Digital Ocean</a></p><p><br></p>
<h4>Guzzle (Required Package)</h4>
<p><a href="http://docs.guzzlephp.org/en/stable/overview.html#installation" target="_blank">How To Install Guzzle</a></p>
<p>composer.json</p><pre>"require": { "guzzlehttp/guzzle": "~6.0", }</pre>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 72,
			'NodeTree' => '17',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'partner'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 73,
			'NodeTree' => '17',
			'NodeParentID' => '72',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 74,
			'NodeTree' => '18',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'staff'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 75,
			'NodeTree' => '18',
			'NodeParentID' => '74',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 76,
			'NodeTree' => '19',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'gather-install-stats',
			'NodePromptAfter' => 'Gather Install Stats::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 77,
			'NodeTree' => '19',
			'NodeParentID' => '79',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<p><br></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 78,
			'NodeTree' => '19',
			'NodeParentID' => '79',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<h2 class="slBlueDark">SurvLoop Installation Stats</h2>
<div class="row"><div class="col-8">
<p><b>Here are collections of statistics from each active SurvLoop Installation</b>. In terms of participation, we can see <span class="slBlueDark">how many users</span> have created an account for the website, and how many submissions have been <span class="slBlueDark">completed for its primary survey</span>.</p>
<p>For a rough view of each system\'s database design, we can see how many <span class="slBlueDark">data tables</span>, <span class="slBlueDark">linkages</span>, and individual <span class="slBlueDark">data fields</span> it uses. A <span class="slBlueDark">table</span> can be thought of as similar to one spreadsheet, and a <span class="slBlueDark">field</span> would be similar to a column. This database is mostly managed by <span class="slBlueDark">surveys</span>, which may have different structures.</p>
<p><span class="slBlueDark">Survey</span> and website <span class="slBlueDark">pages</span> are each built as a branching tree of <span class="slBlueDark">nodes</span>, like a choose your own adventure. Out of the <span class="slBlueDark">survey nodes</span> which are form fields asking for user responses, we get more flavor from seeing how many are <span class="slBlueDark">multiple-choice questions</span>, <span class="slBlueDark">open-ended</span>, or <span class="slBlueDark">numeric</span>.</p>
<p>&nbsp;</p>
</div><div class="col-1">
</div><div class="col-3">
<img src="/survloop/uploads/survloop-logo-x800.jpg" border=0 class="w100" >
</div></div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 79,
			'NodeTree' => '19',
			'NodeParentID' => '76',
			'NodeType' => 'Page Block'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 80,
			'NodeTree' => '19',
			'NodeParentID' => '79',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<h5>Counting either \'lines of code\' or bytes only really demonstrates some relative comparisons here. But roughly speaking, this is what\'s in the folders of each software package...</h5>
<ul>
<li><span class="slBlueDark">Controllers</span> - largely PHP code, database queries, input, and data processing</li>
<li><span class="slBlueDark">Views</span> - largely HTML, Javascript, and CSS code, with targeted PHP variables echoed</li>
<li><span class="slBlueDark">Database</span> - Laravel-specific PHP code, initializing database table structures and default contents</li>
<li><span class="slBlueDark">Uploads</span> - various types of other uploaded files, largely images, third-party code (if any)</li>
</ul>
<p>&nbsp;</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 81,
			'NodeTree' => '19',
			'NodeParentID' => '79',
			'NodeParentOrder' => '3',
			'NodeType' => 'Instructions Raw'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 82,
			'NodeTree' => '19',
			'NodeParentID' => '79',
			'NodeParentOrder' => '4',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 83,
			'NodeTree' => '20',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'staff-search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 84,
			'NodeTree' => '20',
			'NodeParentID' => '83',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 85,
			'NodeTree' => '21',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'partner-search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 86,
			'NodeTree' => '21',
			'NodeParentID' => '85',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><h1 style="margin-top: 50px;">Coming Soon</h1></center>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 258,
			'NodeTree' => '22',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-create-your-own-vpn',
			'NodePromptAfter' => 'How To Create Your Own VPN::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 259,
			'NodeTree' => '22',
			'NodeParentID' => '258',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Adding A Server Chastidy<br></h2><br><ol><li><b>Run the basic initial setup for two new servers: one for OpenVPN; and one as a certificate authority (CA).</b><br><a href="https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-18-04" target="_blank">https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-18-04</a><br></li>
<li><b>Then follow the rest of the instructions to setup an OpenVPN Server.</b><br><a href="https://www.digitalocean.com/community/tutorials/how-to-set-up-an-openvpn-server-on-ubuntu-18-04" target="_blank">https://www.digitalocean.com/community/tutorials/how-to-set-up-an-openvpn-server-on-ubuntu-18-04</a><br>During step 5, you\'ll want to follow the optional instructions to "Push DNS Changes to Redirect All Traffic Through the VPN".<br><br>At the end of this, you should be able to successfully connect to your own OpenVPN install. When checking your IP address using some online service, it should appear as your OpenVPN server\'s IP address.<br></li><li><b>On the server you want to protect, restrict ssh to your OpenVPN server\'s IP address:</b> <br><br><pre>$ sudo nano /etc/hosts.allow</pre><p>Add these lines (with your OpenVPN server\'s IP address swapped in)...</p><pre>sshd : localhost : allow<br>sshd : 000.000.000.000 : allow<br>sshd : ALL : deny</pre><p></p><br></li><li><br></li></ol><p><br></p><p><br></p><p><br></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 275,
			'NodeTree' => '23',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'wordpress-installs-checklist',
			'NodePromptAfter' => 'WordPress Installs Checklist::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 276,
			'NodeTree' => '23',
			'NodeParentID' => '275',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>WordPress Installs Checklist</h2>
<p><br></p><p><br></p><p><a href="http://burnerlove.com/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://burnerlove.com/wp-admin/admin.php?page=WordfenceScan</a></p><p><a href="http://christaluv.com/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://christaluv.com/wp-admin/admin.php?page=WordfenceScan</a></p><p><a href="http://cinamazingchats.com/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://cinamazingchats.com/wp-admin/admin.php?page=WordfenceScan</a></p><p><a href="http://clientharmonizer.com/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://clientharmonizer.com/wp-admin/admin.php?page=WordfenceScan</a></p><p><a href="http://djtaters.com/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://djtaters.com/wp-admin/admin.php?page=WordfenceScan</a></p><p><a href="http://katherine-ricardo.com/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://katherine-ricardo.com/wp-admin/admin.php?page=WordfenceScan</a></p><p><a href="http://kindcommunication.org/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://kindcommunication.org/wp-admin/admin.php?page=WordfenceScan</a></p><p><a href="http://rachelzurer.com/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://rachelzurer.com/wp-admin/admin.php?page=WordfenceScan</a></p><p><a href="http://solarnotbombs.org/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://solarnotbombs.org/wp-admin/admin.php?page=WordfenceScan</a></p><p><a href="http://sparktutoring.org/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://sparktutoring.org/wp-admin/admin.php?page=WordfenceScan</a></p><p><a href="http://teaoakland.com/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://teaoakland.com/wp-admin/admin.php?page=WordfenceScan</a></p><p><a href="http://wikiworldorder.org/wp-admin/admin.php?page=WordfenceScan" target="_blank">http://wikiworldorder.org/wp-admin/admin.php?page=WordfenceScan</a></p><p>https://youthactivismproject.org/wp-admin/admin.php?page=WordfenceScan</p><p><br></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 384,
			'NodeTree' => '8',
			'NodeParentID' => '423',
			'NodeParentOrder' => '4',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>New To Laravel?</h2>
<p>Here are some of the basic lessons I\'ve learned in my first three years...</p>
<h4>Clearing Caches</h4>
<p>You\'ve made changes, but they aren\'t taking root. You might be able to turn that off and on again with one the common cache clears. These can be run from your Laravel installation\'s root:</p>
<pre>$ php artisan vendor:publish --force
$ php artisan cache:clear
$ php artisan route:cache
$ php artisan view:clear
$ php artisan config:cache
$ php artisan optimize
</pre>
<h2>New To Composer?</h2>
<p>Here are some of the basic lessons I\'ve learned in newb land...</p>
<pre>$ composer dump-autoload
</pre>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 422,
			'NodeTree' => '8',
			'NodeParentID' => '44',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 423,
			'NodeTree' => '8',
			'NodeParentID' => '422',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 425,
			'NodeTree' => '8',
			'NodeParentID' => '422',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 434,
			'NodeTree' => '8',
			'NodeParentID' => '423',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<h2>How To Install SurvLoop</h2>
<ol><li><a href="#n3072">Install Homestead</a> </li><li><a href="#n3071">Install Laravel</a> </li><li><a href="#n494">Install SurvLoop</a><br></li></ol>',
			'NodePromptAfter' => '<style> #treeWrap422 { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 441,
			'NodeTree' => '8',
			'NodeParentID' => '790',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '[ Documentation Navigation ] hard-coded via SurvLoopOrg.php function 
printDocumentationNav, to view survlooporg.inc-documentation-navigation<br>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 494,
			'NodeTree' => '8',
			'NodeParentID' => '423',
			'NodeParentOrder' => '3',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3 class="slBlueDark">3. Install SurvLoop</h3>
<p>From your Laravel installation\'s root directory, update `composer.json` to require and easily reference SurvLoop:</p>
<pre>$ nano composer.json
</pre>
<pre>...
"require": {
	...
    "wikiworldorder/survloop": "^0.2.10",
	...
},
...
"autoload": {
	...
	"psr-4": {
		...
		"SurvLoop\\": "vendor/wikiworldorder/survloop/src/",
	}
	...
}, ...
</pre>
<p>After saving the file, run the update to download SurvLoop, and any missing dependencies.</p>
<pre>$ composer update</pre><h4>Laravel Config<br></h4><p>Add the package to your application service providers in `config/app.php`.</p>
<pre>$ nano config/app.php
</pre>
<pre>...
    \'name\' =&gt; \'SurvLoop\',
...
\'providers\' =&gt; [
	...
	SurvLoop\SurvLoopServiceProvider::class,
	...
],
...
\'aliases\' =&gt; [
	...
	\'SurvLoop\' =&gt; \'WikiWorldOrder\SurvLoop\SurvLoopFacade\',
	...
], ...
</pre>
<p> </p>
<p>Swap out the SurvLoop user model in `config/auth.php`.</p>
<pre>$ nano config/auth.php
</pre>
<pre>...
\'model\' =&gt; App\Models\User::class,
...</pre><h4>Migrate, Publish, and Clean Up</h4>
<p>Update composer, publish the package migrations, etc...</p>
<pre>$ echo "0" | php artisan vendor:publish --force<br>$ cd ~/homestead<br>$ vagrant up<br>$ vagrant ssh<br>$ cd code/survloop<br>$ php artisan migrate<br>$ composer dump-autoload<br>$ php artisan db:seed --class=SurvLoopSeeder<br>$ php artisan db:seed --class=ZipCodeSeeder<br>$ php artisan optimize:clear
</pre>
<p>For now, to apply database design changes to the same installation 
you are working in, depending on your server, you might also need 
something like this...</p>
<pre>$ chown -R www-data:33 app/Models
$ chown -R www-data:33 database
</pre><p>You might need to re-run some things outside the virtual box too, e.g.</p><pre>$ exit
$ cd ~/homestead/code/survloop
$ php artisan optimize:clear
$ composer dump-autoload
</pre>
<p>Now you should be able to confirm your successful installation by pulling up <a href="http://survloop.local" target="_blank">http://survloop.local</a> in your browser! You can also connect to the database with apps like <a href="https://www.sequelpro.com/" target="_blank" rel="noopener">Sequel Pro</a>,
 and default login info.... Host: 127.0.0.1 , Username: 
homestead , Password: secret , Port: 33060 , Database: homestead .</p><h4>Initialize SurvLoop Installation<br></h4><p>Then browsing to the home page should prompt you to create the first admin user account:</p>
<p><a href="http://survloop.local" target="_blank"><b>http://survloop.local</b></a></p><p>If everything looks janky, then manually load the style sheets, etc:</p><p><a href="http://survloop.local/css-reload" target="_blank"><b>http://survloop.local/css-reload</b></a></p><p>After logging in as an admin, this link rebuilds many supporting files:</p><p><a href="http://survloop.local/dashboard/settings?refresh=2"><b>http://survloop.local/dashboard/settings?refresh=2</b></a></p><p>You
 can also connect to the database with apps like Sequel Pro, and default
 login info.... Host: 127.0.0.1 , Username: homestead , Password: secret
 , Port: 33060 , Database: homestead .</p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 588,
			'NodeTree' => '24',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'documentation',
			'NodePromptAfter' => 'SurvLoop Software Documentation Overview::M::This best source for all of SurvLoop\'s documentation thus far.::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 589,
			'NodeTree' => '24',
			'NodeParentID' => '622',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Welcome to SurvLoop Software Documentation.</h2>
<div class="nodeAnchor"><a id="installation" name="installation"></a></div>',
			'NodePromptAfter' => '<style> #treeWrap620 { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 620,
			'NodeTree' => '24',
			'NodeParentID' => '588',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 621,
			'NodeTree' => '24',
			'NodeParentID' => '620',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 622,
			'NodeTree' => '24',
			'NodeParentID' => '620',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 641,
			'NodeTree' => '24',
			'NodeParentID' => '2459',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<span class="fPerc133">[ Documentation Navigation ] hard-coded via 
SurvLoopOrg.php function printDocumentationNav, to view 
survlooporg.inc-documentation-navigation</span>',
			'NodePromptAfter' => '<style> #treeWrap620 { margin-top: 30px; } </style>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 735,
			'NodeTree' => '24',
			'NodeParentID' => '622',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>SurvLoop Code Base Orientation</h3>
<div class="pB20"><a href="https://github.com/wikiworldorder/survloop" class="btn btn-lg btn-primary btn-block mT20"><i class="fa fa-github mR5" aria-hidden="true"></i> wikiworldorder/survloop on GitHub</a></div>
<p>Here are the start of documents to get you familiar with the SurvLoop landscape, if you\'re starting to dive in.</p>
<p><a href="/package-files-folders-classes" class="btn btn-lg btn-primary btn-block">SurvLoop Package\'s File &amp; Folder Layout</a></p>
<p>&nbsp;</p>
<p><a href="/developer-work-flows" class="btn btn-lg btn-primary btn-block">Developer Work Flows</a></p>
<p>&nbsp;</p>
<p><a href="/how-a-basic-page-loads-with-survloop" class="btn btn-lg btn-primary btn-block">How A Basic Page Loads With SurvLoop</a></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 742,
			'NodeTree' => '25',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'package-files-folders-classes',
			'NodePromptAfter' => 'Package Files, Folders, and Classes::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 743,
			'NodeTree' => '25',
			'NodeParentID' => '752',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark">SurvLoop Package\'s File &amp; Folder Layout</h2>

<p>This document should help map out the contents of the SurvLoop package on GitHub.</p><p>After months of initial development, this open data engine was migrated to run atop the Laravel framework, which is a <a href="https://blog.pusher.com/laravel-mvc-use/" target="_blank">Model View Controller (</a><a href="https://blog.pusher.com/laravel-mvc-use/" target="_blank">MVC</a><a href="https://blog.pusher.com/laravel-mvc-use/" target="_blank">)</a>.</p><iframe src="https://www.youtube.com/embed/CAO_1yCjvBs" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="100%" height="315" frameborder="0"></iframe><p>If you\'re new to Laravel, this package gets installed here: /root-folder/vendor/wikiworldorder/survloop<br></p>
<h4><a href="https://github.com/wikiworldorder/survloop" target="_blank"><i class="fa fa-github mR5" aria-hidden="true"></i> wikiworldorder/survloop</a></h4>
<div class="pL20"><ul>
<li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/composer.json" target="_blank">composer.json</a></b>: Defines more packages required by SurvLoop, as well as easier references to some packages.</li>
<li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src" target="_blank">src</a></b>: Repository\'s main source code.
<ul>
    <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/SurvLoopServiceProvider.php" target="_blank">SurvLoopServiceProvider.php</a></b>: SurvLoopServiceProvider manages which package files and folders need to be copied to elsewhere in the system. This mostly just runs after installation, and perhaps of some other code updates.</li>
    <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers" target="_blank">Controllers</a></b>: Most of the PHP algorithms and logic which process and manipulate data, and call Views to output the proper results.
    <ul>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Admin" target="_blank">Admin</a></b>: These PHP classes controll both all admin tools for managing survloop, but also handles routing for SurvLoop pages and surveys which require any user login.</li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Auth" target="_blank">Auth</a></b>: A few Laravel authorization classes customized by SurvLoop.</li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals" target="_blank">Globals</a></b>: These classes can be easily accessed from both Controllers and Views.</li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Middleware" target="_blank">Middleware</a></b>: A few Laravel files overwritten by SurvLoop.</li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Stats" target="_blank">Stats</a></b>: These classes are used by SurvLoop to manage the more complicated statistical needs, charts, and graphs.</li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree" target="_blank">Tree</a></b>: This is really the core trunk of SurvLoop, classes which manage the branching trees which generate all surveys, pages, etc.</li>
    </ul>
    </li>
    <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Database" target="_blank">Database</a></b>: Includes migration and seeder files which Laravel can use to install SurvLoop.</li>
    <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Models" target="_blank">Models</a></b>: Copies of all the <a href="https://laravel.com/docs/5.8/eloquent" target="_blank">Eloquent Models</a> used by this package, generated by this same SurvLoop installation.</li>
    <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Routes" target="_blank">Routes</a></b>: All of SurvLoop\'s routing happens here, passing a url request to the right Controller.</li><li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Uploads" target="_blank">Uploads</a></b>: Contains images and photos in SurvLoop\'s default media gallery, most are simply needed for SurvLoop branding.</li>
    <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views" target="_blank">Views</a></b>: Includes <a href="https://laravel.com/docs/5.8/blade" target="_blank">Blade Templates</a> which are called by controllers, and where most of SurvLoop\'s HTML, Javascript, and CSS can be found. Templates for...
    <ul>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/admin" target="_blank">admin</a></b>: general SurvLoop-standard admin interfaces
        <ul>
            <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/admin/db" target="_blank">db</a></b>: admin database design tools</li>
            <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/admin/tree" target="_blank">tree</a></b>: admin survey and page design tools</li>
        </ul>
        </li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/auth" target="_blank">auth</a></b>: user authentication, customizing Laravel\'s style
        <ul>
            <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/auth/passwords" target="_blank">passwords</a></b>: user password tools</li>
        </ul>
        </li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/css" target="_blank">css</a></b>: cascading style sheets for the SurvLoop engine</li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/elements" target="_blank">elements</a></b>: smaller site design or usability elements</li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/emails" target="_blank">emails</a></b>: sending emails via the installation</li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/errors" target="_blank">errors</a></b>: web site error pages</li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/forms" target="_blank">forms</a></b>: generating survey forms and compartmentalized input tools</li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/js" target="_blank">js</a></b>: javascript which runs lots of user experience for the SurvLoop engine</li>
        <li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/reports" target="_blank">reports</a></b>: generating reports, graphs, and geographic maps</li></ul></li></ul></li>
<li><b><a href="https://github.com/wikiworldorder/survloop/blob/master/tests" target="_blank">tests</a></b>: Holding place to remind me to add as much unit testing as possible and appropriate.</li>
</ul></div>
<h4><a href="https://github.com/wikiworldorder/survloop-libraries" target="_blank"><i class="fa fa-github mR5" aria-hidden="true"></i> wikiworldorder/survloop-libraries</a></h4>
<div class="pL20"><ul>
<li><b><a href="https://github.com/wikiworldorder/survloop-libraries/blob/master/src" target="_blank">src</a></b>: Third-party code libraries which SurvLoop incorporates.</li></ul><ul>
</ul></div>',
			'NodePromptAfter' => '<style>
#treeWrap750 { margin-top: 30px; }
ul li, ol li, .nPrompt ul li, .nPrompt ol li { margin: 0px 0px 10px -28px; }
</style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 750,
			'NodeTree' => '25',
			'NodeParentID' => '742',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 751,
			'NodeTree' => '25',
			'NodeParentID' => '750',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 752,
			'NodeTree' => '25',
			'NodeParentID' => '750',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 759,
			'NodeTree' => '25',
			'NodeParentID' => '2373',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<span class="fPerc133">[ Documentation Navigation ] hard-coded via 
SurvLoopOrg.php function printDocumentationNav, to view 
survlooporg.inc-documentation-navigation</span>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 790,
			'NodeTree' => '8',
			'NodeParentID' => '425',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 815,
			'NodeTree' => '25',
			'NodeParentID' => '2882',
			'NodeType' => 'Page Block',
			'NodePromptText' => '<br>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 858,
			'NodeTree' => '5',
			'NodeParentID' => '42',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 871,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '6',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p><br /></p>
<p><br /></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 940,
			'NodeTree' => '5',
			'NodeParentID' => '40',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>SurvLoop Origins</h3>
<p>This started as a database design system developed to plan the <a href="https://github.com/flexyourrights/openpolice">OpenPolice.org</a> web app. It was built to track through database specifications, even if the software hasn\'t been built out enough to automatically enforce the long tail of rules.</p>
<p>The app\'s co-creator Steve and I spent six months just designing the database of a few hundred possible questions which should probably be asked of victims of police misconduct. Once we finally had a grapple on what to ask, I started mocking up what the survey could look like.</p>
<p>But that too was complex enough that I incrementally started automating my survey mockup. Attracted to the usefulness of integrating a survey engine with the database design tools, and without significant funding for the project, I started building OpenPolice.org and SurvLoop.</p>
<p>I knew the data being stored would be more important than I\'m used to, so knew I need to finally build atop a trusted coding framework. I chose Laravel based on advice of friends, and WOW I\'m pleased with it!</p>
<p>The web app is now beta testing, and feedback on that project and the SurvLoop user experience can be via the end of the submission process:<br> <a href="https://openpolice.org/file-your-police-complaint" target="_blank">https://openpolice.org/file-your-police-complaint</a><br> <br>The resulting database designed using the engine, as well as the branching tree which specifies the user\'s experience: <a href="https://openpolice.org/db/OP">/db/OP</a><br> <a href="https://openpolice.org/tree/complaint">/tree/complaint</a><br><br> Among other methods, the resulting data can also be provided as XML included an automatically generated schema, eg.<br> <a href="https://openpolice.org/complaint-xml-schema">/complaint-xml-schema</a><br> <a href="https://openpolice.org/complaint-xml-example">/complaint-xml-example</a><br> <a href="https://openpolice.org/complaint-xml-all">/complaint-xml-all</a></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 984,
			'NodeTree' => '9',
			'NodeParentID' => '52',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 985,
			'NodeTree' => '9',
			'NodeParentID' => '984',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 986,
			'NodeTree' => '9',
			'NodeParentID' => '984',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 999,
			'NodeTree' => '9',
			'NodeParentID' => '2334',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '[ Documentation Navigation ] hard-coded via SurvLoopOrg.php function 
printDocumentationNav, to view survlooporg.inc-documentation-navigation<br>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1048,
			'NodeTree' => '10',
			'NodeParentID' => '60',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1049,
			'NodeTree' => '10',
			'NodeParentID' => '1048',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1050,
			'NodeTree' => '10',
			'NodeParentID' => '1048',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1081,
			'NodeTree' => '10',
			'NodeParentID' => '2312',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '[ Documentation Navigation ] hard-coded via SurvLoopOrg.php function 
printDocumentationNav, to view survlooporg.inc-documentation-navigation<br>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1340,
			'NodeTree' => '24',
			'NodeParentID' => '622',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark">Installation</h2>
<div class="p5"> </div>
<h4>1) Prep Server/Environment</h4>
<div class="row mT20"><div class="col-6">
<a href="/how-to-install-laravel-locally-on-a-mac" class="btn btn-lg btn-primary btn-block">How to install Laravel locally <nobr>with Homestead</nobr></a>
</div><div class="col-6">
<a href="/how-to-install-laravel-on-an-ubuntu-server" class="btn btn-lg btn-primary btn-block">How to install Laravel on an <nobr>Ubuntu server</nobr></a>
</div></div>
<p><br /></p>
<h4>2) Install SurvLoop</h3>
<a href="/how-to-install-survloop" class="btn btn-lg btn-xl btn-primary btn-block mT20">How to install SurvLoop</a>
<p><br /></p>
<h4>3) Configure SurvLoop</h3>
<a href="/how-to-setup-survloop" class="btn btn-lg btn-xl btn-primary btn-block mT20">How to setup SurvLoop</a>
<p>Once SurvLoop is installed, you can use it for standalone database and survey design. But the setup process does start prepping your own package which extends SurvLoop.</p>
<div class="nodeAnchor"><a id="orientation" name="orientation"></a></div>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1365,
			'NodeTree' => '10',
			'NodeParentID' => '60',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Frequently Update Ubuntu, PHP, etc</h2>
<pre>$ sudo apt-get update
$ sudo apt update && sudo apt dist-upgrade
$ sudo apt install update-manager-core
$ sudo do-release-upgrade
$ composer update
$ php artisan cache:clear</pre>
<p> To upgrade your server\'s PHP version, and ensure your code uses it...</p><p><br></p><pre>$ sudo apt-get install php7.3 php7.3-cli php7.3-common libapache2-mod-php7.3 php7.3-mysql php7.3-gd php7.3-imagick php7.3-recode php7.3-tidy php7.3-xmlrpc
$ update-alternatives --set php /usr/bin/php7.3
$ a2dismod php7.2
$ a2enmod php7.3
$ systemctl restart apache2
<p> </p></pre>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1452,
			'NodeTree' => '26',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-setup-survloop',
			'NodePromptAfter' => 'How To Setup SurvLoop After Installation::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1453,
			'NodeTree' => '26',
			'NodeParentID' => '1467',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark">How To Setup SurvLoop After Installation</h2>
<p>...</p>',
			'NodePromptAfter' => '<style> #treeWrap1466 { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1466,
			'NodeTree' => '26',
			'NodeParentID' => '1452',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1467,
			'NodeTree' => '26',
			'NodeParentID' => '1466',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1468,
			'NodeTree' => '26',
			'NodeParentID' => '1466',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1487,
			'NodeTree' => '26',
			'NodeParentID' => '2354',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<span class="fPerc133">[ Documentation Navigation ] hard-coded via 
SurvLoopOrg.php function printDocumentationNav, to view 
survlooporg.inc-documentation-navigation</span>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1524,
			'NodeTree' => '25',
			'NodeParentID' => '2883',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3 class="slBlueDark">Roadmap for Codebase<br></h3>
<p>Current plans for improving the organization and structures of the codebase...</p>
<div class="pL20"><ul>
<li>Start adding unit tests to functions and ideally whole files.</li>
<li>Break off any independent components from being within the Tree Trunk and Globals, which can instead instantiate side-classes when on demand.</li>
<li>Expand Globals from being "focused on one database and tree", to "able to load [caches of] all the database and tree structures needed for a page load.</li>
<li>Shift to PageLoadUtils being even more the core trunk of a page load, instead of the Tree Trunk.</li>
<li>Further clarify and separate the distinctions and relationships between PageLoadUtils stuff, Globals stuff, Tree Trunk stuff, and Searcher stuff.</li>
<li>Adding unit test to as many functions as possible.</li>
<li>Adding comments to the remaining functions.</li>
<li>Replace all admin tools with forms generated by SurvLoop. #SelfReplicatingGUI/CMS</li>
</ul></div>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1549,
			'NodeTree' => '25',
			'NodeParentID' => '2883',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<h3 class="slBlueDark">Client Packages</h3>
<p>A client package running atop the SurvLoop engine will automatically load client-customized extensions of these classes as well...</p>
<div class="pL20"><ul>
<li><b>Client/Client</b><br>extends<br>SurvLoop/Tree/TreeSurvForm</li>
<li><b>Client/ClientAdminMenu</b><br>extends<br>SurvLoop/Admin/AdminMenu</li>
<li><b>Client/ClientAdmin</b><br>extends<br>SurvLoop/Admin/AdminController</li>
<li><b>Client/ClientSearcher</b><br>extends<br>SurvLoop/Searcher</li>
</ul></div>
<h4>Simplest Example:</h4>
<p><a href="https://github.com/wikiworldorder/survlooporg/tree/master/src" target="_blank" class="btn btn-primary btn-block taL mB20"><i class="fa fa-github mR5" aria-hidden="true"></i> wikiworldorder/survlooporg</a></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1556,
			'NodeTree' => '25',
			'NodeParentID' => '742',
			'NodeParentOrder' => '2',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1557,
			'NodeTree' => '25',
			'NodeParentID' => '1556',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1558,
			'NodeTree' => '25',
			'NodeParentID' => '1556',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1640,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1641,
			'NodeTree' => '27',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-install-survloop-with-docker',
			'NodePromptAfter' => 'How To Install SurvLoop with Docker::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1642,
			'NodeTree' => '27',
			'NodeParentID' => '1650',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark">How To Install SurvLoop with Docker on <nobr>Ubuntu 18.04</nobr></h2>
<p>This process runs a variety of <a href="https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose" target="_blank">Digital Ocean\'s layered tutorials</a>. I don\'t understand all of it yet, so will leave the explanations to their superb articles. This variation adds SurvLoop stuff, and hopes to skip the learning curve for those uninterested in those layers of the stack. You should be able to accept the defaults, but I do update to the latest version of OpenSSH.</p>
<p>After starting up a new <b class="red">Ubuntu 18.04</b> Droplet, connect it with the root account and your SSH key. The first install script will create a non-root user, e.g. <span class="red">survuser</span>. Be sure to create and save a copy of a strong password:</p>
<pre>$ git clone https://github.com/wikiworldorder/docker-survloop.git /tmp/docker-survloop
$ mkdir /usr/local/bin/docker-survloop
$ cp /tmp/docker-survloop/bin/*.* /usr/local/bin/docker-survloop
$ chmod u+x /usr/local/bin/docker-survloop/*.*
$ /usr/local/bin/docker-survloop/survloop-install-0.sh <span class="red">survuser</span>
</pre>
<p>Then exit to logout as root, and log back in as <span class="red">survuser</span>. Your key should work, and you should have sudo power.</p>
<pre>$ exit
# ssh <span class="red">survuser</span>@<span class="red">YOUR.SERVER.IP</span>
</pre>
<h3>Now logged in as a non-root user</h3>
<pre>$ cd ~
$ sudo chmod u+x /usr/local/bin/docker-survloop/survloop-install-*.sh
$ bash /usr/local/bin/docker-survloop/survloop-install-1.sh

$ su - ${USER}

$ bash /usr/local/bin/docker-survloop/survloop-install-2.sh
$ docker-compose up -d
$ docker-compose exec app nano .env
</pre>
<p>Update the .env file for your system with a database password you can create now...</p>
<pre>DB_PASSWORD=survlooppass</pre>
<p>Add on SurvLoop package...</p>
<pre>$ bash /usr/local/bin/docker-survloop/survloop-install-3.sh
</pre>',
			'NodePromptAfter' => '<style> #treeWrap1649 { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1649,
			'NodeTree' => '27',
			'NodeParentID' => '1641',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1650,
			'NodeTree' => '27',
			'NodeParentID' => '1649',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1651,
			'NodeTree' => '27',
			'NodeParentID' => '1649',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1701,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1793,
			'NodeTree' => '27',
			'NodeParentID' => '2347',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<span class="fPerc133">[ Documentation Navigation ] hard-coded via 
SurvLoopOrg.php function printDocumentationNav, to view 
survlooporg.inc-documentation-navigation</span>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1981,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2174,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2181,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2182,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2183,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2184,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2185,
			'NodeTree' => '28',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-setup-an-ubuntu-server-on-digital-ocean',
			'NodePromptAfter' => 'How To Setup an Ubuntu Server on Digital Ocean::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2186,
			'NodeTree' => '28',
			'NodeParentID' => '2248',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark">How To Setup an Ubuntu Server on <nobr>Digital Ocean</nobr></h2>
<h4>So you can run SurvLoop on the web.</h4>
<h3>Create Your SSH Key, If You Haven\'t Already</h3>
<p>From the macOS Terminal (Applications -> Utilities) — or alternatives like <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a> — run this command</p>
<pre>ssh-keygen -t rsa</pre>
<p>Press the ENTER key to accept the default location, then enter a passphrase twice. This creates new files in your Mac User\'s folder at "~/.ssh/id_rsa.pub" and "~/.ssh/id_rsa". Run the following command to copy your key to your clipboard, for the next step:</p>
<pre>pbcopy < ~/.ssh/id_rsa.pub</pre>
<h3>Log Into Your <a href="https://www.digitalocean.com/" target="_blank" rel="noopener">Digital Ocean</a> Account.</h3>
<h3>Create a new Droplet, with a recent version of Ubuntu.</h3>
<p>The minimal memory size of 1GB is usually sufficient to get off the ground, but you can easily upgrade this later if needed.</p>
<p>If you have already setup your SSH Key with Digital Ocean before, select it. Otherwise, click the "New SSH Key" button and paste the contents of your key which was copied to your clipboard above.</p>
<p><img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-01.png" alt=""></p>
<h3>Link The Domain (optional)</h3>
<p>Go to your <a href="https://canvashost.com/" target="_blank" rel="noopener">domain registrar</a> and setup Custom DNS Servers to...</p>
<ul>
<li>ns1.digitalocean.com</li>
<li>ns2.digitalocean.com</li>
<li>ns3.digitalocean.com</li>
</ul>
<p>Then return to Digital Ocean and go to the Networking area, where you can "Add a domain":</p>
<p><img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-03.png"></p>
<p>This will bring you to the domain\'s details, where you should add DNS Records. Add two "A Records" pointing to your newly created Droplet, one for hostname "@" and one for hostname "www"...</p>
<p><img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-04.png"></p>
<h2>Connect To Your Server</h2>
<p>If your domain linkage has already propagated, you can SSH connect using your domain name instead of your server\\'s IP address in this command:</p>
<pre>ssh root@12.34.56.78</pre>
<p><a href="/how-to-install-laravel-on-an-ubuntu-server" class="btn btn-lg btn-primary btn-block taL">Next, Install Laravel on Your Ubuntu Server</a></p>',
			'NodePromptAfter' => '<style> #treeWrap2247 { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2247,
			'NodeTree' => '28',
			'NodeParentID' => '2185',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2248,
			'NodeTree' => '28',
			'NodeParentID' => '2247',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2249,
			'NodeTree' => '28',
			'NodeParentID' => '2247',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2274,
			'NodeTree' => '28',
			'NodeParentID' => '2249',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2281,
			'NodeTree' => '28',
			'NodeParentID' => '2274',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<span class="fPerc133">[ Documentation Navigation ] hard-coded via 
SurvLoopOrg.php function printDocumentationNav, to view 
survlooporg.inc-documentation-navigation</span>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2312,
			'NodeTree' => '10',
			'NodeParentID' => '1050',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2334,
			'NodeTree' => '9',
			'NodeParentID' => '986',
			'NodeType' => 'Instructions',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2347,
			'NodeTree' => '27',
			'NodeParentID' => '1651',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2354,
			'NodeTree' => '26',
			'NodeParentID' => '1468',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2373,
			'NodeTree' => '25',
			'NodeParentID' => '751',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2386,
			'NodeTree' => '5',
			'NodeParentID' => '858',
			'NodeType' => 'Instructions',
			'NodePromptText' => 'Documentation Navigation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2459,
			'NodeTree' => '24',
			'NodeParentID' => '621',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2502,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2575,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2576,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2577,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2602,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2603,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2604,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2605,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2606,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2607,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2608,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2609,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2610,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2611,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2612,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2613,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2614,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2615,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2616,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2617,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2618,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2619,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2620,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2621,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2622,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2623,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2624,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2625,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2626,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2627,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2628,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2629,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2630,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2631,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2632,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2633,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2634,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2635,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2636,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2637,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2638,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2639,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2640,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2641,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2642,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2643,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2644,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2645,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2646,
			'NodeTree' => '29',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'developer-work-flows',
			'NodePromptAfter' => 'Developer Work Flows::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2647,
			'NodeTree' => '29',
			'NodeParentID' => '2655',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>Applying Code Changes To Running Software</h3><p>If you are only testing edits to Controllers, then the above step will apply the changes. But if you make any changes to Views or Models, you will need to also re-publish those files for the extra copies needed.</p><p>So you will very often need this command run from your project\'s root:</p><pre>$ php artisan vendor:publish --force
or
$ echo "0" | php artisan vendor:publish --force</pre><p>If you wanted, you could add this to the shell script and run it any time.<br></p>',
			'NodePromptAfter' => '<style> #node2654kids { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2654,
			'NodeTree' => '29',
			'NodeParentID' => '2646',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2655,
			'NodeTree' => '29',
			'NodeParentID' => '2654',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2656,
			'NodeTree' => '29',
			'NodeParentID' => '2654',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2681,
			'NodeTree' => '29',
			'NodeParentID' => '2701',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '[ Documentation Navigation ] hard-coded via SurvLoopOrg.php function printDocumentationNav, to view survlooporg.inc-documentation-navigation<br>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2694,
			'NodeTree' => '29',
			'NodeParentID' => '2655',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>Copying Code Updates Into Place<br></h3>I like to keep my repositories connected to GitHub in a separate directory from the full Laravel installation, etc. So I keep a shell script handy to copy updates from my working directory to the local virtual server, e.g. <i>repopush.sh</i>:<br><pre>$ #!/bin/bash
set -x
cp -r ~/repos/survloop/src ~/homestead/code/survloop/vendor/wikiworldorder/survloop/
cp -r ~/repos/survlooporg/src ~/homestead/code/survloop/vendor/wikiworldorder/survlooporg/
</pre><p>So each time I make edits to the code base, I run this script:</p><pre>sh ~/repos/repopush.sh</pre>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2701,
			'NodeTree' => '29',
			'NodeParentID' => '2656',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2762,
			'NodeTree' => '27',
			'NodeParentID' => '2769',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p><h2 class="slBlueDark">How To Install SurvLoop with Docker<nobr></nobr></h2>
<h3 class="dropdown-item">This process currently relies on <a href="https://laradock.io/" target="_blank">Laradock</a></h3><p>But I would love some help creating a proper Dockerfile, etc. This is as far as I got: <a href="https://github.com/flexyourrights/docker-openpolice/" target="_blank">https://github.com/flexyourrights/docker-openpolice/</a><br></p><hr>The following instructions are copied from <a href="https://github.com/wikiworldorder/survloop" target="_blank">github.com/wikiworldorder/survloop</a>.</p><p>First, <a href="https://www.docker.com/get-started" target="_blank">install Docker</a> on Mac, Windows, or an online server. 
Then grab a copy of Laravel (last tested with v5.8.3)...
<pre>$ git clone https://github.com/laravel/laravel.git survloop
$ cd survloop
</pre>
<p>Next, install and boot up Laradock (last tested with v7.14).</p>
<pre>$ git submodule add https://github.com/Laradock/laradock.git
$ cd laradock
$ cp env-example .env
$ docker-compose up -d nginx mysql phpmyadmin redis workspace
</pre>
<p>After Docker finishes booting up your containers, enter the mysql container with the root password, "root". This seems to fix things for the latest version of MYSQL.</p>
<pre>$ docker-compose exec mysql bash
# mysql --user=root --password=root default
mysql&gt; ALTER USER \'default\'@\'%\' IDENTIFIED WITH mysql_native_password BY \'secret\';
mysql&gt; exit;
$ exit
</pre>
<p>At this point, you can optionally browse to <a href="http://localhost:8080" target="_blank">http://localhost:8080</a> for PhpMyAdmin.</p>
<pre>Server: mysql
Username: default
Password: secret
</pre>
<p>Finally, enter Laradock\'s workspace container to download and run the Open Police installation script.
</p><pre>$ docker-compose exec workspace bash
# git clone https://github.com/wikiworldorder/docker-survloop.git
# chmod +x ./docker-survloop/bin/*.sh
# ./docker-survloop/bin/survloop-laradock-postinstall.sh
</pre>
<p>And if all has gone well, you\'ll be asked to create a master admin user account when you browse to <a href="http://localhost/" target="_blank">http://localhost/</a>. If it loads, but looks janky (without CSS), reload the page once... and hopefully it looks like a fresh install.</p><p class="slGrey">Updated April 25, 2019<br></p></p>',
			'NodePromptAfter' => '<style> #treeWrap1649 { margin-top: 30px; } </style>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2769,
			'NodeTree' => '27',
			'NodeParentID' => '1650',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2842,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2843,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2850,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2881,
			'NodeTree' => '25',
			'NodeParentID' => '742',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2882,
			'NodeTree' => '25',
			'NodeParentID' => '2881',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2883,
			'NodeTree' => '25',
			'NodeParentID' => '2881',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2950,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2951,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2952,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2953,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2954,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2955,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2956,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2957,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2958,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2959,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2960,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2961,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2962,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2963,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2964,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2965,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2966,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2967,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2968,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2969,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2970,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2971,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2972,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2973,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2974,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2975,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2976,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2977,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2978,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2979,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2980,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2981,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2982,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2983,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2984,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2985,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2986,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2987,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2988,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2989,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2990,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2991,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2992,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2993,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2994,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2995,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2996,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2997,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2998,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2999,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3000,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3001,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3002,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3003,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3004,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3005,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3006,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3007,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3008,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3009,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3010,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3011,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3012,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3013,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3014,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3015,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3016,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3017,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3018,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3019,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3020,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3021,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3022,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3023,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3024,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3025,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3026,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3027,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3028,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3029,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3030,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3031,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3032,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3033,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3034,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3035,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3036,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3037,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3038,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3039,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3040,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3041,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3042,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3043,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3044,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3045,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3046,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3047,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3048,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3049,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3050,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3051,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3052,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3053,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3054,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3055,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3056,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3057,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3058,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3059,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3060,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3061,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3062,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3063,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3064,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3065,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3066,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3067,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3068,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3069,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3070,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3071,
			'NodeTree' => '8',
			'NodeParentID' => '423',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3 class="slBlueDark">2. Install Laravel</h3><pre>$ cd ~/homestead<br>$ mkdir code
$ cd code
$ composer create-project laravel/laravel survloop "5.8.*"<br>$ cd survloop
</pre>
<p>Edit the environment file to connect the default MYSQL database:</p>
<pre>$ nano .env</pre>
<pre>DB_DATABASE=homestead<br>DB_USERNAME=homestead<br>DB_PASSWORD=secret</pre>
<p>You could do things like install Laravel\'s out-of-the-box user authentication tools, and push the vendor file copies where they need to be:
</p><pre>$ php artisan make:auth<br>$ echo "0" | php artisan vendor:publish --tag=laravel-notifications</pre>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3072,
			'NodeTree' => '8',
			'NodeParentID' => '423',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3 class="slBlueDark">1. Install Homestead</h3><h4>Locally On A Mac<br></h4><b>Replace all references to "survloop" with a short name for your own project.</b>
<p></p><p></p><ol><li>Install <a href="https://apps.apple.com/us/app/xcode/id497799835" target="_blank">XCode from the App Store</a>. Open it, and accept the user agreement.</li><li>Install VirtualBox: <a href="https://www.virtualbox.org/wiki/Downloads" target="_blank" rel="noopener">https://www.virtualbox.org/wiki/Downloads</a></li><li>Install Vagrant: <a href="https://www.vagrantup.com/downloads.html" target="_blank" rel="noopener">https://www.vagrantup.com/downloads.html</a></li><li>To the command line (Mac OS Terminal, or <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a>)! Create local ssh key, if you haven\'t on this computer before:
<pre>$ ssh-keygen -t rsa -C "your@emailaddress.com"</pre>
</li><li>Install Composer, Homestead, and initialize. For this example, the
 work area\'s directory is "~/web", but you can adjust it as needed:<br><pre>$ <code class=" language-php">vagrant box add laravel<span class="token operator">/</span>homestead<br></code>$ curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer  
$ cd ~/
$ git clone https://github.com/laravel/homestead.git homestead<code class=" language-php"></code>
$ cd homestead<br><code class=" language-php">$ </code><code class=" language-php">git checkout release</code>
$ bash init.sh</pre>
<p>&nbsp;</p>
</li><li>Edit paths in Homestead.yaml:
<pre>$ nano Homestead.yaml</pre>
<em>Change the folders and sites</em><em> to:</em>
<pre>folders: 
    - map: ~/homestead/code
      to: /home/vagrant/code

sites:
    - map: survloop.local
      to: /home/vagrant/code/survloop/public</pre>
<p>&nbsp;</p>
</li><li>Auto-add project(s) to the the /etc/hosts file:
<pre>$ <span class="comment-copy"><code>vagrant plugin install vagrant-hostsupdater</code></span></pre><p><br></p>

</li></ol><p></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3073,
			'NodeTree' => '8',
			'NodeParentID' => '423',
			'NodeParentOrder' => '5',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p class="slGrey">Updated: November 7, 2019</p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3074,
			'NodeTree' => '25',
			'NodeParentID' => '815',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p></p>
	<hr>
		<p></p>
		<p>
			<b class="slBlueDark">The Tree Trunk</b> is the single largest block of the engine which generates all the surveys and pages for SurvLoop...
	
		</p>
		<div class="pL20">
			<ul>
				<li>
					<b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeNodeSurv.php" target="_blank">Tree/TreeNodeSurv</a></b>
					<ul>
						<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeNodeCore.php" target="_blank">Tree/TreeNodeCore</a></li>
					</ul>
				</li>
				<li>
					<b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvAdmin.php" target="_blank">Tree/TreeSurvAdmin</a></b>
					<ul>
						<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvNodeEdit.php" target="_blank">Tree/TreeSurvNodeEdit</a>
						
							<ul>
								<li>extends <b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvForm.php" target="_blank">Tree/TreeSurvForm</a></b>
								
									<ul>
										<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvFormUtils.php" target="_blank">Tree/TreeSurvFormUtils</a>
										
											<ul>
												<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvFormLoops.php" target="_blank">Tree/TreeSurvFormLoops</a>
												
													<ul>
														<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvFormVarieties.php" target="_blank">Tree/TreeSurvFormVarieties</a>
														
															<ul>
																<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/UserProfile.php" target="_blank">Tree/UserProfile</a>
																
																	<ul>
																		<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvInput.php" target="_blank">Tree/TreeSurvInput</a>
																		
																			<ul>
																				<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvUpload.php" target="_blank">Tree/TreeSurvUpload</a>
																				
																					<ul>
																						<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurv.php" target="_blank">Tree/TreeSurv</a>
																						
																							<ul>
																								<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvReport.php" target="_blank">Tree/TreeSurvReport</a>
																								
																									<ul>
																										<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvBasicNav.php" target="_blank">Tree/TreeSurvBasicNav</a>
																										
																											<ul>
																												<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvProgBar.php" target="_blank">Tree/TreeSurvProgBar</a>
																												
																													<ul>
																														<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvLoad.php" target="_blank">Tree/TreeSurvLoad</a>																														
																															<ul>
																																<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvConds.php" target="_blank">Tree/TreeSurvConds</a>
																																
																																	<ul>
																																		<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvAPI.php" target="_blank">Tree/TreeSurvAPI</a>
																																		
																																			<ul>
																																				<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeCoreSess.php" target="_blank">Tree/TreeCoreSess</a>
																																				
																																					<ul>
																																						<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeCore.php" target="_blank">Tree/TreeCore</a>
																																						
																																							<ul>
																																								<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/SurvLoopController.php" target="_blank">SurvLoopController</a></li>
																																							</ul>
																																						</li>
																																					</ul>
																																				</li>
																																			</ul>
																																		</li>
																																	</ul>
																																</li>
																																<li>instantiates <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/SurvData.php" target="_blank">Tree/SurvData</a>
																																
																																	<ul>
																																		<li>instantiates <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/SurvDataTestsAB.php" target="_blank">SurvDataTestsAB</a></li>
																																	</ul>
																																</li>
																															</ul>
																														</li>
																													</ul>
																												</li>
																											</ul>
																										</li>
																									</ul>
																								</li>
																							</ul>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<p></p>
		<hr>
			<p></p>
			<p>
				<b>The Stats Engine</b> is hopefully most often called by a tree...
		
			</p>
			<div class="pL20">
				<ul>
					<li>
						<b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Stats/SurvStatsGraph.php" target="_blank">Stats/SurvStatsGraph</a></b>
						<ul>
							<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Stats/SurvStatsChart.php" target="_blank">Stats/SurvStatsChart</a>
							
								<ul>
									<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Stats/SurvStats.php" target="_blank">Stats/SurvStats</a>
									
										<ul>
											<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Stats/SurvStatsCache.php" target="_blank">Stats/SurvStatsCache</a>
											
												<ul>
													<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Stats/SurvStatsFilts.php" target="_blank">Stats/SurvStatsFilts</a>
													
														<ul>
															<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Stats/SurvStatsCore.php" target="_blank">Stats/SurvStatsCore</a></li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Stats/SurvTrends.php" target="_blank">S</a></b><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Stats/SurvTrends.php" target="_blank">tats/SurvTrends</a></b>
						<ul>
							<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Stats/SurvStatsCore.php" target="_blank">Stats/SurvStatsCore</a></li>
						</ul>
					</li>
				</ul>
			</div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3075,
			'NodeTree' => '25',
			'NodeParentID' => '815',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark">Structure of Classes &amp; Objects</h2>
<p>This section provides a top-level map of the 
	
	<b>Controllers folder</b>, and how its most influential classes and objects relate to each other.

</p>
<p>Some of these long chains of extensions were simply steps toward 
breaking up long files. I hope to keep splitting out functions into more isolated classes which 
don\'t need to load in the main trunks.</p><p>I am also of course welcome to migrating to different design patterns when there is time or necessity.<br></p>
<p><img src="/survloop/uploads/documentation-page-load-trunks-diagram.jpg" class="w100" border="0"></p>
			
			<hr>
			
			<p><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/SurvLoopController.php" target="_blank" class="slBlueDark"><b>SurvLoopController</b></a></p>
			<div class="pL20"><ul><li>instantiates 
				
					<a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Searcher.php" target="_blank"><b>Searcher</b></a>
				</li><li>instantiates 
				
					<a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/Globals.php" target="_blank"><b>Globals</b></a>
				</li><li>instantiates 
				
				   <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvForm.php" target="_blank"><b>Tree Trunk</b> (client or TreeSurvForm)</a>
			
				</li><li>extends Controller</li></ul></div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3076,
			'NodeTree' => '25',
			'NodeParentID' => '815',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<hr>

<p>
	<b class="slBlueDark">Routes</b> are largely directed through...

</p>
<div class="pL20">
	<ul>
	<li>
		<b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/SurvLoop.php" target="_blank">SurvLoop.php</a></b>
		<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/SurvCustLoop.php" target="_blank">SurvCustLoop</a>
			<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/PageLoadUtils.php" target="_blank">PageLoadUtils</a></li></ul>
		</li></ul>
	</li><li>
		<b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Admin/AdminController.php" target="_blank">Admin/AdminController</a></b>
		<ul>
			<li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Admin/AdminEmailController.php" target="_blank">Admin/AdminEmailController</a>
				<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Admin/AdminCoreController.php" target="_blank">Admin/AdminCoreController</a>
					<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/SurvLoopController.php" target="_blank">SurvLoopController</a></li></ul>
				</li></ul>
			</li>
			<li>instantiates <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/PageLoadUtils.php" target="_blank">PageLoadUtils</a></li>
		</ul>
	</li><li>
		<a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Admin/AdminDatabaseInstall.php" target="_blank">Admin/AdminDatabaseInstall</a>
		<ul><li>extended by <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Admin/AdminDBController.php" target="_blank">Admin/AdminDBController</a>
			<ul><li>extended by <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Admin/AdminController.php" target="_blank">Admin/AdminController</a></li></ul>
		</li></ul>
	</li><li>
		<a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Admin/AdminTreeController.php" target="_blank">Admin/AdminTreeController</a>
		<ul><li>extended by <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Admin/AdminController.php" target="_blank">Admin/AdminController</a></li><li>instantiates <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvAdmin.php" target="_blank">Tree/TreeSurvAdmin</a></li></ul>
	</li>
	</ul>
</div>
<p>Down the line, I hope to replace <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/AdminDBController.php" target="_blank">AdminDBController</a> and 
<a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/AdminTreeController.php" target="_blank">AdminTreeController</a> with admin-only SurvLoop-generated forms. And all 
other admin tools.</p>

<hr>
	
	<p>
		<b class="slBlueDark">The Globals</b> object is loaded into 
$GLOBALS["SL"] and primarily provides lookups and tools to be accessible
 from both Controllers and Views...

	</p>
	<div class="pL20">
		<ul><li>
				<b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/Globals.php" target="_blank">G</a></b><b><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsImportExport.php" target="_blank">lobals/G</a><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/Globals.php" target="_blank">lobals</a></b>
				<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsImportExport.php" target="_blank">Globals/GlobalsImportExport</a>
					
						<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsTables.php" target="_blank">G</a><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsImportExport.php" target="_blank">lobals/G</a><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsTables.php" target="_blank">lobalsTables</a>
								<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsElements.php" target="_blank">G</a><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsImportExport.php" target="_blank">lobals/G</a><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsElements.php" target="_blank">lobalsElements</a>
									<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsCache.php" target="_blank">G</a><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsImportExport.php" target="_blank">lobals/G</a><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsCache.php" target="_blank">lobalsCache</a>
										<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsBasic.php" target="_blank">G</a><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsImportExport.php" target="_blank">lobals/G</a><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsBasic.php" target="_blank">lobalsBasic</a>
											<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsVars.php" target="_blank">G</a><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsImportExport.php" target="_blank">lobals/G</a><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsVars.php" target="_blank">lobalsVars</a>
												<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GlobalsStatic.php" target="_blank">GlobalsStatic</a></li></ul>
												</li></ul>
											</li></ul>
										</li></ul>
									</li></ul>
							</li></ul>
					</li><li>instantiates <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/Geographs.php" target="_blank">Geographs</a>
						<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GeographyLookups.php" target="_blank">GeographyLookups</a>
							<ul><li>extends <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Globals/GeographyLists.php" target="_blank">GeographyLists</a></li></ul>
							</li></ul>
					</li></ul>
			</li></ul>
	</div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3077,
			'NodeTree' => '25',
			'NodeParentID' => '1557',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>Updated October 25, 2019</p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3078,
			'NodeTree' => '24',
			'NodeParentID' => '622',
			'NodeParentOrder' => '3',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p class="slGrey">Updated November 6, 2019</p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3079,
			'NodeTree' => '29',
			'NodeParentID' => '2655',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Suggested SurvLoop Developer Work Flows</h2>
<p>First, my first few projects on GitHub haven\'t had much interaction yet, and I am new to the community. <a href="https://github.com/wikiworldorder" target="_blank">Please contact me</a> if you\'ve got any key changes I should focus on to better invite contributions. Constructive criticism is warmly welcome.</p>
<iframe src="https://www.youtube.com/embed/iqbhtNdXhso" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="100%" height="315" frameborder="0"></iframe>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3080,
			'NodeTree' => '29',
			'NodeParentID' => '2655',
			'NodeParentOrder' => '4',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p class="slGrey">Updated: November 7, 2019<br></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3081,
			'NodeTree' => '29',
			'NodeParentID' => '2655',
			'NodeParentOrder' => '3',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>Updating System JS & CSS</h3>
<p>To test changes to system-level JS and CSS files, after running the above command, you\'ll have either load these pages in the browser or the command line:</p><pre>$ curl http://openpolice.local/css-reload</pre><p>... or saving the System Settings page, or forcing its refresh will also regenerate the system JS and CSS files:<br>
<a href="http://openpolice.local/dashboard/settings?refresh=1" target="_blank">http://openpolice.local/dashboard/settings?refresh=1</a></p><p>The button at the top-right corning of that System Settings page will do a deeper refresh of all Trees\' Javascript files, and might be needed after install, or big Tree changes:<br><a href="http://openpolice.local/dashboard/settings?refresh=2" target="_blank">http://openpolice.local/dashboard/settings?refresh=2</a></p><p>That will rewrite some key files (called on most pages) which will need to be refreshing in your browser:<br>
<a href="http://openpolice.local/sys2.min.js" target="_blank">http://openpolice.local/sys2.min.js</a><br>
<a href="http://openpolice.local/sys2.min.css" target="_blank">http://openpolice.local/sys2.min.css</a><br>
...and/or use your browser\'s hard refresh for the page your working on.</p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3082,
			'NodeTree' => '30',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-a-basic-page-loads-with-survloop',
			'NodePromptAfter' => 'How A Basic Page Loads With SurvLoop::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3083,
			'NodeTree' => '30',
			'NodeParentID' => '3085',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>How A Basic Page Loads With SurvLoop<br></h2>
<p>This will go over some key paths in which a visitor\'s request travels through the codebase. Hopefully, you won\'t need to deal with these spots too often — unless you\'re helping make them better. But it is important to be able to track the main flows of the code.</p>
<iframe src="https://www.youtube.com/embed/J1NNXr6dtuI" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="100%" height="315" frameborder="0"></iframe>',
			'NodePromptAfter' => '<style>
#node3084kids { margin-top: 30px; }
</style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3084,
			'NodeTree' => '30',
			'NodeParentID' => '3082',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3085,
			'NodeTree' => '30',
			'NodeParentID' => '3084',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3086,
			'NodeTree' => '30',
			'NodeParentID' => '3084',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3087,
			'NodeTree' => '30',
			'NodeParentID' => '3086',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3088,
			'NodeTree' => '30',
			'NodeParentID' => '3087',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '[ Documentation Navigation ] hard-coded via SurvLoopOrg.php function printDocumentationNav, to view survlooporg.inc-documentation-navigation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3089,
			'NodeTree' => '30',
			'NodeParentID' => '3085',
			'NodeParentOrder' => '4',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p class="slGrey">Updated: November 7, 2019<br></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3090,
			'NodeTree' => '30',
			'NodeParentID' => '3085',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3 class="slBlueDark">This Page: /how-a-basic-page-loads-with-survloop</h3>
<p>When you loaded this page, the server asks Laravel what to give you. During installation, the SurvLoopServiceProvider taught it to check the file:</p><pre>/survloop/src/Routes/routes.php</pre><p>...which includes routes-slug.php, and will find a match here:</p><pre>Route::get( 
    \'/{pageSlug}\',
    $path . \'SurvLoop@loadPageURL\'
);</pre><p>This points to the class <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/SurvLoop.php" target="_blank">SurvLoop\Controllers\SurvLoop, found in the file /survloop/src/Controllers/SurvLoop.php</a>.</p><p>The function is also named in the route, which always receives the <a href="https://laravel.com/api/5.8/Illuminate/Http/Request.html" target="_blank">Request</a> with GET, POST parameters, and more. In this case, only one more parameter is passed in as "common-code-routes-and-paths":<br></p><pre>...<br>public function loadPageURL(Request $request, $pageSlug = \'\', $cid = 0, $view = \'\', $skipPublic = false)<br>{<br>    $redir = $this-&gt;chkPageRedir($pageSlug);<br>    if ($redir != $pageSlug) {<br>        redirect($redir, 301);<br>    }<br>    if ($this-&gt;loadTreeBySlug($request, $pageSlug, \'Page\')) {<br>        $this-&gt;loadLoop($request);<br>...<br></pre><p>This function first checks to see if this URL slug matches a redirect. If not, it will call other functions to find this page\'s slug in the SL_Trees table of the database, and check access permissions. </p><p>But whatever happens, this function returns this page back to you, the site visitor.<br></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3091,
			'NodeTree' => '30',
			'NodeParentID' => '3085',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3 class="slBlueDark">How SurvLoop Loads This Page Tree<br></h3>
<p>Now that we\'ve clarified how we got from a URL to the code base, let\'s go over the current loading process for this page. <b>Pages</b> and <b>Surveys</b> are stored and generated as branching <b>Trees</b> full of <b>Nodes</b>. Surveys are therefore loaded in a very similar way.<br></p><p>After matching the URL slug with a Page\'s Tree record, the <i>loadTreeBySlug</i> function called above will load <a href="/package-files-folders-classes#n3076" target="_blank">The Globals Trunk</a> by calling <i>syncDataTrees</i>:</p><pre>public function syncDataTrees(Request $request, $dbID = 1, $treeID = 1)
{
    $this-&gt;dbID = $dbID;
    $this-&gt;treeID = $treeID;
    $GLOBALS["SL"] = new Globals($request, $dbID, $treeID, $treeID);
    return true;
}</pre><p>$GLOBALS["SL"] now contains look-ups for the whole client database design, and universal access to some common data and utility function. This can be particularly useful when access is needed both in Controllers and deeply nested Views.<br></p><p>Next, <i>loadLoop</i> creates the client extension of the main SurvLoop engine. This site\'s custom abbreviation is \'SurvLoopOrg\', so it searches for a class at SurvLoopOrg\Controllers\SurvLoopOrg.<br></p><pre>public function loadLoop(Request $request, $skipSessLoad = false)
{
    $this-&gt;loadAbbr();
    $class = "SurvLoop\\Controllers\\Tree\\TreeSurvForm";
    if ($this-&gt;custAbbr != \'SurvLoop\') {
        $custClass = $this-&gt;custAbbr . "\\Controllers\\" . $this-&gt;custAbbr . "";
        if (class_exists($custClass)) {
            $class = $custClass;
        }
    }<br>    eval("\$this-&gt;custLoop = new " . $class . "("<br>        . "\$request, "<br>        . "-3, "<br>        . $this-&gt;dbID . ", "<br>        . $this-&gt;treeID . ", "<br>        . (($skipSessLoad) ? "true" : "false") <br>        . ");"<br>    );
    return true;
}</pre><p>It finds it at <a href="https://github.com/wikiworldorder/survlooporg/blob/master/src/Controllers/SurvLoopOrg.php" target="_blank">/survlooporg/src/Controllers/SurvLoopOrg.php</a>, which extends <a href="/package-files-folders-classes#n3074" target="_blank">SurvLoop\Controllers\Tree\TreeSurvForm</a>. It loads this <a href="/package-files-folders-classes#n3074" target="_blank">primary Tree Trunk</a> of the code base, with customizable extensions, passing in the page\'s Tree ID and the Database ID (1). </p><div class="alert alert-info fade in alert-dismissible show" style="padding: 10px 15px;">Currently, the Database ID is almost always #1, representing the primary client/installation-specific database. Database ID #3 is reserved for the database design of the SurvLoop engine itself (meta).<br></div><p>Next in <i>loadPageURL</i>, we check for a cache of this page (because it is a simple one without dynamic content). Odds are that you got the cache this page load. Good for you!</p><p>But that cache was created on-demand from another visitor\'s page load, where it called <a href="/package-files-folders-classes#n3074" target="_blank">The Tree Trunk</a>\'s <i>index</i> function:</p><pre>$this-&gt;pageContent = $this-&gt;custLoop-&gt;index($request);</pre><p>...which starts diving in closer to meat and potatoes of the branching tree managed by <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurv.php" target="_blank">TreeSurv.php</a>.</p><pre>public function index(Request $request, $type = \'\', $val = \'\')
{
    $this-&gt;survLoopInit($request, \'\');<br>    ...<br>    $this-&gt;v["content"] = $this-&gt;printTreePublic(); <br>    ...</pre><p>The <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/SurvLoopController.php" target="_blank"><i>survLoopInit</i> function is found in the root level SurvLoopController</a>, and initializes data related to the current user, potentially relevant page load variables, and site navigation. <b>It also makes a call to <i>initExtra($request)</i>. This can be written in the client extension <a href="https://github.com/wikiworldorder/survlooporg/blob/master/src/Controllers/SurvLoopOrg.php" target="_blank">SurvLoopOrg.php</a> </b><b>to inject any additional initialization needed.</b></p><p>The <i>printTreePublic</i> function will traverse the Page Tree\'s branching nodes and call <i>printNodePublic</i> for each (also in <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurv.php" target="_blank">TreeSurv.php</a>), compiling a finished output as it goes. Much of this engine\'s power executes within this traversal. <br></p><p>Back in the <i>index</i> function, the main page content has now been fully loaded into a variable of <a href="/package-files-folders-classes#n3074" target="_blank">The Tree Trunk</a>, $this-&gt;v, which is primarily used for data that needs to be passed into <a href="https://github.com/wikiworldorder/survloop/tree/master/src/Views" target="_blank">Views</a>. </p>The main body content is scraped once more for Javascript and CSS, to be consolidated and minified in separate resource files. Finally, it is pumped into <a href="https://github.com/wikiworldorder/survloop/blob/master/src/Views/master.blade.php" target="_blank">the highest-level master View with the HTML for general site structure, navigation layout, etc</a>.<br><pre>...<br>$this-&gt;v["content"] = $GLOBALS["SL"]-&gt;pullPageJsCss(
    $this-&gt;v["content"], 
    $this-&gt;coreID
);<br>...<br>return $GLOBALS["SL"]-&gt;swapSessMsg(<br>    view(\'vendor.survloop.master\', $this-&gt;v)-&gt;render()<br>);<br></pre><p>Finally, we have generated the full HTML, JS, and CSS for this page. Since this is a simple static page, it is cached, but for only the current viewer\'s permission level.<br></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3092,
			'NodeTree' => '30',
			'NodeParentID' => '3085',
			'NodeParentOrder' => '3',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3 class="slBlueDark">Customizing How Specific Nodes Are Printed</h3>
<p>Withing each branching Tree, each Node can be customized on the hard-coded level. With fresh SurvLoop installations, the first customization needed is often a Node that needs more complex data interpretation output beyond what SurvLoop\'s engine currently handles by default.</p><p>This Page\'s right column has a Node which just wraps its children in a 
\'card\' (boxes with little shadows around). It\'s child, Node #3088, is 
hard-coded in the SurvLoopOrg package. This process is shared by many other nodes throughout the public Pages for navigation of the documentation area of the website. <br></p><pre>protected function customNodePrint($nID = -3, $tmpSubTier = [], $nIDtxt = \'\', $nSffx = \'\', $currVisib = 1)
{
    if (in_array($nID, [641, 2386, 441, 759, 999, 1081, 1793, 2281, 2681, 3088])) {
        return $this-&gt;printDocumentationNav($nID);
    }
    return \'\';
}</pre><p>Within the <i><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvForm.php" target="_blank">printNodePublic </a></i><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvForm.php" target="_blank">function mentioned above, there is a check for customization function called </a><i><a href="https://github.com/wikiworldorder/survloop/blob/master/src/Controllers/Tree/TreeSurvForm.php" target="_blank">customNodePrint</a></i>. By creating this function in the client/installation package, a developer can bust out as much complexity as they like.</p><p>Surveys make use of a parallel function, <i>postNodePublicCustom</i>, to customize how user responses are stored in the database, when a page within Survey is submitted.<br></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3093,
			'NodeTree' => '31',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'introduction-to-survloop-codebase',
			'NodePromptAfter' => 'Introduction to the SurvLoop Codebase::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3094,
			'NodeTree' => '31',
			'NodeParentID' => '3096',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>What Is SurvLoop?</h2>
<iframe src="https://www.youtube.com/embed/iONuYhs3X2M" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="100%" height="315" frameborder="0"></iframe>
<h3 class="slBlueDark">Open Data Engine Origins</h3>
<p>SurvLoop began as database design software based upon recommendations presented in <a href="http://www.amazon.com/gp/product/0321884493/" target="_blank">Database Design for Mere Mortals: A Hands-On Guide to Relational Database Design (3rd Edition), by Michael J. Hernandez</a>. These web-based tools to document <b>database tables</b> and <b>field specifications</b> were used for six months to <a href="https://openpolice.org/db/OP" target="_blank">design a database</a> perhaps close to the complexity of TurboTax®.</p><p>SurvLoop can export MYSQL and Laravel Migration files to install <a href="/db/SLI" target="_blank">the designed database</a>. It\'s worth noting that the field specifications are very thorough, but only some of the details are currently enforced when auto-installing the tables through SurvLoop.<br></p><p>Then we wanted to start prototyping the system, looked around at open source options, and couldn\'t find any we could trust would have most of the features we would need. So I began prototyping what the survey might look like, and couldn\'t help but start generalizing the algorithm. So the database design engine now had a related <a href="https://openpolice.org/tree/complaint" target="_blank">multi-page-survey</a>-generation engine. </p>
<h3 class="slBlueDark">Branching Trees Create Content</h3>
<img src="http://survloop.local/survloop/uploads/branching-tree.png" class="pull-right w33" border="0">
<p>The survey specifications are stored in branching trees, similar to a "choose your own adventure" book. 
    The spots where branches (or paths) separate from each other are often called 
    <a href="https://en.wikipedia.org/wiki/Tree_%28data_structure%29" target="_blank"><b>nodes</b></a>.
    Most nodes in this tree represent either a single question to ask the user, instructions, or a <nobr>page</nobr> which groups multiple child questions on one screen.
    </p><p>
    Some nodes have children that respond to certain user choices by revealing more questions on the page. Many options are provided when editing a node, and most questions can be 
    easily set up to automatically store user responses to a specific field in the database.
    </p><p>
    A few nodes are "branches" which wrap multiple pages 
    and/or sub-branches, and are used more internally to define main sections and subsections of the entire process. 
    These often help define the navigation menu provided for the user.
    </p><p>
    Some nodes are marked as the root node of a loop. 
    The children of a loop\'s root node will loop through multiple records of one collection of data. They serve one or 
    more questions, pages, or whole branches, for each record. They can be set up to allow the user to add new records 
    as part of that process, or cycle through previously entered data sets.
    </p><p>The admin interfaces for managing these trees have not yet been given much improvement. But in the map of each tree, the left side previews the meat of what the user will see, 
    and the right side shows where the response is stored into the database design. </p><p>The public-facing survey generation aspects of the code base have been the most heavily tested, developed, and polished. One long-term goal is to replace all of SurvLoop\'s admin tools with SurvLoop-generated forms and reports. It would be very cool to evolve it all the way into a self-replicating GUI.<br></p><h3 class="slBlueDark">Content Management System (CMS)<br></h3><p>There was a need for creating super simple static pages like for a privacy policy directly tied to the survey. We could\'ve hosted it elsewhere, but it became clear how easy it would be to reuse the survey-generator to produce simpler pages.<br></p><p>The infrastructure was also already in place to print reports for the data collected, with the help of the same database design specifications. And so, SurvLoop\'s mission crept into including more features offered by any CMS, though many of these features aren\'t terribly evolved or polished yet.<br></p><p>Currently, you need to be a web developer to effectively install and manage software powered by SurvLoop. Within another five years, hopefully, all the core functionality to create and manage an open data web app will be easy enough for the common modern mind.</p><h3 class="slBlueDark">SurvLoop vs Client Installations</h3><p>On its own, you could install SurvLoop and only use it to design a database and document its specifications. You could generate MYSQL commands to create all the tables. You could also use all of the survey and reporting features that are already built into SurvLoop.</p><p>But if you want to get more advanced, you\'ll want to create a client/custom installation that extends the SurvLoop package and engine. This includes extended versions of the main tree-traversing area of the codebase, admin area, and data searching functionality. </p><p>For example, it also allows you to override specific nodes within any branching tree in your system. This way you can get as complicated as you want with both your logic and presentation.</p><p>So that\'s how we got here, and other documentation will help introduce you to more specific aspects of SurvLoop, an open data engine used to create, fill, and share complex databases. Thanks so much!<br></p><p class="slGrey">Updated: Nov 10, 2019<br></p>',
			'NodePromptAfter' => '<style> #node3095kids { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3095,
			'NodeTree' => '31',
			'NodeParentID' => '3093',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3096,
			'NodeTree' => '31',
			'NodeParentID' => '3095',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '8'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3097,
			'NodeTree' => '31',
			'NodeParentID' => '3095',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3098,
			'NodeTree' => '31',
			'NodeParentID' => '3097',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3099,
			'NodeTree' => '31',
			'NodeParentID' => '3098',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => '<p><span class="fPerc133">[ Documentation Navigation ] hard-coded via 
SurvLoopOrg.php function printDocumentationNav, to view 
survlooporg.inc-documentation-navigation</span></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3100,
			'NodeTree' => '32',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'Requests'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3101,
			'NodeTree' => '32',
			'NodeParentID' => '3100',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'describe',
			'NodePromptAfter' => 'Describe Your Open Data Request::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3102,
			'NodeTree' => '32',
			'NodeParentID' => '3100',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'redirect',
			'NodePromptAfter' => 'Complete - Redirect::M::::M::::M::'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3103,
			'NodeTree' => '32',
			'NodeParentID' => '3102',
			'NodeType' => 'Instructions Raw',
			'NodePromptText' => 'Thanks! Redirecting ...'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3104,
			'NodeTree' => '32',
			'NodeParentID' => '3101',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark">What data would like someone to collect and share with the world?</h2>
<p>Maybe someone can build it.</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3105,
			'NodeTree' => '32',
			'NodeParentID' => '3101',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'What could be a <b>title</b> for the database you are envisioning?',
			'NodeDataStore' => 'Requests:ReqTitle',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3106,
			'NodeTree' => '32',
			'NodeParentID' => '3101',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'Describe your database concept in as much detail as your currently have:',
			'NodeDataStore' => 'Requests:ReqDescription',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3107,
			'NodeTree' => '32',
			'NodeParentID' => '3101',
			'NodeParentOrder' => '3',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Are you a coder?',
			'NodeDataStore' => 'Requests:ReqIsCoder'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3108,
			'NodeTree' => '32',
			'NodeParentID' => '3107',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which of these skills do you already work with, if any?',
			'NodeResponseSet' => 'Definition::SurvLoop Coder Skills',
			'NodeDataStore' => 'RequestSkills:ReqSklSkill'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3109,
			'NodeTree' => '32',
			'NodeParentID' => '3101',
			'NodeParentOrder' => '4',
			'NodeType' => 'Email',
			'NodePromptText' => 'Enter your email address, if you want to receive updates about SurvLoop:',
			'NodeDataStore' => 'Requests:ReqEmail'
		]);
	
	DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 1,
			'NodeResNode' => '3107',
			'NodeResEng' => 'Yes',
			'NodeResValue' => '1',
			'NodeResShowKids' => '3108'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 2,
			'NodeResNode' => '3107',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => '0'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 3,
			'NodeResNode' => '3108',
			'NodeResEng' => 'PHP',
			'NodeResValue' => '695'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 4,
			'NodeResNode' => '3108',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Laravel',
			'NodeResValue' => '696'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 5,
			'NodeResNode' => '3108',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Javascript',
			'NodeResValue' => '697'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 6,
			'NodeResNode' => '3108',
			'NodeResOrd' => '3',
			'NodeResEng' => 'jQuery / AJAX',
			'NodeResValue' => '698'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 7,
			'NodeResNode' => '3108',
			'NodeResOrd' => '4',
			'NodeResEng' => 'CSS',
			'NodeResValue' => '699'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 8,
			'NodeResNode' => '3108',
			'NodeResOrd' => '5',
			'NodeResEng' => 'GitHub',
			'NodeResValue' => '700'
		]);
	






	DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 1,
			'DataHelpTree' => '32',
			'DataHelpParentTable' => 'Requests',
			'DataHelpTable' => 'RequestSkills',
			'DataHelpKeyField' => 'ReqSklRequestID',
			'DataHelpValueField' => 'ReqSklSkill'
		]);
	

	DB::table('SL_Images')->insert([
			'ImgID' => 1,
			'ImgDatabaseID' => '1',
			'ImgUserID' => '0',
			'ImgFileLoc' => '.DS_Store',
			'ImgFullFilename' => '/survlooporg/uploads/.DS_Store',
			'ImgType' => 'ds_store',
			'ImgFileSize' => '6148'
		]);
		DB::table('SL_Images')->insert([
			'ImgID' => 2,
			'ImgDatabaseID' => '1',
			'ImgUserID' => '0',
			'ImgFileLoc' => 'drugstory.png',
			'ImgFullFilename' => '/survlooporg/uploads/drugstory.png',
			'ImgType' => 'png',
			'ImgFileSize' => '25436',
			'ImgWidth' => '410',
			'ImgHeight' => '94'
		]);
		DB::table('SL_Images')->insert([
			'ImgID' => 3,
			'ImgDatabaseID' => '1',
			'ImgUserID' => '0',
			'ImgFileLoc' => 'openpolicecomplaints.png',
			'ImgFullFilename' => '/survlooporg/uploads/openpolicecomplaints.png',
			'ImgType' => 'png',
			'ImgFileSize' => '58173',
			'ImgWidth' => '1636',
			'ImgHeight' => '291'
		]);
		DB::table('SL_Images')->insert([
			'ImgID' => 4,
			'ImgDatabaseID' => '1',
			'ImgUserID' => '0',
			'ImgFileLoc' => 'PowerScoreLogo-.jpg',
			'ImgFullFilename' => '/survlooporg/uploads/PowerScoreLogo-.jpg',
			'ImgType' => 'jpg',
			'ImgFileSize' => '17669',
			'ImgWidth' => '700',
			'ImgHeight' => '67'
		]);
		DB::table('SL_Images')->insert([
			'ImgID' => 5,
			'ImgDatabaseID' => '1',
			'ImgUserID' => '1',
			'ImgFileLoc' => 'laravel-digital-ocean-01.png',
			'ImgFullFilename' => '/survlooporg/uploads/laravel-digital-ocean-01.png',
			'ImgNodeID' => '-3',
			'ImgType' => 'png',
			'ImgFileSize' => '180474',
			'ImgWidth' => '2688',
			'ImgHeight' => '840'
		]);
		DB::table('SL_Images')->insert([
			'ImgID' => 6,
			'ImgDatabaseID' => '1',
			'ImgUserID' => '0',
			'ImgFileLoc' => 'laravel-digital-ocean-02.png',
			'ImgFullFilename' => '/survlooporg/uploads/laravel-digital-ocean-02.png',
			'ImgType' => 'png',
			'ImgFileSize' => '165292',
			'ImgWidth' => '1629',
			'ImgHeight' => '1080'
		]);
		DB::table('SL_Images')->insert([
			'ImgID' => 7,
			'ImgDatabaseID' => '1',
			'ImgUserID' => '1',
			'ImgFileLoc' => 'laravel-digital-ocean-03.png',
			'ImgFullFilename' => '/survlooporg/uploads/laravel-digital-ocean-03.png',
			'ImgNodeID' => '-3',
			'ImgType' => 'png',
			'ImgFileSize' => '96009',
			'ImgWidth' => '2037',
			'ImgHeight' => '816'
		]);
		DB::table('SL_Images')->insert([
			'ImgID' => 8,
			'ImgDatabaseID' => '1',
			'ImgUserID' => '1',
			'ImgFileLoc' => 'laravel-digital-ocean-04.png',
			'ImgFullFilename' => '/survlooporg/uploads/laravel-digital-ocean-04.png',
			'ImgNodeID' => '-3',
			'ImgType' => 'png',
			'ImgFileSize' => '140617',
			'ImgWidth' => '2000',
			'ImgHeight' => '868'
		]);
		DB::table('SL_Images')->insert([
			'ImgID' => 9,
			'ImgDatabaseID' => '1',
			'ImgUserID' => '1',
			'ImgFileLoc' => 'laravel-digital-ocean-05.png',
			'ImgFullFilename' => '/survlooporg/uploads/laravel-digital-ocean-05.png',
			'ImgNodeID' => '-3',
			'ImgType' => 'png',
			'ImgFileSize' => '105120',
			'ImgWidth' => '927',
			'ImgHeight' => '1092'
		]);
		DB::table('SL_Images')->insert([
			'ImgID' => 10,
			'ImgDatabaseID' => '1',
			'ImgUserID' => '1',
			'ImgFileLoc' => 'laravel-digital-ocean-06.png',
			'ImgFullFilename' => '/survlooporg/uploads/laravel-digital-ocean-06.png',
			'ImgNodeID' => '-3',
			'ImgType' => 'png',
			'ImgFileSize' => '112353',
			'ImgWidth' => '1188',
			'ImgHeight' => '513'
		]);
	

 } }