<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-seeder.blade.php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SurvLoopOrgSeeder extends Seeder
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
			'DbTables' => '3',
			'DbFields' => '33'
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
			'TblNumForeignIn' => '1'
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
			'TblNumFields' => '15',
			'TblNumForeignKeys' => '1'
		]);
	
	DB::table('SL_Fields')->insert([
			'FldID' => 202,
			'FldDatabase' => '1',
			'FldTable' => '3',
			'FldSpecType' => 'Replica',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'FldForeignTable' => '28',
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
			'FldID' => 203,
			'FldDatabase' => '1',
			'FldTable' => '3',
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
			'FldID' => 204,
			'FldDatabase' => '1',
			'FldTable' => '3',
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
			'FldID' => 205,
			'FldDatabase' => '1',
			'FldTable' => '3',
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
			'FldID' => 206,
			'FldDatabase' => '1',
			'FldTable' => '3',
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
			'FldID' => 207,
			'FldDatabase' => '1',
			'FldTable' => '3',
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
			'FldID' => 208,
			'FldDatabase' => '1',
			'FldTable' => '3',
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
			'FldID' => 209,
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
			'FldID' => 210,
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
			'FldID' => 211,
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
			'FldID' => 212,
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
			'FldID' => 213,
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
			'FldID' => 214,
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
			'FldID' => 215,
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
			'FldID' => 216,
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
			'FldID' => 217,
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
			'FldID' => 218,
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
			'FldID' => 281,
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
			'FldID' => 282,
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
			'FldID' => 283,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '2',
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
			'FldID' => 284,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '3',
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
			'FldID' => 285,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '5',
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
			'FldID' => 286,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '4',
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
			'FldID' => 287,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '12',
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
			'FldID' => 288,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '11',
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
			'FldID' => 289,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '7',
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
			'FldID' => 290,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '6',
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
			'FldID' => 291,
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
			'FldID' => 292,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '14',
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
			'FldID' => 293,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '13',
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
			'FldID' => 294,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '10',
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
			'FldID' => 295,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '9',
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
			'FldID' => 296,
			'FldDatabase' => '1',
			'FldTable' => '40',
			'FldOrd' => '8',
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
			'DefDescription' => 'https://survloop.org'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 3,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-url',
			'DefDescription' => 'https://survloop.org'
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
			'DefID' => 21,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-off',
			'DefOrder' => '8',
			'DefDescription' => '#53F1EB'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 22,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-on',
			'DefOrder' => '7',
			'DefDescription' => '#2B3493'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 23,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-faint',
			'DefOrder' => '9',
			'DefDescription' => '#EDF8FF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 24,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-danger-off',
			'DefOrder' => '12',
			'DefDescription' => '#F38C5F'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 25,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-danger-on',
			'DefOrder' => '11',
			'DefDescription' => '#EC2327'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 26,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-success-off',
			'DefOrder' => '14',
			'DefDescription' => '#29B76F'
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
			'DefDescription' => '#53F1EB'
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
			'DefDescription' => '.btn.btn-primary, a.btn.btn-primary:link, a.btn.btn-primary:active, a.btn.btn-primary:visited, a.btn.btn-primary:hover { color: #FFF; }
.btn.btn-secondary, a.btn.btn-secondary:link, a.btn.btn-secondary:active, a.btn.btn-secondary:visited { color: #FFF; }
a.btn.btn-secondary:hover { color: #AAA; }
#myNavBar, .navBar { background: #FFF; }'
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
			'DefDescription' => '#888'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 459,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-info-on',
			'DefOrder' => '15',
			'DefDescription' => '#5BC0DE'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 460,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-info-off',
			'DefOrder' => '16',
			'DefDescription' => '#2AABD2'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 461,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-warn-on',
			'DefOrder' => '17',
			'DefDescription' => '#F0AD4E'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 462,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-warn-off',
			'DefOrder' => '18',
			'DefDescription' => '#EB9316'
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
			'DefID' => 469,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-analytic'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 470,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'log-css-reload',
			'DefDescription' => '1543682157'
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
			'DefID' => 473,
			'DefDatabase' => '1',
			'DefSet' => 'Blurbs',
			'DefSubset' => 'Footer',
			'DefIsActive' => '3',
			'DefDescription' => '<center><div id="footerLinks" style="max-width: 730px; margin: 40px 15px 20px 15px;">
<div class="fL pB20 taL">
  <a href="/">Home</a><br>
  <a href="https://github.com/wikiworldorder/survloop" target="_blank">GitHub</a><br>
</div>
<div class="fR taR">
<div style="height: 25px;"></div>
<div class="footerSocial">
  <a href="https://www.facebook.com/wikiworldorder/" target="_blank"><img src="/survloop/uploads/facebook-logo.png" border="0"></a>
  <a href="https://twitter.com/wikiworldorder" target="_blank"><img src="/survloop/uploads/twitter-logo.png" border="0"></a>
</div>
<p></p> 
<a href="/site-map">Site Map</a><br>
<a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Creative Commons</a> 2017
<h4 class="m0"><a href="http://wikiworldorder.org" target="_blank" class="slBlueDark">Wiki World Order</a></h4>
</div></div></center>
<div class="p5"></div>'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 474,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'css-extra-files'
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
			'DefDescription' => '#F9FCFF'
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
			'DefID' => 680,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-map-key',
			'DefDescription' => 'string'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 681,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-map-key2',
			'DefDescription' => 'string'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 682,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-canada',
			'DefDescription' => '0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 685,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-cod-key',
			'DefDescription' => 'string'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 686,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-cod-key2',
			'DefDescription' => 'string'
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
			'TreeName' => 'How To Install Laravel On A Digital Ocean Server',
			'TreeSlug' => 'how-to-install-laravel-on-a-digital-ocean-server',
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
			'NodeParentID' => '42',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<p>SurvLoop is a Laravel-based engine for websites dominated by the collection and publication of open data. This is a database design and survey generation system, though it will increasingly be a flexible tool to solve many web-based problems.</p>
<p>It is currently in continued, heavy development, with much happening here in early 2018, almost ready to go live. I plan to provide more documentation in the coming weeks. Thank you for your interest and patience!</p>
<p>This was originally developed to build the <a href="https://github.com/flexyourrights/openpolice">Open Police</a> system. So until the SurvLoop installation processes automates everything, plus the bell &amp; whistle options, please check out the Open Police package for an heavy example of how to extend SurvLoop for your custom needs. (Lighter examples coming online soon!-)</p>
<p>The upcoming Open Police web app is the best live <strong>beta demo</strong> of the engine\'s end results, and feedback on that project and the SurvLoop user experience can be via the end of the submission process:<br /> <a href="http://openpolice.org/test">http://openpolice.org/test</a><br /> <br />The resulting database designed using the engine, as well as the branching tree which specifies the user\'s experience: <a href="https://openpolice.org/db/OP">/db/OP</a><br /> <a href="https://openpolice.org/tree/complaint">/tree/complaint</a><br /><br /> Among other methods, the resulting data can also be provided as XML included an automatically generated schema, eg.<br /> <a href="https://openpolice.org/complaint-xml-schema">/complaint-xml-schema</a><br /> <a href="https://openpolice.org/complaint-xml-example">/complaint-xml-example</a><br /> <a href="https://openpolice.org/complaint-xml-all">/complaint-xml-all</a></p>
<p>&nbsp;</p>'
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
			'NodePromptText' => '<p>&nbsp;</p>
<h2 class="slBlueDark">SurvLoop is an open data engine used to create, fill, and share complex databases.</h2>
<p>Back in the day we created database tables, queries, forms, reports, and pages with Microsoft Access<sup style="font-size: 8pt;">TM</sup> (and probably today, but who would). This is a full content management system that can generate mobile-friendly forms as complex as TurboTax<sup style="font-size: 8pt;">TM</sup>.</p>
<p>Translating each data field\'s meaning (in English) as you build your database, means computer-friendly API data listings and schema can be auto-generated once you start collecting data. In this way, these have ample documentation for human researchers worldwide.</p>
<p>Because the tools to create complex forms continue to become more useful, it was a logical next step to reuse them to generate complex pages for the rest of a website\'s main content. The basics needs are just about complete!</p>
<p>Another round of bells and whistles will be completed by ealry 2018. And the goal is to significantly improve all the admin editing tools by the end of 2018.</p>
<p>And hopefully by the end of 2019, almost all of the admin tools will be replaced with SurvLoop-generated forms, to also approach the status of a being self~replicating GUI!</p>
<p><em>A theme is branching trees, in many directions. Fractals are fun.</em></p>
<p><em>&nbsp;</em></p>
<p><em>&nbsp;</em></p>',
			'NodeOpts' => '67'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 19,
			'NodeTree' => '5',
			'NodeParentID' => '42',
			'NodeParentOrder' => '1',
			'NodeType' => 'Big Button',
			'NodeResponseSet' => 'Default',
			'NodeDefault' => '<i class="fa fa-github mR5" aria-hidden="true"></i> github.com/wikiworldorder/survloop',
			'NodeDataStore' => 'window.open(\'https://github.com/wikiworldorder/survloop\');'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 20,
			'NodeTree' => '5',
			'NodeParentID' => '42',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>',
			'NodeOpts' => '67'
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
			'NodePromptText' => '<p><img src="/survloop/uploads/survloop-logo-x800.jpg" border=0 width=100% ></p>'
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
			'NodePromptText' => '<center><p><i>Other Sites Currently Running SurvLoop:</i></p></center>
<p>&nbsp;</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 39,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '6',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 40,
			'NodeTree' => '5',
			'NodeParentID' => '39',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '6'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 41,
			'NodeTree' => '5',
			'NodeParentID' => '39',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 42,
			'NodeTree' => '5',
			'NodeParentID' => '39',
			'NodeParentOrder' => '2',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 43,
			'NodeTree' => '5',
			'NodeParentID' => '40',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<p><iframe width="560" height="315" src="https://www.youtube.com/embed/DcooFRrepBA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
<p>&nbsp;</p>
<h3>Start Helping With Code</h3>
<p>Here are some resources to help get you off the ground in helping this effort!</p>
<ul><li><a href="/how-to-install-survloop">How to install SurvLoop (on top of Laravel)</a></li>
<li><a href="/how-to-install-laravel-locally-on-a-mac">How to install Laravel locally on a Mac</a></li>
<li><a href="/how-to-install-laravel-on-a-digital-ocean-server">How to install Laravel on a Digital Ocean server</a></li></ul>
<p>&nbsp;</p>'
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
			'NodeID' => 51,
			'NodeTree' => '8',
			'NodeParentID' => '44',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<div class="row">
<div class="col-md-5">
<h1>How To Install SurvLoop</h1>
<i>After You\'ve Installed Laravel</i>
</div><div class="col-md-1"></div><div class="col-md-6">
<div class="jumbotron"><ul>
<li><a href="/how-to-install-laravel-locally-on-a-mac">How to install Laravel locally <nobr>on a Mac</nobr></a></li>
<li><a href="/how-to-install-laravel-on-a-digital-ocean-server">How To Install Laravel On A <nobr>Digital Ocean</nobr> Server</a></li>
</ul></div>
</div></div>
<p>&nbsp;</p>
<p>Install Laravel\'s default user authentication, notifications, and SurvLoop:</p>
<pre>$ php artisan make:auth
$ php artisan vendor:publish --tag=laravel-notifications
</pre>
<p>&nbsp;</p>
<p>Update `composer.json` to add requirements and an easier SurvLoop reference:</p>
<pre>$ nano composer.json
</pre>
<pre>...
"require": {
	...
    "wikiworldorder/survloop": "0.*",
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
<pre>$ composer update
</pre>
<p>&nbsp;</p>
<p>Add the package to your application service providers in `config/app.php`.</p>
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
	\'SurvLoop\'	=&gt; \'WikiWorldOrder\SurvLoop\SurvLoopFacade\',
	...
], ...
</pre>
<p>&nbsp;</p>
<p>Swap out the SurvLoop user model in `config/auth.php`.</p>
<pre>$ nano config/auth.php
</pre>
<pre>...
\'model\' =&gt; App\Models\User::class,
...</pre>
<p>&nbsp;</p>
<p>Update composer, publish the package migrations, etc...</p>
<pre>$ php artisan vendor:publish --force
$ php artisan migrate
$ composer dump-autoload
$ php artisan db:seed --class=SurvLoopSeeder
</pre>
<p>&nbsp;</p>
<p>For now, to apply database design changes to the same installation you are working in, depending on your server, 
you might also need something like this...</p>
<pre>$ chown -R www-data:33 app/Models
$ chown -R www-data:33 database
</pre>
<p>&nbsp;</p>
<p>Browse to load the style sheets, etc.. /dashboard/css-reload</p>'
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
			'NodeParentID' => '52',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<h1>How To Install Laravel Locally On A Mac</h1>
<i>So You Can Install SurvLoop</i>
<p>&nbsp;</p>
<div class="row">
<div class="col-md-7">
I have only been learning <a href="https://laravel.com/" target="_blank" rel="noopener">Laravel</a> for a year, but below is the Homestead install process which has worked best for me. Homestead is Laravel\'s own development environment, powered by Vagrant.</p>
<p><b>Replace all references to "ProjectName" with a short name for your own project.</b></p>
</div><div class="col-md-1"></div><div class="col-md-4">
<div class="jumbotron"><ul><li><a href="/how-to-install-survloop">How to install SurvLoop <span class="fPerc80"><nobr>(after installing Laravel)</nobr></span></a></li>
<li><a href="/how-to-install-laravel-on-a-digital-ocean-server">How To Install Laravel On A <nobr>Digital Ocean</nobr> Server</a></li></ul></div>
</div></div>
<ol>
 	<li>Install XCode from the App Store. Open it, and accept the user agreement.<p>&nbsp;</p></li>
 	<li>Install VirtualBox: <a href="https://www.virtualbox.org/wiki/Downloads" target="_blank" rel="noopener">https://www.virtualbox.org/wiki/Downloads</a><p>&nbsp;</p></li>
 	<li>Install Vagrant: <a href="https://www.vagrantup.com/downloads.html" target="_blank" rel="noopener">https://www.vagrantup.com/downloads.html</a><p>&nbsp;</p></li>
 	<li>To the command line (Mac OS Terminal, or <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a>)! Create local ssh key, if you haven\'t on this computer before:
<pre>$ ssh-keygen -t rsa -C "your@emailaddress.com"</pre>
<p>&nbsp;</p>
</li>
 	<li>Install Composer, Homestead, and initialize:
<pre>$ curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer  
$ mkdir ~/web
$ mkdir ~/web/sites
$ mkdir ~/web/sites/ProjectName
$ cd ~/web
$ git clone https://github.com/laravel/homestead.git Homestead
$ cd Homestead
$ bash init.sh</pre>
<p>&nbsp;</p>
</li>
 	<li>Edit paths in Homestead.yaml:
<pre>$ nano Homestead.yaml</pre>
<em>Change this chunk of code:</em>
<pre>folders: 
	- map: ~/code
	  to: /home/vagrant/code
sites:
    - map: homestead.app
      to: /home/vagrant/code/Laravel/public</pre>
<em>To this chunk of code:</em>
<pre>folders: 
	- map: ~/web/sites/ProjectName
	  to: /home/vagrant/code
sites:
    - map: homestead.app
      to: /home/vagrant/code/ProjectName/public</pre>
<p>&nbsp;</p>
</li>
 	<li>Edit the hosts file:
<pre>$ sudo nano /etc/hosts</pre>
Add one line to the bottom:
<pre>192.168.10.10   homestead.app</pre>
<p>&nbsp;</p>
</li>
 	<li>Launch your local server ("vagrant up"), log into it, and install Laravel!...
<pre>$ cd ~/web/Homestead
$ vagrant up
$ vagrant ssh
$ cd /home/vagrant/Code
$ composer global require "laravel/installer"
$ composer create-project laravel/laravel ProjectName "5.6.*"
</pre>
</li>
</ol>
<p>&nbsp;</p>
<p>Now you should be able to confirm your successful installation by pulling up http://homestead.app/ in your browser!</p>
<ul>
 	<li>If you like, you can now connect to your server\'s database with something like <a href="https://www.sequelpro.com/" target="_blank" rel="noopener">Sequel Pro</a>, and the following default login info.... Host: 127.0.0.1 , Username: homestead , Password: secret , Port: 33060 , Database: homestead .</li>
</ul>
<p>&nbsp;</p>
And you\'re ready to start installing more Laravel packages and building your own world. Here, inside your virtual vagrant server via SSH, you can enter your new project\'s main composer directory (/home/vagrant/Code/ProjectName), which displays in your actual machine\'s file system in ~/web/sites/ProjectName/ProjectName (that\'s within your main user account folder alongside Documents, Pictures, etc).
<pre>$ cd ProjectName</pre>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
You could do things like install Laravel\'s out-of-the-box user authentication tools:
<pre>$ php artisan make:auth</pre>
<p>Or install the SurvLoop software I\'ve started: <a href="https://packagist.org/packages/wikiworldorder/survloop" target="_blank" rel="noopener">https://packagist.org/packages/wikiworldorder/survloop</a></p>
<p>Or anything else you can imagine: <a href="https://laravel.com/docs/5.6" target="_blank" rel="noopener">https://laravel.com/docs/5.6</a></p>
<p>&nbsp;</p>
<h3><a href="/how-to-install-survloop"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> How to install SurvLoop <nobr>(after installing Laravel)</nobr></a></h3>
</p>&nbsp;</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 60,
			'NodeTree' => '10',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-install-laravel-on-a-digital-ocean-server',
			'NodePromptAfter' => 'How To Install Laravel On A Digital Ocean Server::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 61,
			'NodeTree' => '10',
			'NodeParentID' => '60',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<h1>How To Install Laravel On A <nobr>Digital Ocean</nobr> Server</h1>
<i>So You Can Install SurvLoop</i>
<p><a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04" target="_blank">How To Install Linux, Apache, MySQL, PHP (LAMP) stack on Ubuntu 18.04</a>
</p><p>&nbsp;</p>
<div class="row">
<div class="col-md-7">
<h3>Create Your SSH Key, If You Haven\'t Already</h3>
<p>From the macOS Terminal (Applications -&gt; Utilities) — or alternatives like <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a> — run this command</p>
<pre>ssh-keygen -t rsa</pre>
<p>Press the ENTER key to accept the default location, then enter a passphrase twice. This creates new files in your Mac User\'s folder at "~/.ssh/id_rsa.pub" and "~/.ssh/id_rsa". Run the following command to copy your key to your clipboard, for the next step:</p>
<pre>pbcopy &lt; ~/.ssh/id_rsa.pub</pre>
</div><div class="col-md-1"></div><div class="col-md-4">
<div class="jumbotron"><ul><li><a href="/how-to-install-survloop">How to install SurvLoop <span class="fPerc80"><nobr>(after installing Laravel)</nobr></span></a></li>
<li><a href="/how-to-install-laravel-locally-on-a-mac">How to install Laravel locally <nobr>on a Mac</nobr></a></li></ul></div>
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h3>Log Into Your <a href="https://www.digitalocean.com/" target="_blank" rel="noopener">Digital Ocean</a> Account.<br><br>
Create a new Droplet, with a recent version of Ubuntu.</h3>
<p>The minimal memory size of 1GB is sufficient to get off the ground.</p>
<p>If you have already setup your SSH Key with Digital Ocean before, select it. Otherwise, click the "New SSH Key" button and paste the contents of your key which was copied to your clipboard above.</p>
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-01.png" alt="">
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<div class="row">
<div class="col-md-4">
<p>&nbsp;</p>
After it is created, open up your Droplet in the website, go to the "Access" tab, and click the button to "Reset Root Password".This will quickly reboot the server while resetting the root password, then send it to your account\'s email address.

It sometimes take around 10 minutes to receive, in my limited experience.</div><div class="col-md-1"></div><div class="col-md-7"><img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-02.png"></div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<div class="row">
<div class="col-md-4">
<h3>Link The Domain (optional)</h3>
<p>Go to your <a href="https://canvashost.com/" target="_blank" rel="noopener">domain registrar</a> and setup Custom DNS Servers to...</p>
<ul>
 	<li>ns1.digitalocean.com</li>
 	<li>ns2.digitalocean.com</li>
 	<li>ns3.digitalocean.com</li>
</ul>
<p>Then return to Digital Ocean and go to the Networking area, where you can "Add a domain":</p>
</div><div class="col-md-1"></div><div class="col-md-7">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-03.png">
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<div class="row">
<div class="col-md-4">
<p>&nbsp;</p>
<p>This will bring you to the domain\'s details, where you should add DNS Records. Add two "A Records" pointing to your newly created Droplet, one for hostname "@" and one for hostname "www"...</p>
</div><div class="col-md-1"></div><div class="col-md-7">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-04.png">
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h2>Setup Your Server</h2>
<div class="row"><div class="col-md-7">
<p>Once you receive your server\'s reset root password via email, you can log into your server via SSH. You can use Digital Ocean\'s button to "Launch Console", but other command line terminals (e.g. <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a>) will allow you to copy and paste things like your most secure passwords.</p>
<p>If your domain linkage has already propagated, you can SSH connect using your domain name instead of your server\'s IP address in this command:</p>
<pre>ssh root@12.34.56.78</pre>
<p>This will prompt you for the temporary password you were emailed as "(current) UNIX password." Then you should enter a new, <a href="https://strongpasswordgenerator.com/" target="_blank" rel="noopener">strong password</a> twice when the server prompts you.</p>
</div><div class="col-md-1"></div><div class="col-md-4">
<div class="jumbotron"><h3>DON\'T FORGET TO COPY AND SAVE YOUR PASSWORD SOMEWHERE SECURE.</h3></div>
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h3>Install Core Web Packages (Apache version)</h3>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key. When you create a MYSQL password, be sure to copy and securely save it.</p>
<pre>$ apt-get update
$ apt-get install tasksel
$ tasksel install lamp-server
$ sudo mysql_secure_installation
$ sudo add-apt-repository ppa:ondrej/php
$ sudo add-apt-repository ppa:ondrej/apache2
$ sudo apt-get update
$ sudo apt-get install -y php7.2
$ sudo apt-get install zip unzip php-zip
$ sudo service apache2 restart
$ apt-get install phpunit</pre>
<p>Now edit this Apache file:</p>
<pre>nano /etc/apache2/mods-enabled/dir.conf</pre>
<p>...and move index.php to the front of the list there:</p>
<pre>DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm</pre>
<p>Save a file in the \'nano\' editor by clicking Control-X, "Save modified buffer?" type "Y" for Yes, then press enter to confirm overwriting the file with the same filename. Then restart Apache:</p>
<pre>service apache2 restart</pre>
<p>&nbsp;</p>
<h4>Test That PHP Is Running (optional)</h4>
<p>Create a new file in the default public root:</p>
<pre>nano /var/www/html/index.php</pre>
<p>Type this, "<!--?php phpinfo(); ?-->", into the empty file, and save it. If things are working, you should be able to type your IP address (or propagated domain name) into your browser, and <a href="https://s14-eu5.ixquick.com/cgi-bin/serveimage?url=https:%2F%2Fassets.digitalocean.com%2Farticles%2Fphp_edit%2Fphpinfo.png&amp;sp=65cea842f80f5dedbeba0cc83ec9851d" target="_blank" rel="noopener">see a bunch of details</a> about your PHP installation.</p>
<p>&nbsp;</p>
<h4>Install Pear &amp; Composer</h4>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key:</p>
<pre>$ wget http://pear.php.net/go-pear.phar
$ php go-pear.phar
$ apt-get install curl
$ curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
$ service apache2 restart</pre>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<div class="row"><div class="col-md-4">
<h3>Create A Database</h3>
<p><b>Enable Remote MYSQL Connection (&gt;=v5.7)</b></p>
<pre>$ nano /etc/mysql/mysql.conf.d/mysqld.cnf</pre>
<p>Comment out the line for bind-address, set it to 0.0.0.0, or increase security with your own IP address.</p>
<p>Down the line, you might want a GUI to play with your databases. I\'ve enjoyed <a href="https://www.sequelpro.com/" target="_blank" rel="noopener">Sequel Pro</a>.</p>
<p>Give your new SSH connection an appropriate name, and use your Droplet\'s IP address for the hosts. Copy the MYSQL root password you created while installing the core packages above.</p>
<p>Finally, link your SSH Key in your operating system, "~/.ssh/id_rsa.pub". This can sometimes be challenging since this is a hidden folder which you may need to <a href="https://www.lifewire.com/display-hidden-files-in-os-x-153332" target="_blank" rel="noopener">work to reveal</a>.</p>
</div><div class="col-md-4"></div><div class="col-md-4">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-05.png">
</div></div>
<p>&nbsp;</p>
<div class="row"><div class="col-md-4">
<p>Once you are connected, use the drop-down in the top-left corner to "Add Database...". Give your database an appropriate name, and write it down for later.</p>
</div><div class="col-md-2"></div><div class="col-md-6">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-06.png">
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h3>Install Laravel</h3>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key:</p>
<pre>$ rm /var/www/html/index.html
$ composer create-project laravel/laravel /var/www/laravel 5.6.*
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
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
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
<pre>$ a2dissite 000-default &amp;&amp; sudo a2ensite example.com
$ a2enmod rewrite
$ /etc/init.d/apache2 restart</pre>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h3>Install SSL Certificate</h3>
<p>Thanks to the <a href="https://www.eff.org/" target="_blank" rel="noopener">EFF</a>\'s <a href="https://certbot.eff.org/" target="_blank" rel="noopener">Certbot</a>, you can now get this step down quickly and easily... for free!! Just run these commands:</p>
<pre>$ apt-get install software-properties-common
$ add-apt-repository ppa:certbot/certbot
$ apt-get update
$ apt-get install python-certbot-apache
$ certbot --apache
$ certbot renew</pre>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h2>Start Using Laravel or Install SurvLoop</h2>
<p>You should now have a functioning server with basic, common security measures installed! From here, you can <a href="https://github.com/wikiworldorder/survloop#getting-started">install SurvLoop</a>, any other Laravel-based projects, or start building your own. You should now see the basic Laravel page when you browse to your IP address or domain name.</p>
<h3><a href="/how-to-install-survloop"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> How to install SurvLoop <nobr>(after installing Laravel)</nobr></a></h3>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h2>Frequently Update Ubuntu, PHP, etc</h2>
<pre>$ sudo apt-get update
$ sudo apt update &amp;&amp; sudo apt dist-upgrade
$ sudo apt install update-manager-core
$ sudo do-release-upgrade
$ composer update
$ php artisan cache:clear</pre>
<p>&nbsp;</p>
<p>&nbsp;</p>'
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
			'NodeParentID' => '76',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Gather Install Stats</h2>
<p>Running scripts to collect statistics from each SurvLoop Installation.<br></p>'
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