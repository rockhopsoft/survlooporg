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
			'DbTables' => '3',
			'DbFields' => '37'
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
			'TblNumFields' => '19',
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
			'FldID' => 284,
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
			'FldID' => 285,
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
			'FldID' => 286,
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
			'FldID' => 287,
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
			'FldID' => 288,
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
			'FldID' => 289,
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
			'FldID' => 290,
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
			'FldID' => 293,
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
			'FldID' => 294,
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
			'FldID' => 295,
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
			'FldID' => 296,
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
			'FldID' => 297,
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
			'FldID' => 298,
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
			'FldID' => 299,
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
			'FldID' => 300,
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
			'DefDescription' => 'https://SurvLoop.org'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 3,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-url',
			'DefDescription' => 'https://SurvLoop.org'
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
			'DefDescription' => '#7B66D3'
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
			'DefID' => 24,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-danger-off',
			'DefOrder' => '12',
			'DefDescription' => '#FF4646'
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

#loginLnk { display: none; }

pre { background: #FCFBFF; padding: 20px; }

#pubFooter {
    width: 100%;
    margin: 80px 0px 0px 0px;
    padding: 60px 15px;
    background: #4429B4;
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
			'DefID' => 460,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-info-off',
			'DefOrder' => '16',
			'DefDescription' => '#678BCC'
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
			'DefID' => 462,
			'DefDatabase' => '1',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-warn-off',
			'DefOrder' => '18',
			'DefDescription' => '#FFBF4A'
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
			'DefDescription' => '1552503985'
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
			'DefID' => 680,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-map-key'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 681,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-map-key2'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 682,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-canada',
			'DefDescription' => '1'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 685,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-cod-key'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 686,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'google-cod-key2'
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
			'NodeParentID' => '858',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<a href="https://github.com/wikiworldorder/survloop" target="_blank" class="btn btn-primary btn-lg btn-block mB20"><i class="fa fa-github mR5" aria-hidden="true"></i> github.com/<br />wikiworldorder/survloop</a>
<h3>Start Helping With Code</h3>
<p>Here are some resources to help get you off the ground in helping this effort!</p>
<a href="/how-to-install-survloop" class="btn btn-primary btn-block">How to install SurvLoop</a>
<a href="/package-files-folders-classes" class="btn btn-primary btn-block">Package Files, Folders, and Classes</a>'
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
			'NodeParentID' => '423',
			'NodeParentOrder' => '3',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>Migrate, Publish, and Clean Up</h3>
<p>Update composer, publish the package migrations, etc...</p>
<pre>$ php artisan vendor:publish --force
$ php artisan migrate
$ composer dump-autoload
$ php artisan db:seed --class=SurvLoopSeeder
</pre>
<p>For now, to apply database design changes to the same installation you are working in, depending on your server, you might also need something like this...</p>
<pre>$ chown -R www-data:33 app/Models
$ chown -R www-data:33 database
</pre>',
			'NodeOpts' => '89'
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
<p> I have only been learning <a href="https://laravel.com/" target="_blank" rel="noopener">Laravel</a> for a year, but below is the Homestead install process which has worked best for me. Homestead is Laravel\'s own development environment, powered by Vagrant.</p>
<p><b>Replace all references to "ProjectName" with a short name for your own project.</b></p>
<ol>
 	<li>Install XCode from the App Store. Open it, and accept the user agreement.</li>
 	<li>Install VirtualBox: <a href="https://www.virtualbox.org/wiki/Downloads" target="_blank" rel="noopener">https://www.virtualbox.org/wiki/Downloads</a></li>
 	<li>Install Vagrant: <a href="https://www.vagrantup.com/downloads.html" target="_blank" rel="noopener">https://www.vagrantup.com/downloads.html</a></li>
 	<li>To the command line (Mac OS Terminal, or <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a>)! Create local ssh key, if you haven\'t on this computer before:
<pre>$ ssh-keygen -t rsa -C "your@emailaddress.com"</pre>
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
<p> </p>
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
<p> </p>
</li>
 	<li>Edit the hosts file:
<pre>$ sudo nano /etc/hosts</pre>
Add one line to the bottom:
<pre>192.168.10.10   homestead.app</pre>
<p> </p>
</li>
 	<li>Launch your local server ("vagrant up"), log into it, and install Laravel!...
<pre>$ cd ~/web/Homestead
$ vagrant up
$ vagrant ssh
$ cd /home/vagrant/Code
$ composer global require "laravel/installer"
$ composer create-project laravel/laravel ProjectName "5.8.*"
</pre>
</li>
</ol>
<p> </p>
<p>Now you should be able to confirm your successful installation by pulling up http://homestead.app/ in your browser!</p>
<ul>
 	<li>If you like, you can now connect to your server\'s database with something like <a href="https://www.sequelpro.com/" target="_blank" rel="noopener">Sequel Pro</a>, and the following default login info.... Host: 127.0.0.1 , Username: homestead , Password: secret , Port: 33060 , Database: homestead .</li>
</ul>
<p> </p>
And you\'re ready to start installing more Laravel packages and building your own world. Here, inside your virtual vagrant server via SSH, you can enter your new project\'s main composer directory (/home/vagrant/Code/ProjectName), which displays in your actual machine\'s file system in ~/web/sites/ProjectName/ProjectName (that\'s within your main user account folder alongside Documents, Pictures, etc).
<pre>$ cd ProjectName</pre>
<p> </p>
<hr>
<p> </p>
You could do things like install Laravel\'s out-of-the-box user authentication tools:
<pre>$ php artisan make:auth</pre>
<p>Or install the SurvLoop software I\'ve started: <a href="https://packagist.org/packages/wikiworldorder/survloop" target="_blank" rel="noopener">https://packagist.org/packages/wikiworldorder/survloop</a></p>
<p>Or anything else you can imagine: <a href="https://laravel.com/docs/5.8" target="_blank" rel="noopener">https://laravel.com/docs/5.8</a></p>
<p> </p>
<h3><a href="/how-to-install-survloop"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> How to install SurvLoop <nobr>(after installing Laravel)</nobr></a></h3>
</p> </p>',
			'NodePromptAfter' => '<style> #treeWrap984 { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
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
			'NodeParentID' => '1049',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>How To Install Laravel On A <nobr>Digital Ocean</nobr> Server</h2>
<i>So You Can Install SurvLoop</i>
<p><a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04" target="_blank">How To Install Linux, Apache, MySQL, PHP (LAMP) stack on Ubuntu 18.04</a>
</p>
<h3>Create Your SSH Key, If You Haven\'t Already</h3>
<p>From the macOS Terminal (Applications -> Utilities) — or alternatives like <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a> — run this command</p>
<pre>ssh-keygen -t rsa</pre>
<p>Press the ENTER key to accept the default location, then enter a passphrase twice. This creates new files in your Mac User\'s folder at "~/.ssh/id_rsa.pub" and "~/.ssh/id_rsa". Run the following command to copy your key to your clipboard, for the next step:</p>
<pre>pbcopy < ~/.ssh/id_rsa.pub</pre>
<h3>Log Into Your <a href="https://www.digitalocean.com/" target="_blank" rel="noopener">Digital Ocean</a> Account.<br><br>
Create a new Droplet, with a recent version of Ubuntu.</h3>
<p>The minimal memory size of 1GB is sufficient to get off the ground.</p>
<p>If you have already setup your SSH Key with Digital Ocean before, select it. Otherwise, click the "New SSH Key" button and paste the contents of your key which was copied to your clipboard above.</p>
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-01.png" alt="">
<p> </p>
<hr>
<p> </p>
<div class="row">
<div class="col-md-4">
After it is created, open up your Droplet in the website, go to the "Access" tab, and click the button to "Reset Root Password".This will quickly reboot the server while resetting the root password, then send it to your account\'s email address.

It sometimes take around 10 minutes to receive, in my limited experience.</div><div class="col-md-1"></div><div class="col-md-7"><img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-02.png"></div></div>
<p> </p>
<hr>
<p> </p>
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
<p> </p>
<hr>
<p> </p>
<div class="row">
<div class="col-md-4">
<p>This will bring you to the domain\'s details, where you should add DNS Records. Add two "A Records" pointing to your newly created Droplet, one for hostname "@" and one for hostname "www"...</p>
</div><div class="col-md-1"></div><div class="col-md-7">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-04.png">
</div></div>
<p> </p>
<hr>
<p> </p>
<h2>Setup Your Server</h2>
<div class="row"><div class="col-md-6">
<p>Once you receive your server\'s reset root password via email, you can log into your server via SSH. You can use Digital Ocean\'s button to "Launch Console", but other command line terminals (e.g. <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a>) will allow you to copy and paste things like your most secure passwords.</p>
<p>If your domain linkage has already propagated, you can SSH connect using your domain name instead of your server\'s IP address in this command:</p>
<pre>ssh root@12.34.56.78</pre>
<p>This will prompt you for the temporary password you were emailed as "(current) UNIX password." Then you should enter a new, <a href="https://strongpasswordgenerator.com/" target="_blank" rel="noopener">strong password</a> twice when the server prompts you.</p>
</div><div class="col-md-6">
<div class="jumbotron"><h3>DON\'T FORGET TO COPY AND SAVE YOUR PASSWORD SOMEWHERE SECURE.</h3></div>
</div></div>
<p> </p>
<hr>
<p> </p>
<h3>Install Core Web Packages (Apache version)</h3>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key. When you create a MYSQL password, be sure to copy and securely save it.</p>
<pre>$ apt-get update
$ apt-get install tasksel
$ tasksel install lamp-server
$ sudo mysql_secure_installation
$ sudo add-apt-repository ppa:ondrej/php
$ sudo add-apt-repository ppa:ondrej/apache2
$ sudo apt-get update
$ sudo apt-get install -y php7.3
$ sudo apt-get install zip unzip php-zip
$ sudo service apache2 restart
$ apt-get install phpunit</pre>
<p>Now edit this Apache file:</p>
<pre>nano /etc/apache2/mods-enabled/dir.conf</pre>
<p>...and move index.php to the front of the list there:</p>
<pre>DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm</pre>
<p>Save a file in the \'nano\' editor by clicking Control-X, "Save modified buffer?" type "Y" for Yes, then press enter to confirm overwriting the file with the same filename. Then restart Apache:</p>
<pre>service apache2 restart</pre>
<p> </p>
<h4>Test That PHP Is Running (optional)</h4>
<p>Create a new file in the default public root:</p>
<pre>nano /var/www/html/index.php</pre>
<p>Type this, "<!--?php phpinfo(); ?-->", into the empty file, and save it. If things are working, you should be able to type your IP address (or propagated domain name) into your browser, and <a href="https://s14-eu5.ixquick.com/cgi-bin/serveimage?url=https:%2F%2Fassets.digitalocean.com%2Farticles%2Fphp_edit%2Fphpinfo.png&sp=65cea842f80f5dedbeba0cc83ec9851d" target="_blank" rel="noopener">see a bunch of details</a> about your PHP installation.</p>
<p> </p>
<h4>Install Pear & Composer</h4>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key:</p>
<pre>$ wget http://pear.php.net/go-pear.phar
$ php go-pear.phar
$ apt-get install curl
$ curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
$ service apache2 restart</pre>
<p> </p>
<hr>
<p> </p>
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
<p> </p>
<div class="row"><div class="col-md-4">
<p>Once you are connected, use the drop-down in the top-left corner to "Add Database...". Give your database an appropriate name, and write it down for later.</p>
</div><div class="col-md-2"></div><div class="col-md-6">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-06.png">
</div></div>
<p> </p>
<hr>
<p> </p>
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
<p> </p>
<hr>
<p> </p>
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
<p> </p>
<hr>
<p> </p>
<h3>Install SSL Certificate</h3>
<p>Thanks to the <a href="https://www.eff.org/" target="_blank" rel="noopener">EFF</a>\'s <a href="https://certbot.eff.org/" target="_blank" rel="noopener">Certbot</a>, you can now get this step down quickly and easily... for free!! Just run these commands:</p>
<pre>$ apt-get install software-properties-common
$ add-apt-repository ppa:certbot/certbot
$ apt-get update
$ apt-get install python-certbot-apache
$ certbot --apache
$ certbot renew</pre>
<p> </p>
<hr>
<p> </p>
<h2>Start Using Laravel or Install SurvLoop</h2>
<p>You should now have a functioning server with basic, common security measures installed! From here, you can <a href="https://github.com/wikiworldorder/survloop#getting-started">install SurvLoop</a>, any other Laravel-based projects, or start building your own. You should now see the basic Laravel page when you browse to your IP address or domain name.</p>
<h3><a href="/how-to-install-survloop"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> How to install SurvLoop <nobr>(after installing Laravel)</nobr></a></h3>',
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
			'NodeParentOrder' => '5',
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
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark">How To Install SurvLoop</h2>
<p class="slGrey">Updated: March 13, 2019</p>
<p>Install Laravel and its default user authentication and notifications:</p>
<pre>$ composer global require "laravel/installer"
$ composer create-project laravel/laravel ProjectName "5.8.*"
$ cd ProjectName
$ php artisan make:auth
$ php artisan vendor:publish --tag=laravel-notifications
</pre>',
			'NodePromptAfter' => '<style> #treeWrap422 { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 441,
			'NodeTree' => '8',
			'NodeParentID' => '790',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p><a href="/documentation"><b>Documentation Overview</b></a></p>
<p><a href="/how-to-install-laravel-locally-on-a-mac">How to install Laravel locally with Homestead <nobr>on a Mac</nobr></a></p>
<p><a href="/how-to-install-laravel-on-a-digital-ocean-server">How To Install Laravel On A <nobr>Digital Ocean</nobr> Server</a></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 494,
			'NodeTree' => '8',
			'NodeParentID' => '423',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>Require SurvLoop in Composer</h3>
<p>From your Laravel installation\'s root directory, update `composer.json` to require and easily reference SurvLoop:</p>
<pre>$ nano composer.json
</pre>
<pre>...
"require": {
	...
    "wikiworldorder/survloop": "^0.1.*",
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
<pre>$ composer update</pre>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 539,
			'NodeTree' => '8',
			'NodeParentID' => '423',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>Laravel Config</h3>
<p>Add the package to your application service providers in `config/app.php`.</p>
<pre>$ nano config/app.php
</pre>
<pre>...
    \'name\' => \'SurvLoop\',
...
\'providers\' => [
	...
	SurvLoop\SurvLoopServiceProvider::class,
	...
],
...
\'aliases\' => [
	...
	\'SurvLoop\' => \'WikiWorldOrder\SurvLoop\SurvLoopFacade\',
	...
], ...
</pre>
<p> </p>
<p>Swap out the SurvLoop user model in `config/auth.php`.</p>
<pre>$ nano config/auth.php
</pre>
<pre>...
\'model\' => App\Models\User::class,
...</pre>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 558,
			'NodeTree' => '8',
			'NodeParentID' => '423',
			'NodeParentOrder' => '4',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>Initialize Laravel</h3>
<p>If all went well thus far, the hopefully you can browse to load the style sheets, etc..</p>
<pre>https://browser.path/css-reload</pre>
<p>Then browsing to another page should prompt you to create the first admin user account.</p>
<pre>https://browser.path</pre>',
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
<p class="slGrey">Updated March 13, 2019</p>',
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
			'NodeParentID' => '621',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<ul>
<li><a href="#getting-started" class="hsho">Getting Started</a></li>
</ul>
<p><br /></p>',
			'NodePromptAfter' => '<style> #treeWrap620 { margin-top: 30px; } </style>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 735,
			'NodeTree' => '24',
			'NodeParentID' => '622',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>Getting Oriented in SurvLoop</h3>
<p>Here are the start of documents to get you familiar with the SurvLoop landscape, if you\'re starting to dive in.</p>
<a href="/package-files-and-folders" class="btn btn-lg btn-primary btn-block">Package Files, Folders, and Classes</a>',
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
			'NodePromptText' => '<h2 class="slBlueDark">SurvLoop Package\'s File & Folder Layout</h2>
<p class="slGrey">Updated March 13, 2019</p>
<p><a href="https://blog.pusher.com/laravel-mvc-use/" target="_blank">Laravel is an MVC (Model View Controller)</a>, and the SurvLoop package is primarily structured accordingly...</p>
<h4>wikiworldorder/survloop</h4>
<ul>
<li><b>composer.json</b>: Defines more packages required by SurvLoop, as well as easier references to some packages.</li>
<li><b>src</b>: Repository\'s main source code.
<ul>
    <li><b>routes.php</b>: All of SurvLoop\'s routing happens here, passing a url request to the right Controller.</li>
    <li><b>SurvLoopServiceProvider.php</b>: SurvLoopServiceProvider manages which package files and folders need to be copied to elsewhere in the system. This mostly just runs after installation, and perhaps of some other code updates.</li>
    <li><b>Controllers</b>: Most of the PHP algorithms and logic which process and manipulate data, and call Views to output the proper results.
    <ul>
        <li><b>Admin</b>: These PHP classes controll both all admin tools for managing survloop, but also handles routing for SurvLoop pages and surveys which require any user login.</li>
        <li><b>Auth</b>: A few Laravel authorization classes customized by SurvLoop.</li>
        <li><b>Globals</b>: These classes can be easily accessed from both Controllers and Views.</li>
        <li><b>Middleware</b>: A few Laravel files overwritten by SurvLoop.</li>
        <li><b>Stats</b>: These classes are used by SurvLoop to manage the more complicated statistical needs, charts, and graphs.</li>
        <li><b>Tree</b>: This is really the core trunk of SurvLoop, classes which manage the branching trees which generate all surveys, pages, etc.</li>
    </ul>
    </li>
    <li><b>Database</b>: Includes migration and seeder files which Laravel can use to install SurvLoop.</li>
    <li><b>Models</b>: Copies of all the <a href="https://laravel.com/docs/5.8/eloquent" target="_blank">Eloquent Models</a> used by this package, generated by this same SurvLoop installation.</li>
    <li><b>Uploads</b>: Contains images and photos in SurvLoop\'s default media gallery, most are simply needed for SurvLoop branding.</li>
    <li><b>Views</b>: Includes <a href="https://laravel.com/docs/5.8/blade" target="_blank">Blade Templates</a> which are called by controllers, and where most of SurvLoop\'s HTML, Javascript, and CSS can be found. Templates for...
    <ul>
        <li><b>admin</b>: general SurvLoop-standard admin interfaces
        <ul>
            <li><b>db</b>: admin database design tools</li>
            <li><b>tree</b>: admin survey and page design tools</li>
        </ul>
        </li>
        <li><b>auth</b>: user authentication, customizing Laravel\'s style
        <ul>
            <li><b>passwords</b>: user password tools</li>
        </ul>
        </li>
        <li><b>css</b>: cascading style sheets for the SurvLoop engine</li>
        <li><b>elements</b>: smaller site design or usability elements</li>
        <li><b>emails</b>: sending emails via the installation</li>
        <li><b>errors</b>: web site error pages</li>
        <li><b>forms</b>: generating survey forms and compartmentalized input tools</li>
        <li><b>js</b>: javascript which runs lots of user experience for the SurvLoop engine</li>
        <li><b>reports</b>: generating reports, graphs, and geographic maps</li>
    </ul>
    </li>
</ul></li>
<li><b>tests</b>: Holding place to remind me to add as much unit testing as possible and appropriate.</li>
</ul>
<h4>wikiworldorder/survloop-libraries</h4>
<ul>
<li><b>src</b>: Third-party code libraries which SurvLoop incorporates.</li>
</ul>',
			'NodePromptAfter' => '<style> #treeWrap750 { margin-top: 30px; } </style>',
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
			'NodeParentID' => '751',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p><a href="/documentation"><b>Documentation Overview</b></a></p>
<p><a href="/how-to-install-survloop">How to install SurvLoop</a></p>',
			'NodeOpts' => '89'
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
			'NodeParentID' => '742',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark">Structure of Classes & Objects</h2>
<p>This section provides a top-level map of the <b>Controllers folder</b>, and how its most influential classes and objects relate to each other.</p>
<p>Some of these long chains of extensions were simply steps toward breaking up long files. I hope to keep splitting out functions which don\'t need to load in some thick trunks.</p>
<p><hr></p>
<p><b class="slBlueDark">Routes</b> are largely directed through...</p>
<ul>
<li><b>SurvLoop.php</b><ul><li>extends SurvCustLoop<ul><li>extends PageLoadUtils</li></ul></li></ul></li>
<li><b>Admin/AdminController</b><ul><ul><li>extends SurvLoopController</li><li>instantiates PageLoadUtils</li></ul></ul><ul>
<li>extended by Admin/AdminDatabaseInstall</li>
<li>extended by Admin/AdminDBController</li>
<li>extended by Admin/AdminTreeController<ul><li>instantiates Tree/TreeSurvAdmin</li></ul></li>
</ul></li>
</ul>
<p>Down the line, I hope to replace AdminDBController and AdminTreeController with admin-only SurvLoop-generated forms. And all other admin tools.</p>
<p><hr></p>
<p><b class="slBlueDark">The Globals</b> object primarily provides lookups and tools to be accessible from both Controllers and Views...</p>
<ul>
<li><b>Globals</b><ul><li>extends GlobalsImportExport<ul><li>extends GlobalsTables<ul><li>extends GlobalsStatic</li></ul></li></ul></li>
<li>instantiates Geographs</li></ul></li>
</ul>
<p><hr></p>
<p><b class="slBlueDark">The Tree Trunk</b> is the single largest block of the engine which generates all the surveys and pages for SurvLoop...</p>
<ul>
<li><b>Tree/TreeNodeSurv</b><ul><li>extends Tree/TreeNodeCore</li></ul></li>
<li><b>Tree/TreeSurvAdmin</b><ul><li>extends Tree/TreeSurvNodeEdit<ul><li>extends Tree/TreeSurvForm<ul><li>extends Tree/TreeSurvFormUtils<ul><li>extends Tree/TreeSurvFormLoops<ul><li>extends Tree/TreeSurvFormVarieties<ul><li>extends Tree/UserProfile<ul><li>extends Tree/TreeSurvInput<ul><li>extends Tree/TreeSurvUpload<ul><li>extends Tree/TreeSurv<ul><li>extends Tree/TreeSurvReport<ul><li>extends Tree/TreeSurvBasicNav<ul><li>extends Tree/TreeSurvProgBar<ul><li>extends Tree/TreeSurvLoad<ul><li>extends Tree/TreeSurvConds<ul><li>extends Tree/TreeSurvAPI<ul><li>extends Tree/TreeCoreSess<ul><li>extends Tree/TreeCore<ul><li>extends SurvLoopController</li></ul></li></ul></li></ul></li></ul></li><li>instantiates Tree/SurvData<ul><li>instantiates SurvDataTestsAB</li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li></ul></li>
</ul>
<p><hr></p>
<p><b>The Stats Engine</b> is hopefully most often called by a tree...</p>
<ul>
<li><b>SurvStatsGraph</b><ul><li>extends SurvStatsChart<ul><li>extends SurvStats<ul><li>extends SurvStatsCache<ul><li>extends SurvStatsFilts<ul><li>extends SurvStatsCore</li></ul></li></ul></li></ul></li></ul></li></ul></li>
<li><b>SurvTrends</b><ul><li>extends SurvStatsCore</li></ul></li>
</ul>
<p><hr></p>
<ul>
<li><b class="slBlueDark">SurvLoopController</b><ul><li>instantiates <b>Searcher</b></li><li>instantiates <b>Globals</b></li><li>instantiates <b>Tree Trunk</b> (client or TreeSurvForm)</li></ul></li>
</ul>
<p><hr></p>
<h4 class="slBlueDark">Client Packages</h4>
<p>A client package running atop the SurvLoop engine might extend these classes as well...</p>
<ul>
<li><b>Client/Client</b><ul><li>extends SurvLoop/Tree/TreeSurvForm</li></ul></li>
<li><b>Client/ClientAdminMenu</b><ul><li>extends SurvLoop/Admin/AdminMenu</li></ul></li>
<li><b>Client/ClientAdmin</b><ul><li>extends SurvLoop/Admin/AdminController</li></ul></li>
<li><b>Client/ClientSearcher</b><ul><li>extends SurvLoop/Searcher</li></ul></li>
</ul>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 858,
			'NodeTree' => '5',
			'NodeParentID' => '42',
			'NodeType' => 'Page Block',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 871,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '6',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<br />'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 940,
			'NodeTree' => '5',
			'NodeParentID' => '40',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h3>SurvLoop Origins</h3>
<p>This started as a database design system developed to plan the <a href="https://github.com/flexyourrights/openpolice">Open Police Complaints (OPC)</a> web app. It was built to track through database specifications, even if the software hasn\'t been built out enough to automatically enforce the long tail of rules.</p>
<p>OPC\'s co-creator Steve and I spent six months just designing the database of a few hundred possible questions which should probably be asked of victims of police misconduct. Once we finally had a grapple on what to ask, I started mocking up what the survey could look like.</p>
<p>But that too was complex enough that I incrementally started automating my survey mockup. Attracted to the usefulness of integrating a survey engine with the database design tools, and without significant funding for the project, I started building OPC and SurvLoop.</p>
<p>I knew the data being stored would be more important than I\'m used to, so knew I need to finally build atop a trusted coding framework. I chose Laravel based on advice of friends, and WOW I\'m pleased with it!</p>
<p>OPC is now beta testing, and feedback on that project and the SurvLoop user experience can be via the end of the submission process:<br /> <a href="http://openpolice.org/test">http://openpolice.org/test</a><br /> <br />The resulting database designed using the engine, as well as the branching tree which specifies the user\'s experience: <a href="https://openpolice.org/db/OP">/db/OP</a><br /> <a href="https://openpolice.org/tree/complaint">/tree/complaint</a><br /><br /> Among other methods, the resulting data can also be provided as XML included an automatically generated schema, eg.<br /> <a href="https://openpolice.org/complaint-xml-schema">/complaint-xml-schema</a><br /> <a href="https://openpolice.org/complaint-xml-example">/complaint-xml-example</a><br /> <a href="https://openpolice.org/complaint-xml-all">/complaint-xml-all</a></p>',
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
			'NodeParentID' => '986',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p><a href="https://survloop.org/documentation"><b>Documentation Overview</b></a></p>
<p><a href="/how-to-install-survloop">How to install SurvLoop <span class="fPerc80"><nobr>(after installing Laravel)</nobr></span></a></p>
<p><a href="/how-to-install-laravel-on-a-digital-ocean-server">How To Install Laravel On A <nobr>Digital Ocean</nobr> Server</a></p>',
			'NodeOpts' => '89'
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
			'NodeParentID' => '1050',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p><a href="https://survloop.org/documentation"><b>Documentation Overview</b></a></p>
<p><a href="/how-to-install-survloop">How to install SurvLoop <span class="fPerc80"><nobr>(after installing Laravel)</nobr></span></a></p>
<p><a href="/how-to-install-laravel-locally-on-a-mac">How to install Laravel locally <nobr>on a Mac</nobr></a></p>',
			'NodeOpts' => '89'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1340,
			'NodeTree' => '24',
			'NodeParentID' => '622',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark">Installation</h2>
<p><br /></p>
<h4>1) Prep Server/Environment</h4>
<div class="row mT20"><div class="col-6">
<a href="/how-to-install-laravel-locally-on-a-mac" class="btn btn-lg btn-primary btn-block">How to install Laravel locally <nobr>with Homestead</nobr></a>
</div><div class="col-6">
<a href="/how-to-install-laravel-on-a-digital-ocean-server" class="btn btn-lg btn-primary btn-block">How to install Laravel on a <nobr>Digital Ocean server</nobr></a>
</div></div>
<p><br /></p>
<h4>2) Install SurvLoop</h3>
<a href="/how-to-install-survloop" class="btn btn-lg btn-xl btn-primary btn-block mT20">How to install SurvLoop</a>',
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
			'NodeID' => 1397,
			'NodeTree' => '1',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
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