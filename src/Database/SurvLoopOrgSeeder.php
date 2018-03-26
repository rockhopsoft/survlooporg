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
			'DbTables' => '2',
			'DbFields' => '17'
		]);
		DB::table('SL_Databases')->insert([
			'DbID' => 3,
			'DbUser' => '0',
			'DbPrefix' => 'SL_',
			'DbName' => 'SurvLoop',
			'DbDesc' => 'All The Data Are Belong',
			'DbMission' => 'Empower you to design your complex databases, collect data with an easy user experience, and create an API to share the data with the world!',
			'DbTables' => '29',
			'DbFields' => '213'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 3,
			'TblDatabase' => '3',
			'TblAbbr' => 'Tweak',
			'TblName' => 'DesignTweaks',
			'TblEng' => 'Design Tweaks',
			'TblDesc' => 'Represents one modification to the existing database and user experience designs in SurvLoop. Information stored here is important for tracking history of changes and success of A/B testing in the user experience. This is the Core Data Table of SurvLoop\'s naked installation.',
			'TblGroup' => 'Users',
			'TblOrd' => '16',
			'TblNumFields' => '7',
			'TblNumForeignKeys' => '2',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 4,
			'TblDatabase' => '3',
			'TblAbbr' => 'Db',
			'TblName' => 'Databases',
			'TblEng' => 'Databases',
			'TblDesc' => 'Each record represents one Database being designed in SurvLoop, a collection of Tables, Fields, Definitions, and Business Rules often owned by a User. Information stored here can define core system settings.',
			'TblGroup' => 'Databases',
			'TblNumFields' => '8',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '7'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 5,
			'TblDatabase' => '3',
			'TblAbbr' => 'Tree',
			'TblName' => 'Tree',
			'TblEng' => 'Experiences',
			'TblDesc' => 'Each User Experience represents one collection of Nodes which one specific survey  process. Nodes are connected to each other to form a branching Tree which define all the details of this Experience. Often owned by a User, information stored here can define core system settings. ',
			'TblGroup' => 'Experiences',
			'TblOrd' => '5',
			'TblNumFields' => '12',
			'TblNumForeignKeys' => '7',
			'TblNumForeignIn' => '10'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 6,
			'TblDatabase' => '3',
			'TblAbbr' => 'Rule',
			'TblName' => 'BusRules',
			'TblEng' => 'Business Rules',
			'TblDesc' => 'Each record represents one Business Rule which specifies certain requirements to be maintained in the Database. Implementing the Rules defined here is important for maintaining data integrity.',
			'TblGroup' => 'Databases',
			'TblOrd' => '4',
			'TblNumFields' => '12',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 7,
			'TblDatabase' => '3',
			'TblAbbr' => 'Def',
			'TblName' => 'Definitions',
			'TblEng' => 'Definitions',
			'TblDesc' => 'Includes lists of possible ranges of values for various data Fields throughout the database, and other system settings. This is important for providing dynamic storage for key system terminology which may infrequently change.',
			'TblGroup' => 'Databases',
			'TblOrd' => '3',
			'TblNumFields' => '7',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 9,
			'TblDatabase' => '3',
			'TblAbbr' => 'Tbl',
			'TblName' => 'Tables',
			'TblEng' => 'Database Tables',
			'TblDesc' => 'Each record represents one Table in the Database, which is a collection of any number of Fields.',
			'TblGroup' => 'Databases',
			'TblOrd' => '1',
			'TblNumFields' => '14',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '6'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 10,
			'TblDatabase' => '3',
			'TblAbbr' => 'Fld',
			'TblName' => 'Fields',
			'TblEng' => 'Database Fields',
			'TblDesc' => 'Each record represents one data Field where specific information will be stored in the completed Database.',
			'TblNotes' => 'Notes assigned to these Field specifications are used as helpful tool-tip resources power users.',
			'TblGroup' => 'Databases',
			'TblOrd' => '2',
			'TblNumFields' => '39',
			'TblNumForeignKeys' => '4',
			'TblNumForeignIn' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 11,
			'TblDatabase' => '3',
			'TblAbbr' => 'Cond',
			'TblName' => 'Conditions',
			'TblEng' => 'Conditions',
			'TblDesc' => 'Each record represents one specific Condition used to filter Database submissions. These are important for determining which Nodes to include during a User\'s Experience, and which finished submissions to include in public queries.',
			'TblGroup' => 'Experiences',
			'TblOrd' => '8',
			'TblNumFields' => '9',
			'TblNumForeignKeys' => '4',
			'TblNumForeignIn' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 12,
			'TblDatabase' => '3',
			'TblAbbr' => 'Article',
			'TblName' => 'ConditionsArticles',
			'TblEng' => 'Condition Articles',
			'TblDesc' => 'Each record represents one Article which provides more information regarding Experience submissions which meet a Condition\'s requirements. This is important for provident automated, educational information to Users and the public. ',
			'TblType' => 'Subset',
			'TblGroup' => 'Experiences',
			'TblOrd' => '11',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 13,
			'TblDatabase' => '3',
			'TblAbbr' => 'CondNode',
			'TblName' => 'ConditionsNodes',
			'TblEng' => 'Condition Nodes',
			'TblDesc' => 'Each record represents a linkage between one Node or one Data Loop within this Experience. ',
			'TblType' => 'Linking',
			'TblGroup' => 'Experiences',
			'TblOrd' => '10',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '3',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 14,
			'TblDatabase' => '3',
			'TblAbbr' => 'CondVal',
			'TblName' => 'ConditionsVals',
			'TblEng' => 'Condition Values',
			'TblDesc' => 'Each record represents one Value to be compared with a User\'s Response when testing a specific Condition. This is important for comparing among a range of values. ',
			'TblType' => 'Subset',
			'TblGroup' => 'Experiences',
			'TblOrd' => '9',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 15,
			'TblDatabase' => '3',
			'TblAbbr' => 'Node',
			'TblName' => 'Node',
			'TblEng' => 'Experience Nodes',
			'TblDesc' => 'Each record represents one Node in the branching Tree, defining the critical details of each User\'s unique Experience. Each Node could represent the start of a new branch of the Tree, a new question asked of a User, or a new page which will ask multiple questions.',
			'TblGroup' => 'Experiences',
			'TblOrd' => '6',
			'TblNumFields' => '17',
			'TblNumForeignKeys' => '2',
			'TblNumForeignIn' => '12'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 16,
			'TblDatabase' => '3',
			'TblAbbr' => 'NodeRes',
			'TblName' => 'NodeResponses',
			'TblEng' => 'Node Responses',
			'TblDesc' => 'Each record represents one Response presented to the User when prompted by a specific Node.',
			'TblType' => 'Subset',
			'TblGroup' => 'Experiences',
			'TblOrd' => '7',
			'TblNumFields' => '5',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 17,
			'TblDatabase' => '3',
			'TblAbbr' => 'NodeSave',
			'TblName' => 'NodeSaves',
			'TblEng' => 'Node Saves',
			'TblDesc' => 'Each record represents one User\'s Response to a specific Node during a specific Session. Among other quality control, this is important for comparing the efficacy of various A/B testing in the user experience.',
			'TblGroup' => 'Users',
			'TblOrd' => '19',
			'TblNumFields' => '6',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 18,
			'TblDatabase' => '3',
			'TblAbbr' => 'PageSave',
			'TblName' => 'NodeSavesPage',
			'TblEng' => 'Page Saves',
			'TblDesc' => 'Each record represents one timestamp of a User\'s submission of a specific Page Node during a specific Session. This is important for quickly checking or reviewing the progress of Users through an Experience.',
			'TblGroup' => 'Users',
			'TblOrd' => '20',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 19,
			'TblDatabase' => '3',
			'TblAbbr' => 'Sess',
			'TblName' => 'Sess',
			'TblEng' => 'User Session',
			'TblDesc' => 'Each record represents one User\'s Session while going through an Experience. This is important for saving a User\'s progress if they have to complete an Experience over the course of multiple browser sessions.',
			'TblGroup' => 'Users',
			'TblOrd' => '17',
			'TblNumFields' => '9',
			'TblNumForeignKeys' => '6',
			'TblNumForeignIn' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 20,
			'TblDatabase' => '3',
			'TblAbbr' => 'SessLoop',
			'TblName' => 'SessLoops',
			'TblEng' => 'Session Loops',
			'TblDesc' => 'Each record represents one User\'s current Data Loop Item which they are editing, as related to their current Session. This is important for saving a User\'s progress if they have to complete an Experience over the course of multiple browser sessions.',
			'TblType' => 'Subset',
			'TblGroup' => 'Users',
			'TblOrd' => '18',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 21,
			'TblDatabase' => '3',
			'TblAbbr' => 'UserAct',
			'TblName' => 'UsersActivity',
			'TblEng' => 'User Activity',
			'TblDesc' => 'Each record represents one log entry of a User\'s Activity, important for tracking system usage.',
			'TblType' => 'Validation',
			'TblGroup' => 'Logs',
			'TblOrd' => '22',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 22,
			'TblDatabase' => '3',
			'TblAbbr' => 'RoleUser',
			'TblName' => 'UsersRoles',
			'TblEng' => 'User Roles',
			'TblDesc' => 'Each record represents one linkage between a Laravel system User and a User Role as defined by it\'s unique ID in the Definitions table. ',
			'TblType' => 'Linking',
			'TblGroup' => 'Users',
			'TblOrd' => '21',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 23,
			'TblDatabase' => '3',
			'TblAbbr' => 'Log',
			'TblName' => 'LogActions',
			'TblEng' => 'Log Actions',
			'TblDesc' => 'Each record represents one detailed Log entry of an Administrator\'s database design changes, important for keeping a history for undoing mistakes.',
			'TblType' => 'Validation',
			'TblGroup' => 'Logs',
			'TblOrd' => '23',
			'TblNumFields' => '7',
			'TblNumForeignKeys' => '4'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 24,
			'TblDatabase' => '3',
			'TblAbbr' => 'DataLoop',
			'TblName' => 'DataLoop',
			'TblEng' => 'Data Loops',
			'TblDesc' => 'Each record represents one Data Loop\'s full details. This is important for automating data relations for related Experiences.',
			'TblGroup' => 'Experiences',
			'TblOrd' => '12',
			'TblNumFields' => '12',
			'TblNumForeignKeys' => '2',
			'TblNumForeignIn' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 25,
			'TblDatabase' => '3',
			'TblAbbr' => 'DataLink',
			'TblName' => 'DataLinks',
			'TblEng' => 'Data Linkage Tables',
			'TblDesc' => 'Each record represents one linkage between one Database Table and a second Table which don\'t require a hierarchical relationship. This is important for automating data relations for related Experiences.',
			'TblType' => 'Linking',
			'TblGroup' => 'Experiences',
			'TblOrd' => '15',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 26,
			'TblDatabase' => '3',
			'TblAbbr' => 'DataSub',
			'TblName' => 'DataSubsets',
			'TblEng' => 'Data Subset Tables',
			'TblDesc' => 'Each record represents one linkage between one Database Table and a Subset Table which pulls in one related secondary record of detailed information. This is important for automating data relations for related Experiences.',
			'TblType' => 'Linking',
			'TblGroup' => 'Experiences',
			'TblOrd' => '13',
			'TblNumFields' => '6',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 27,
			'TblDatabase' => '3',
			'TblAbbr' => 'DataHelp',
			'TblName' => 'DataHelpers',
			'TblEng' => 'Data Helper Tables',
			'TblDesc' => 'Each record represents one linkage between one Database Table and a Helper Table which can store multiple checkbox responses or relate many secondary records to the primary. This is important for automating data relations for related Experiences.',
			'TblType' => 'Linking',
			'TblGroup' => 'Experiences',
			'TblOrd' => '14',
			'TblNumFields' => '5',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 28,
			'TblDatabase' => '3',
			'TblAbbr' => 'User',
			'TblName' => 'Users',
			'TblEng' => 'Users',
			'TblDesc' => 'This represents the Laravel Users table, but will not actually be implemented by SurvLoop as part of the database installation.',
			'TblOrd' => '24',
			'TblNumForeignIn' => '9'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 29,
			'TblDatabase' => '1',
			'TblAbbr' => 'Inst',
			'TblName' => 'Installations',
			'TblEng' => 'SurvLoop Installations',
			'TblDesc' => 'This represents each website or system which is currently powered by SurvLoop.',
			'TblNumFields' => '10',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 30,
			'TblDatabase' => '1',
			'TblName' => 'users',
			'TblEng' => 'Users',
			'TblDesc' => 'This represents the Laravel Users table, but will not actually be implemented by SurvLoop as part of the database installation.',
			'TblGroup' => 'DrugStory Users',
			'TblOrd' => '15',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 31,
			'TblDatabase' => '3',
			'TblAbbr' => 'Cont',
			'TblName' => 'Contact',
			'TblEng' => 'Contact Form',
			'TblDesc' => 'Each record represents one complete submission of the default Contact Form.',
			'TblGroup' => 'Users',
			'TblNumFields' => '5'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 32,
			'TblDatabase' => '3',
			'TblAbbr' => 'SchRecDmp',
			'TblName' => 'SearchRecDump',
			'TblEng' => 'Searchable Record Dump',
			'TblDesc' => 'Each record stores a cache of all data from a specific complex record, including English translations for Definition IDs, etc. This is very useful for running text searches across all Experience submissions.',
			'TblType' => 'Validation',
			'TblGroup' => 'Experiences',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 33,
			'TblDatabase' => '3',
			'TblAbbr' => 'SessEmo',
			'TblName' => 'SessEmojis',
			'TblEng' => 'Session Emojis',
			'TblDesc' => 'Each record stores one tag of one submission, by one user. This enables users to interact and provide feedback on completed Experience submissions, and to prevent users from tagging more than once.',
			'TblType' => 'Linking',
			'TblGroup' => 'Experiences',
			'TblNumFields' => '4',
			'TblNumForeignKeys' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 34,
			'TblDatabase' => '3',
			'TblAbbr' => 'Tok',
			'TblName' => 'Tokens',
			'TblEng' => 'Tokens',
			'TblDesc' => 'Each record one security token, of various types, which can be sent to a user to confirms some action or grant some access with greater security.',
			'TblGroup' => 'Users',
			'TblNumFields' => '5',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1,
			'FldDatabase' => '3',
			'FldTable' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'User',
			'FldEng' => 'Database Owner User ID',
			'FldDesc' => 'Indicates the unique User ID number belonging to the owner of this Database.',
			'FldForeignTable' => '28',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 2,
			'FldDatabase' => '3',
			'FldTable' => '4',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Prefix',
			'FldEng' => 'Database Prefix',
			'FldDesc' => 'Indicates the short abbreviation which is used to start each Table Name within this Database. This is important for successfully creating and accessing all Database Tables.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '25',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 3,
			'FldDatabase' => '3',
			'FldTable' => '4',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Database Name',
			'FldDesc' => 'Indicates the main, casual, name of the Database in English.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 4,
			'FldDatabase' => '3',
			'FldTable' => '4',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Desc',
			'FldEng' => 'Database Description',
			'FldDesc' => 'Indicates the short tagline which is used to describe this Database. This is generally related to Search Engine Optimization.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 5,
			'FldDatabase' => '3',
			'FldTable' => '4',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Mission',
			'FldEng' => 'Database Mission',
			'FldDesc' => 'Indicates the desired goals to be accomplished with this Database. This is important for reminding Users why they are using this system.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 6,
			'FldDatabase' => '3',
			'FldTable' => '4',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Tables',
			'FldEng' => 'Total Tables',
			'FldDesc' => 'Indicates the cached total number of Tables which make up this Database.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 7,
			'FldDatabase' => '3',
			'FldTable' => '4',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'Fields',
			'FldEng' => 'Total Fields',
			'FldDesc' => 'Indicates the cached total number of Fields which make up this Database.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 8,
			'FldDatabase' => '3',
			'FldTable' => '4',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Database Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark specific qualities of this Database.',
			'FldNotes' => '%3 = Simple Field Specifications',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 9,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'Database',
			'FldEng' => 'Table Database ID',
			'FldDesc' => 'Indicates the unique Database ID number which this Table belongs to.',
			'FldForeignTable' => '4',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Eng',
			'FldEng' => 'Table Name (in English)',
			'FldDesc' => 'Indicates the main, casual, name of the Database Table in English.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 11,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Table Name (in Database)',
			'FldDesc' => 'Indicates the shorter Table Name without spaces or special characters which is used to technically identify this Table when accessing its records in the Database. During system use, the Database\'s Prefix will be added to the start of the Table Name in this record.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 12,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Abbr',
			'FldEng' => 'Table Prefix',
			'FldDesc' => 'Indicates the short abbreviation which is used to start each Field Name within this Table. This is important for successfully creating and accessing all Table Fields.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 13,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Desc',
			'FldEng' => 'Table Description',
			'FldDesc' => 'Indicates the full description of this Database Table. This should generally be a sentence or two describing what information is stored in a Table, why it is important, and perhaps why this information is being organized in the form of this Table. ',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 14,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Notes',
			'FldEng' => 'Table Internal Notes',
			'FldDesc' => 'Indicates the any important Notes related to this Database Table. This can be important for providing documentation or other internal comments about how or why this Table was designed in this way.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 15,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'Group',
			'FldEng' => 'Table Group',
			'FldDesc' => 'Indicates which Group of Table this record belongs to. This can be important for visually organizing Tables, and works best if Tables in the same Table Group are all adjacent in the Table Order within the Database.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 16,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Table Type',
			'FldDesc' => 'Indicates whether this Database Table stores Data, Subset data, data Linkages, or data Validation. This is important for internal organization and documentation of the Database Design.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Data;Subset;Linking;Validation',
			'FldDefault' => 'Data',
			'FldDataLength' => '25',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 17,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'Ord',
			'FldEng' => 'Table Sorting Order',
			'FldDesc' => 'Indicates the indexed order of this Table, relative to other Tables in the Database. This is only important for presenting the list of Tables to a Database Designer, and additional value can be added by using Table Groups.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 18,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Table Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark specific qualities of this Table.',
			'FldNotes' => '%3 = Table Has User-Defined Primary Key',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800',
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 19,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'Active',
			'FldEng' => 'Is Active',
			'FldDesc' => 'Indicates whether or not this Database Table is currently active in the system. This is important for removing Tables from the system without deleting them, temporarily or permanently.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 20,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'NumFields',
			'FldEng' => 'Total Fields',
			'FldDesc' => 'Indicates the cached total number of Fields which make up this Table.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 21,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'NumForeignKeys',
			'FldEng' => 'Total Foreign Keys Outgoing',
			'FldDesc' => 'Indicates the cached total number of Foreign Fields in this Table which point to other Database Tables.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 22,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'NumForeignIn',
			'FldEng' => 'Total Foreign Keys Incoming',
			'FldDesc' => 'Indicates the cached total number of Foreign Fields in other Tables which point to this Database Table.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 23,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'Database',
			'FldEng' => 'Field Database ID',
			'FldDesc' => 'Indicates the unique Database ID number which this Field belongs to. This is important to track for generic fields which are not related to a specific Database Table.',
			'FldForeignTable' => '4',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 24,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Table',
			'FldEng' => 'Field Table ID',
			'FldDesc' => 'Indicates the unique Table ID number which this Field belongs to.',
			'FldNotes' => 'The parent table where this field is used. Only Generic fields have no table assigned. (Hernandez p.279)',
			'FldForeignTable' => '9',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 25,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Ord',
			'FldEng' => 'Field Sorting Order in Table',
			'FldDesc' => 'Indicates the indexed order of this Field, relative to other Fields within their Database Table. This is only important for presenting the list of Fields to a Database Designer.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 26,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Eng',
			'FldEng' => 'Field Name (in English)',
			'FldDesc' => 'Indicates the main, casual, name of the Database Field in English.',
			'FldNotes' => 'This label is an alternate name by which you can identify the field within an end-user application interface. Something readable. (Hernandez p.279)',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 27,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Field Name (in Database)',
			'FldDesc' => 'Indicates the shorter Field Name without spaces or special characters which is used to technically identify this Field when accessing its stored values in the Database. During system use, the Table\'s Prefix will be added to the start of the Field Name in this record.',
			'FldNotes' => 'Absolute minimal words that uniquely identifies this field, following database requirements (like probably no spaces). The table abbreviation name will be tacked on to the beginning. (Hernandez p.277)',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 28,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'Desc',
			'FldEng' => 'Field Description',
			'FldDesc' => 'Indicates the full description of this Database Field. This should generally be a sentence or two describing what information is stored in this Field, and why it is important.',
			'FldNotes' => 'A complete interpretation of the field. Write a clear and succinct statement that accurately identifies the field and clearly states its purpose within the table. Avoid technical jargon, acronyms, abbreviations, and implementation-specific information. (Hernandez p.283)',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 29,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'Notes',
			'FldEng' => 'Field Internal Notes',
			'FldDesc' => 'Indicates the any important Notes related to this Database Field. This can be important for providing documentation or other internal comments about how or why this Field was designed in this way, or where a list of potentially stored values came from.',
			'FldNotes' => 'Extra space for internal notes, often reserved for implementation-specific information, or planning in progress.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 30,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '18',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'MySQL Data Type',
			'FldDesc' => 'Indicates which basic MySQL type of data will be stored with this Database Field. This is important for determining how to export the database or otherwise install it to MySQL-based environments.',
			'FldNotes' => 'MySQL implementation-specific field type, needed for one-click database structure export. <i>(NOT Hernandez approved planning.)</i>',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => 'VARCHAR',
			'FldDataLength' => '25',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 31,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'ForeignTable',
			'FldEng' => 'Foreign Key Table ID',
			'FldDesc' => 'If this Field is a Foreign Key pointing to another Database Table, then this is where that unique Table ID is stored. This is important for tracking data linkages through the Database Design.',
			'FldForeignTable' => '9',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '11',
			'FldDefault' => '-3',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 32,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'Foreign2Max',
			'FldEng' => 'Degree of Participation: Incoming Max',
			'FldDesc' => 'If this Field record defines a Foreign Key, then this helps indicate its degree of participation, the maximum number of a Foreign Table\'s records which can be related to a single record of this Table. This is important for documenting and enforcing logical limitations designed with the Database.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '1',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 33,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'ForeignMin',
			'FldEng' => 'Degree of Participation: Outgoing Min',
			'FldDesc' => 'If this Field record defines a Foreign Key, then this helps indicate its degree of participation, the minimum number of this Table\'s records which can be related to a single record of the Foreign Table. This is important for documenting and enforcing logical limitations designed with the Database.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '1',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 34,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'ForeignMax',
			'FldEng' => 'Degree of Participation: Outgoing Max',
			'FldDesc' => 'If this Field record defines a Foreign Key, then this helps indicate its degree of participation, the maximum number of this Table\'s records which can be related to a single record of the Foreign Table. This is important for documenting and enforcing logical limitations designed with the Database.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '1',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 35,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'Foreign2Min',
			'FldEng' => 'Degree of Participation: Incoming Min',
			'FldDesc' => 'If this Field record defines a Foreign Key, then this helps indicate its degree of participation, the minimum number of a Foreign Table\'s records which can be related to a single record of this Table. This is important for documenting and enforcing logical limitations designed with the Database.',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '1',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 36,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'Values',
			'FldEng' => 'Field Values',
			'FldDesc' => 'Storing information here indicates that this Database Field can only be set to a specified range of values, separated by semi-colons. (* This field needs to be replaced by a helper table which stores each value as its own record, or perhaps preferably using the Definitions table. *)',
			'FldNotes' => 'Specifies every possible valid value for a field. You can optionally select a pre-definined value set which is common among various fields. (Hernandez p.294)',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 37,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '17',
			'FldSpecSource' => '0',
			'FldName' => 'IsIndex',
			'FldEng' => 'Is Indexed',
			'FldDesc' => 'Indicates whether or not this Field is to be indexed by the Database for faster searching of this specific field. This is important for ideal Database creation.',
			'FldNotes' => 'When this project is finished, will this field be searched or sorted very very often? A database index is a data structure that improves the speed of data retrieval operations on a database table at the cost of additional writes and storage space to maintain the index data structure. <i>(NOT Hernandez approved planning.)</i>',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => '0;1',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 38,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'Default',
			'FldEng' => 'Default Value',
			'FldDesc' => 'Indicates the default value for this specific Field, when a new Table record is first created.',
			'FldNotes' => 'A value that a user can into a field when a more appropriate value is not yet available, nulls not allowed. Use a default value ONLY if it is meaningful. (Hernandez p.294)',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 39,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'SpecType',
			'FldEng' => 'Field Specification Type',
			'FldDesc' => 'Indicates whether this Database Field specification is Unique Field to this Table\'s instance, or is a Replica Field of a Generic Field shared by multiple Tables, or is itself a Generic Field. This can be important for documenting which Fields might need to maintain parallel changes in their specifications.',
			'FldNotes' => 'Unique - any kind of field that will appear only once within the entire database or a primary key; Generic - a field that serves as a template for other fields within the database; Replica - a field that you base on a given generic field or a foreign key; (Hernandez p.279)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Unique;Generic;Replica',
			'FldDefault' => 'Unique',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 40,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'SpecSource',
			'FldEng' => 'Field Spec Generic Source',
			'FldDesc' => 'If this record specification type indicates that it stores a Replica Field, then this information represents the unique Field ID of related the Generic Field.',
			'FldNotes' => 'If this field is a Replica, the Specification Source is set to the Generic field which it mimics. To turn this field into a Replica, select a Generic field from the dropdown and click the Load link. To save a copy of this field as a Generic for future reuse, click the Save As Generic link. (Hernandez p.281)',
			'FldForeignTable' => '10',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldDefault' => '-3',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 41,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'Alias',
			'FldEng' => 'Field Alias(es)',
			'FldDesc' => 'Indicates any other names this specific Field might be known as.',
			'FldNotes' => 'A name (or set of names) that you use for the field in very rare circumstances. This must be used if there are two occurrences of this field in the same table. (Hernandez p.281)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 42,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '19',
			'FldSpecSource' => '0',
			'FldName' => 'DataType',
			'FldEng' => 'Basic Data Type',
			'FldDesc' => 'Indicates the most basic nature of the data being stored by this Field, whether .',
			'FldNotes' => 'The most basic nature of the data that this field stores (not implementation-specific). (Hernandez p.286)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Alphanumeric;Numeric;DateTime',
			'FldDefault' => 'Alphanumeric',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 43,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '20',
			'FldSpecSource' => '0',
			'FldName' => 'DataLength',
			'FldEng' => 'Data Length',
			'FldDesc' => 'Indicates the total number of characters or digits that a user can enter for any stored value in this Database Field. This is important for ideal Database creation.',
			'FldNotes' => 'The total number of characters or digits that a user can enter for any given value of this field. If otherwise unimportant, this can be set to the maximum length for the best implementation-specific data type. (Hernandez p.289)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 44,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '21',
			'FldSpecSource' => '0',
			'FldName' => 'DataDecimals',
			'FldEng' => 'Data Decimal Places',
			'FldDesc' => 'If this Field\'s basic data type is numeric, then this denotes the number of digits to the right of the decimal point in real numbers which can be stored in this Database Field.',
			'FldNotes' => 'If this field is Numeric, this denotes the number of digits to the right of the decimal point in a real number (eg. MySQL DOUBLE). (Hernandez p.289)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 45,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '22',
			'FldSpecSource' => '0',
			'FldName' => 'CharSupport',
			'FldEng' => 'Character Support',
			'FldDesc' => 'Indicates the type of characters that a user can enter as a value for this Database Field. (* Multiple character types are currently stored as comma separated strings, but this should probably be some cleaner method. *)',
			'FldNotes' => 'The type of characters that a user can enter as a value for this field. Setting and enforcing this helps you ensure that the user cannot introduce meaningless data into the field, enhancing field-level integrity. Letters include foreign language letters. (Hernandez p.289)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Letters;Numbers;Keyboard;Special',
			'FldDefault' => ',Letters,Numbers,Keyboard,Special,',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 46,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '23',
			'FldSpecSource' => '0',
			'FldName' => 'InputMask',
			'FldEng' => 'Input Mask',
			'FldDesc' => 'Specifies the manner in which a user should enter data into this field. eg. YYYY-MM-DD',
			'FldNotes' => 'Specifies the manner in which a user should enter data into this field. eg. YYYY-MM-DD (Hernandez p.290)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 47,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '24',
			'FldSpecSource' => '0',
			'FldName' => 'DisplayFormat',
			'FldEng' => 'Display Format',
			'FldDesc' => 'Indicates the appearance of this Database Field\'s value when it is displayed on a screen or printed within a document.',
			'FldNotes' => 'The appearance of this field\'s value when it is displayed on a screen or printed within a document. (Hernandez p.291)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 48,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '25',
			'FldSpecSource' => '0',
			'FldName' => 'KeyType',
			'FldEng' => 'Key Type',
			'FldDesc' => 'Indicates whether or not this Field is some kind of Key in its parent Database Table, including Foreign Keys, Primary Keys, or Alternate Keys. By default, all SurvLoop Tables will automatically generate a Unique, Primary Key if no such Field is specified by the Database Designer. (* Multiple key types are currently stored as comma separated strings, but this should probably be some cleaner method. *)',
			'FldNotes' => 'Designates this field\'s role within a table. (Hernandez p.292)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Non;Foreign;Primary;Alternate',
			'FldDefault' => ',Non,',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 49,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '26',
			'FldSpecSource' => '0',
			'FldName' => 'KeyStruct',
			'FldEng' => 'Key Structure',
			'FldDesc' => 'If this Database Field is a Primary Key, then this indicates whether it is acting as a simple (single-field) primary key or as part of a composite (multi-field) primary key.',
			'FldNotes' => 'Denotes whether this field designated as a primary key is acting as a simple (single-field) primary key or as part of a composite (multi-field) primary key. (Hernandez p.292)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Simple;Composite',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 50,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '27',
			'FldSpecSource' => '0',
			'FldName' => 'EditRule',
			'FldEng' => 'Edit Rule',
			'FldDesc' => 'Indicates whether or not a Field\'s data can or must be store at the Table record\'s creation, and whether or not it can it be edited by Users later.',
			'FldNotes' => 'Enter Now - user must enter a value when creating a new table record; Enter Later - user has the option of entering value when creating table record; Edits Allowed - user can edit the value at any time; Edits Not Allowed - after entering a value, user cannot edit it at any time; (Hernandez p.295)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'NowAllowed;LateAllow;NowNot;LateNot;NotDeterm',
			'FldDefault' => 'LateAllow',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 51,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '28',
			'FldSpecSource' => '0',
			'FldName' => 'Unique',
			'FldEng' => 'Has Unique Value',
			'FldDesc' => 'Indicates whether this Database Field\'s values are unique across all Table records.',
			'FldNotes' => 'Indicates whether this field\'s values are unique (always for primary keys, rarely for everything else). (Hernandez p.292)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 52,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '29',
			'FldSpecSource' => '0',
			'FldName' => 'NullSupport',
			'FldEng' => 'Has NULL Support',
			'FldDesc' => 'Indicates whether or not this Database Field accepts NULL values to be stored, which should represent missing or unknown information.',
			'FldNotes' => 'Whether this field accepts null values (not allowed for primary keys). Null values should represent missing or unknown values. (Hernandez p.293)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 53,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '30',
			'FldSpecSource' => '0',
			'FldName' => 'ValuesEnteredBy',
			'FldEng' => 'Values Entered By',
			'FldDesc' => 'Indicates whether a User or the System enter information into this Database Field.',
			'FldNotes' => 'The source of this field\'s value. Either a user will enter values into the field manually or a database application program will enter them automatically. (Hernandez p.293)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'User;System',
			'FldDefault' => 'User',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 54,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '31',
			'FldSpecSource' => '0',
			'FldName' => 'Required',
			'FldEng' => 'Is Required',
			'FldDesc' => 'Indicates whether or not a User is required to enter a value for this Database Field.',
			'FldNotes' => 'Whether a user is required to enter a value for this field. No for most non-primary-key fields. (Hernandez p.294)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 55,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '33',
			'FldSpecSource' => '0',
			'FldName' => 'CompareOther',
			'FldEng' => 'Compare Other Field Value',
			'FldDesc' => 'Indicates the types of comparisons can be applied to a given field value when retrieving information from the other Fields in other Table records. Currently stored as the multiple of various prime numbers which represent the specific comparisons allowed.',
			'FldNotes' => 'The types of comparisons a user/system can apply to a given field value when retrieving information from the field. (Hernandez p.296)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 56,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '32',
			'FldSpecSource' => '0',
			'FldName' => 'CompareSame',
			'FldEng' => 'Compare Same Field Value',
			'FldDesc' => 'Indicates the types of comparisons can be applied to a given field value when retrieving information from the same Field in other Table records. Currently stored as the multiple of various prime numbers which represent the specific comparisons allowed.',
			'FldNotes' => 'The types of comparisons a user/system can apply to a given field value when retrieving information from the field. (Hernandez p.296)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800',
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 57,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '34',
			'FldSpecSource' => '0',
			'FldName' => 'CompareValue',
			'FldEng' => 'Compare Other Values',
			'FldDesc' => 'Indicates the types of comparisons can be applied to a given field value when retrieving information from the other values generally. Currently stored as the multiple of various prime numbers which represent the specific comparisons allowed.',
			'FldNotes' => 'The types of comparisons a user/system can apply to a given field value when retrieving information from the field. (Hernandez p.296)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 58,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '35',
			'FldSpecSource' => '0',
			'FldName' => 'OperateSame',
			'FldEng' => 'Operate with Same Field Value',
			'FldDesc' => 'Indicates the types of operations which can be applied to a given Field value with the same Field in other Table records. Currently stored as the multiple of various prime numbers which represent the specific comparisons allowed.',
			'FldNotes' => 'Specifies the types of operations that a user can perform on the values. (Hernandez p.298)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 59,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '36',
			'FldSpecSource' => '0',
			'FldName' => 'OperateOther',
			'FldEng' => 'Operate with Other Field Value',
			'FldDesc' => 'Indicates the types of operations which can be applied to a given Field value with the other Fields in other Table records. Currently stored as the multiple of various prime numbers which represent the specific comparisons allowed.',
			'FldNotes' => 'Specifies the types of operations that a user can perform on the values. (Hernandez p.298)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 60,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '37',
			'FldSpecSource' => '0',
			'FldName' => 'OperateValue',
			'FldEng' => 'Operate with Other Value',
			'FldDesc' => 'Indicates the types of operations which can be applied to a given Field value with the other values generally. Currently stored as the multiple of various prime numbers which represent the specific comparisons allowed.',
			'FldNotes' => 'Specifies the types of operations that a user can perform on the values. (Hernandez p.298)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 61,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '38',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Field Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark other specific qualities of this Field.',
			'FldNotes' => '%3 = Field Is Auto-Managed by SurvLoop; 
    %1 = XML Public Data; %7 = XML Private Data; %11 = XML Sensitive Data; %13 = XML Internal Use Data; ',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 62,
			'FldDatabase' => '3',
			'FldTable' => '7',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Set',
			'FldEng' => 'Set',
			'FldDesc' => 'This is a label for a set of system information which may need to be periodically changed by a system Administrator without the technical assistance of a programmer. Important for categorizing these dynamically stored system definitions.',
			'FldNotes' => 'Potential for multiple languages in the future?',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::SurvLoop Definition Types',
			'FldDefault' => 'Value Ranges',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 63,
			'FldDatabase' => '3',
			'FldTable' => '7',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Subset',
			'FldEng' => 'Subset',
			'FldDesc' => 'This is a label for a subset of system information which may need to be periodically changed by a system Administrator without the technical assistance of a programmer. Important for categorizing these dynamically stored system Definitions.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 64,
			'FldDatabase' => '3',
			'FldTable' => '7',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'IsActive',
			'FldEng' => 'Is Active',
			'FldDesc' => 'Indicates whether or not this Database Definition is currently active in the system. This is important for disabling Definitions from the system without deleting them, either temporarily or permanently.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 65,
			'FldDatabase' => '3',
			'FldTable' => '7',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Order',
			'FldEng' => 'Sorting Order in Subset',
			'FldDesc' => 'Indicates the indexed order of this Definition, relative to other Definitions within their Set and Subset of categorization. This is particularly important for providing order to the range of potential response values presented to Users.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 66,
			'FldDatabase' => '3',
			'FldTable' => '7',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Value',
			'FldEng' => 'Value',
			'FldDesc' => 'The dynamically stored text or value which Administrators can manage with a programmer. In the case of Value Ranges, this value is what a User will see, but the unique Definition ID will be stored as the User\'s response.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 67,
			'FldDatabase' => '3',
			'FldTable' => '7',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Description',
			'FldEng' => 'Description',
			'FldDesc' => 'The optional descriptive notes providing a deeper explanation of this specific Definition. For Value Ranges, this could also provide references and sources regarding the decision to include this Definition. Important for internal documentation and possibly User education.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 68,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Database',
			'FldEng' => 'Rule Database ID',
			'FldDesc' => 'Indicates the unique Database ID number which this Business Rule belongs to.',
			'FldForeignTable' => '4',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 69,
			'FldDatabase' => '3',
			'FldTable' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'Database',
			'FldEng' => 'Definition Database ID',
			'FldDesc' => 'Indicates the unique Database ID number which this Definition belongs to.',
			'FldForeignTable' => '4',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 70,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Statement',
			'FldEng' => 'Rule Statement',
			'FldDesc' => 'Indicates the text of the business rule itself, clear, succinct, and convey the required constraints in simple English.',
			'FldNotes' => 'The text of the business rule itself, clear, succinct, and convey the required constraints. (Hernandez p.409)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 71,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Constraint',
			'FldEng' => 'Rule Constraint',
			'FldDesc' => 'Indicates how the constraint specifically applies to the Database Tables and Fields, intended for a more technical audience.',
			'FldNotes' => 'A brief explanation of how the constraint applies to the tables and fields. (Hernandez p.409)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 72,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'IsAppOrient',
			'FldEng' => 'Is Implemented In Application',
			'FldDesc' => 'Indicates whether or not this Business Rule can be directly implemented within the logical design of the database (Database-Oriented). Application-Oriented Rules will have to be implemented with custom coding, outside the scope of SurvLoop\'s automation.',
			'FldNotes' => 'Database-Oriented: impose constraints that you can establish within the logical design of the database; Application-Oriented: impose constraints that you cannot establish within the logical design of the database. (Hernandez p.397)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 73,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'IsRelation',
			'FldEng' => 'Is Relationship-Specific',
			'FldDesc' => 'Indicates whether or not this Business Rule provides additional specifications to a Database Field in isolation, or to a Relationship multiple Fields or Tables.',
			'FldNotes' => 'Field-Specific and Relationship-Specific rules can be established in field specifications, but more details may be provided here if needed. (Hernandez p.399)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 74,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'TestOn',
			'FldEng' => 'Test Rule On',
			'FldDesc' => 'Indicates when the imposed Rule should be tested, whether upon inserting a new Table record, deleting a record, or updating a Field\'s value.',
			'FldNotes' => 'The constraint imposed should be tested when you attempt to perform: Inserting a record into the table or an entry into a field, Deleting a record from the table or a value within a field, or Updating a field\'s value. (Hernandez p.408)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Insert;Update;Delete',
			'FldDefault' => 'Insert',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 75,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Tables',
			'FldEng' => 'Rule Tables',
			'FldDesc' => 'Indicates a comma-separated list of unique Table IDs which this Rule will affect. (* This should be moved to a different data structure. *)',
			'FldNotes' => 'Designate the name of the field(s) and table(s) the rule will affect. (Hernandez p.410)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => ',',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 76,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Fields',
			'FldEng' => 'Rule Fields',
			'FldDesc' => 'Indicates a comma-separated list of unique Table IDs which this Rule will affect. (* This should be moved to a different data structure. *)',
			'FldNotes' => 'Designate the name of the field(s) and table(s) the rule will affect. (Hernandez p.410)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => ',',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 77,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'Phys',
			'FldEng' => 'Physical Elements Affected',
			'FldDesc' => 'Indicates the multiple of various prime numbers which represent physical data specifications related to this Rule, including Data Type, Length, Decimal Places, Character Support, Input Mask, and Display Format.
    ',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 78,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'Logic',
			'FldEng' => 'Logical Elements Affected',
			'FldDesc' => 'Indicates the multiple of various prime numbers which represent logical data specifications related to this Rule, including Key Type, Key Structure, Uniqueness, Null Support, Values Entered By, Required Value, Default Value, Range of Values, Comparisons Allowed, Operations Allowed, and Edit Rule.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 79,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'Rel',
			'FldEng' => 'Relationship Characteristics Affected',
			'FldDesc' => 'Indicates the multiple of various prime numbers which represent data relation specifications related to this Rule, including Deletion Rule, Type of Participation, Degree of Participation.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 80,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'Action',
			'FldEng' => 'Action Taken',
			'FldDesc' => 'Indicates what actions have been taken, or need to be taken, to implement and enforce this Business Rule.',
			'FldNotes' => 'Indicate the modifications made to field specifications, etc, as clearly as possible. (Hernandez p.)',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 81,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Database',
			'FldEng' => 'Primary Database ID',
			'FldDesc' => 'Indicates the unique Database ID number which this User Experience primarily belongs to.',
			'FldForeignTable' => '4',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 82,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'User',
			'FldEng' => 'Tree Owner User ID',
			'FldDesc' => 'Indicates the unique User ID number belonging to the owner of this User Experience or Tree.',
			'FldForeignTable' => '28',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 83,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Tree Type',
			'FldDesc' => 'Indicates whether this Tree (collection of Nodes) indeed maps out a User Experience, or if it provides a map of the Database Design for the creating XML documents automatically-generated by SurvLoop.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Primary Public;Primary Public XML',
			'FldDefault' => 'Primary Public',
			'FldDataLength' => '30',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 84,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Experience Name',
			'FldDesc' => 'Indicates the most succinct and clear name internally used to refer to this specific User Experience.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 85,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Desc',
			'FldEng' => 'Experience Description',
			'FldDesc' => 'Documents a longer description of the purpose, use, and importance of this specific User Experience.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 86,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Slug',
			'FldEng' => 'Experience URL',
			'FldDesc' => 'Indicates the URL for the starting page of this entire User Experience.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 87,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Root',
			'FldEng' => 'Root Node ID',
			'FldDesc' => 'Indicates the unique Experience Node ID of the first, Root Node of this entire User Experience. All other Nodes within this Tree are descendants of the Root Node.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 88,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'FirstPage',
			'FldEng' => 'First Page Node ID',
			'FldDesc' => 'Stores a cache of the unique Experience Node ID of this Tree\'s first Node which is a Page. This helps to quickly identify the URL of the first Page the user will experience.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 89,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'LastPage',
			'FldEng' => 'Last Page Node ID',
			'FldDesc' => 'Stores a cache of the unique Experience Node ID of this Tree\'s last Node which is a Page. This helps to quickly identify the URL of the final Page the user will experience.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 90,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'CoreTable',
			'FldEng' => 'Experience Core Data Table',
			'FldDesc' => 'Indicates the unique Table ID which acts as the backbone for all data collected throughout this entire User Experience.',
			'FldForeignTable' => '9',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 91,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'Tree',
			'FldEng' => 'Node Experience ID',
			'FldDesc' => 'Indicates the unique Experience ID number which this Tree Node belongs to.',
			'FldForeignTable' => '5',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 92,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'ParentID',
			'FldEng' => 'Parent Node ID',
			'FldDesc' => 'Indicates the unique Experience Node ID of this Node\'s parent Node. This linkage is the thread which connect all Nodes as branches of the entire Experience Tree.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldDefault' => '-3',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 93,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'ParentOrder',
			'FldEng' => 'Sibling Node Sorting Order',
			'FldDesc' => 'Indicates the indexed order of this Experience Node, relative to sibling Nodes which share the same Parent Node. This is how the branches of the entire Experience Tree stay sorted.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 94,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Node Type',
			'FldDesc' => 'Indicates whether this Experience Node represents either a branch (for navigation), a specific question to the User, a collection of questions as one page, a loop of many pages, or a specific manipulation of previously stored data. Question Nodes include Instructions, Radio, Checkbox, Drop Down, Text, Long Text, Text:Number, Email, Password, Date, Date Picker, Date Time, Time, Gender, Gender Not Sure, Feet Inches, U.S. States, Hidden Field, Spambot Honey Pot, Uploads, and Other/Custom. Nodes which are part of Trees which map XML output are of a separate XML Type.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Page;Branch Title;Loop Root;Data Manip: New;Data Manip: Update;Data Manip: Wrap;Instructions;Radio;Checkbox;Drop Down;Text;Long Text;Text:Number;Email;Password;Date;Date Picker;Date Time;Time;Gender;Gender Not Sure;Feet Inches;U.S. States;Hidden Field;Spambot Honey Pot;Uploads;Other/Custom;XML',
			'FldDataLength' => '25',
			'FldKeyType' => ',',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 95,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'PromptText',
			'FldEng' => 'Node Question/Prompt To User',
			'FldDesc' => 'Indicates the language used to prompt a User Response. For special Node Types like branches, pages, and loop roots, this field stores a title or name. For XML Nodes, this fields stores the name of the Database Table included in the mapped.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 96,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'PromptNotes',
			'FldEng' => 'Node Side-Notes To User',
			'FldDesc' => 'Indicates the language used to prompt a User Response. For special Node Types like branches, pages, and loop roots, this field stores the Node\'s URL slug. For XML Nodes, this fields stores the unique Table ID of the Database Table included in the mapped.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 97,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'PromptAfter',
			'FldEng' => 'Extra HTML After Node Response',
			'FldDesc' => 'Stores any extra HTML, CSS, or Javascript which a Database Designer wants to appear directly after the User\'s opportunity to Respond to a Node\'s Prompt.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 98,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'InternalNotes',
			'FldEng' => 'Internal Notes',
			'FldDesc' => 'Stores any internal notes which Experience Designers want to share.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 99,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'ResponseSet',
			'FldEng' => 'User Response Set',
			'FldDesc' => 'Indicates the range of options the User will be provided for Node which ask some kind of multiple-choice question. This includes "Definition::{DefSubset}", "LoopItems::{LoopName}", or "[Set:{TableName};;HideIf:1]", but most Question Nodes have Response Options stored in the Node Responses table.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 100,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'Default',
			'FldEng' => 'Default Response Value',
			'FldDesc' => 'Indicates if any of the Response options should be pre-selected when this Node loads for the User.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 101,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'DataBranch',
			'FldEng' => 'Node Data Branch',
			'FldDesc' => 'Indicates the name of the Database Table as a point of reference for this Node\'s data interactions, and all of its descendants.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Table ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 102,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'DataStore',
			'FldEng' => 'Node Data Field',
			'FldDesc' => 'Indicates the Database Table and Field where the User\'s Response will actually be stored.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Field ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldInputMask' => '{TableName}:{TableAbbr}{FieldName}',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 103,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'TextSuggest',
			'FldEng' => 'Response Text Suggest',
			'FldDesc' => 'Indicates an optional setting to suggest a response or instruction within this Node\'s open-ended form field.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 104,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'CharLimit',
			'FldEng' => 'Response Character Limit',
			'FldDesc' => 'Indicates the maximum number of characters a User may enter in Response to this Node\'s prompt.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 105,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Node Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark specific other qualities of this Node.',
			'FldNotes' => 'For XML Nodes... %5 = Include members with parent, without table wrap; %7 = Min 1 Record; %11 = Max 1 Record;',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 106,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'Dislikes',
			'FldEng' => 'Node Dislikes',
			'FldDesc' => 'For some systems, this indicates how many Users responded to this Node with "a dislike".',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 107,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'Likes',
			'FldEng' => 'Node Likes',
			'FldDesc' => 'For some systems, this indicates how many Users responded to this Node with "a like".',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 108,
			'FldDatabase' => '3',
			'FldTable' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'Node',
			'FldEng' => 'Response Node ID',
			'FldDesc' => 'Indicates the unique Experience Node ID number which this Node Response belongs to.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 109,
			'FldDatabase' => '3',
			'FldTable' => '16',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Ord',
			'FldEng' => 'Response Sorting Order',
			'FldDesc' => 'Indicates the indexed order of this Node Response, relative to other Response options for this Experience Node.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 110,
			'FldDatabase' => '3',
			'FldTable' => '16',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Eng',
			'FldEng' => 'Response Description',
			'FldDesc' => 'Describes this Node Response option clearly in English for the User.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 111,
			'FldDatabase' => '3',
			'FldTable' => '16',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Value',
			'FldEng' => 'Response Stored Value',
			'FldDesc' => 'Indicates how a User selection of this Node Response option should be stored in the Database.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 112,
			'FldDatabase' => '3',
			'FldTable' => '16',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'ShowKids',
			'FldEng' => 'Show Child Node If Selected',
			'FldDesc' => 'Indicates whether or not child Nodes should be revealed to the User upon selecting this specific Node Response option.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 113,
			'FldDatabase' => '3',
			'FldTable' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'Database',
			'FldEng' => 'Condition Database ID',
			'FldDesc' => 'Indicates the unique Database ID number which this Condition can be applied to.',
			'FldForeignTable' => '4',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 114,
			'FldDatabase' => '3',
			'FldTable' => '11',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Tag',
			'FldEng' => 'Condition Tag/Name',
			'FldDesc' => 'Indicates the short name, like a hashtag on social media, which is used both internally and publicly to easily identify this Condition/Filter.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldInputMask' => '#AAAAAAAAA',
			'FldDisplayFormat' => '#AAAAAAAAA',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 115,
			'FldDatabase' => '3',
			'FldTable' => '11',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Desc',
			'FldEng' => 'Condition Description',
			'FldDesc' => 'Describes this Condition/Filter in English, as accurately and succinctly as possible, for both internal and public use.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 116,
			'FldDatabase' => '3',
			'FldTable' => '11',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Operator',
			'FldEng' => 'Condition Operator',
			'FldDesc' => 'Indicates what type of testing to do as part of applying this Data Condition. This includes checking for User Responses within a specified range of values ( "{" ), outside a specified range of values ( "}" ), checking the number of records a Database Table has ( "EXISTS>" ), or "CUSTOM".',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '{',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 117,
			'FldDatabase' => '3',
			'FldTable' => '11',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'OperDeet',
			'FldEng' => 'Condition Operator Details',
			'FldDesc' => 'Indicates qualifying details to further specify this operator\'s requirements for this Condition. For "EXISTS>" Conditions, this stores the maximum number of Table records which can exist while passing this Condition as FALSE.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 118,
			'FldDatabase' => '3',
			'FldTable' => '11',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Field',
			'FldEng' => 'Database Field ID',
			'FldDesc' => 'Indicates the unique Field ID number for the data being tested in this Database Condition.',
			'FldForeignTable' => '10',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 119,
			'FldDatabase' => '3',
			'FldTable' => '11',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Table',
			'FldEng' => 'Database Table ID',
			'FldDesc' => 'Indicates the unique Table ID number for the data being tested in this Database Condition.',
			'FldForeignTable' => '9',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 120,
			'FldDatabase' => '3',
			'FldTable' => '11',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'Loop',
			'FldEng' => 'Data Loop ID',
			'FldDesc' => 'Indicates the unique Data Loop ID number for the data being tested in this Database Condition.',
			'FldForeignTable' => '24',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 121,
			'FldDatabase' => '3',
			'FldTable' => '11',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Condition Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark any other specific qualities of this Condition.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 122,
			'FldDatabase' => '3',
			'FldTable' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'CondID',
			'FldEng' => 'Value Condition ID',
			'FldDesc' => 'Indicates the unique Condition ID number which this Value option relates to.',
			'FldForeignTable' => '11',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 123,
			'FldDatabase' => '3',
			'FldTable' => '14',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Value',
			'FldEng' => 'Value Description',
			'FldDesc' => 'Indicates the actual User Response Value, which would be stored in the Database, associated with the  Condition related to this record.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 124,
			'FldDatabase' => '3',
			'FldTable' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'CondID',
			'FldEng' => 'Condition ID',
			'FldDesc' => 'Indicates the unique Condition ID number of the Condition being applied to an Experience Node or a Data Loop.',
			'FldForeignTable' => '11',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 125,
			'FldDatabase' => '3',
			'FldTable' => '13',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'NodeID',
			'FldEng' => 'Experience Node ID',
			'FldDesc' => 'Indicates the unique Experience Node ID number which this Condition has been applied to.',
			'FldForeignTable' => '13',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 126,
			'FldDatabase' => '3',
			'FldTable' => '13',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'LoopID',
			'FldEng' => 'Data Loop ID',
			'FldDesc' => 'Indicates the unique Data Loop ID number which this Condition has been applied to.',
			'FldForeignTable' => '24',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 127,
			'FldDatabase' => '3',
			'FldTable' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'CondID',
			'FldEng' => 'Article Condition ID',
			'FldDesc' => 'Indicates the unique Condition ID number of the Condition being associated with complementary information.',
			'FldForeignTable' => '12',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 128,
			'FldDatabase' => '3',
			'FldTable' => '12',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'URL',
			'FldEng' => 'Article URL',
			'FldDesc' => 'Indicates the URL of an Article which provides more information for Users with completed submissions meeting this related Condition/Filter.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 129,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldSpecSource' => '0',
			'FldName' => 'Tree',
			'FldEng' => 'Data Loop Experience ID',
			'FldDesc' => 'Indicates the unique Experience ID number of the User Experience for which this Data Loop is required.',
			'FldForeignTable' => '5',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 130,
			'FldDatabase' => '3',
			'FldTable' => '26',
			'FldSpecSource' => '0',
			'FldName' => 'Tree',
			'FldEng' => 'Data Link Experience ID',
			'FldDesc' => 'Indicates the unique Experience ID number of the User Experience for which this Data Subset is required.',
			'FldForeignTable' => '5',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 131,
			'FldDatabase' => '3',
			'FldTable' => '27',
			'FldSpecSource' => '0',
			'FldName' => 'Tree',
			'FldEng' => 'Data Link Experience ID',
			'FldDesc' => 'Indicates the unique Experience ID number of the User Experience for which this Data Helper is required.',
			'FldForeignTable' => '5',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 132,
			'FldDatabase' => '3',
			'FldTable' => '25',
			'FldSpecSource' => '0',
			'FldName' => 'Tree',
			'FldEng' => 'Data Link Experience ID',
			'FldDesc' => 'Indicates the unique Experience ID number of the User Experience for which this Data Link is required.',
			'FldForeignTable' => '5',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 133,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Root',
			'FldEng' => 'Root Node ID',
			'FldDesc' => 'Indicates the unique Node ID number of this Data Loop\'s Root Node. All of the descendants of this Data Loop\'s Root will be repeated until the User wants to continue past it, or Loop\'s constraints are exceeded.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 134,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Plural',
			'FldEng' => 'Plural Name For Items In Loop',
			'FldDesc' => 'Indicates the way to describe multiple Items in this Data Loop (eg. "Witnesses"). This is also the primary name for this Data Loop, so its value should be unique within each Database.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '50',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 135,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Singular',
			'FldEng' => 'Singular Name For Items In Loop',
			'FldDesc' => 'Indicates the way to describe multiple Items in this Data Loop (eg. "Witness").',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '50',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 136,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Table',
			'FldEng' => 'Data Loop Core Table',
			'FldDesc' => 'Indicates the name of the Database Table whose records will either be looped through, or created during this Data Loop.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Table ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 137,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'SortFld',
			'FldEng' => 'Data Sort Field',
			'FldDesc' => 'Indicates the full Database Field name ( "{TableAbbr}{FldName}" ) to be used for sorting Table records as Data Loop Items.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Field ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 138,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'DoneFld',
			'FldEng' => 'Loop Completed Field',
			'FldDesc' => 'Indicates the full Database Table and Field address ( "{TableName}:{TableAbbr}{FldName}" ) to be checked signifying that the User has successfully completed the Data Loop for a given Item.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Field ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 139,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'MaxLimit',
			'FldEng' => 'Maximum Loop Items',
			'FldDesc' => 'Indicates how many Data Loop Items/Records the User is allowed add.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 140,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'WarnLimit',
			'FldEng' => 'Warn Item Maximum',
			'FldDesc' => 'Indicates how many Data Loop Items/Records will trigger a warning to the User that they are approaching the maximum limit.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 141,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'MinLimit',
			'FldEng' => 'Minimum Loop Items',
			'FldDesc' => 'Indicates how many Data Loop Items/Records the User must add.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 142,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'IsStep',
			'FldEng' => 'Is Step-Loop',
			'FldDesc' => 'Indicates whether or not this Data Loop operates as a Step-Loop, meaning Table records are added to the Database before this Data Loops steps the User through adding information for one preexisting Loop Item at a time. Otherwise, Data Loops behave so that Users to can add Loop Items until the specified limits are reached.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 143,
			'FldDatabase' => '3',
			'FldTable' => '24',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'AutoGen',
			'FldEng' => 'Data Auto-Generates',
			'FldDesc' => 'If this is not a Step-Loop, this indicates whether or not this Data Loop should automatically create new Database Table records (and child data structures) when a User clicks to add another Loop Item.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 144,
			'FldDatabase' => '3',
			'FldTable' => '26',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Tbl',
			'FldEng' => 'Primary Table',
			'FldDesc' => 'Indicates the name of the primary Database Table in this Data Subset relationship, included in this User Experience. This Table is upstream of the secondary Table when loading User Data.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Table ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 145,
			'FldDatabase' => '3',
			'FldTable' => '26',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'TblLnk',
			'FldEng' => 'Primary Table Linking Field',
			'FldDesc' => 'When appropriate, this indicates the full name ( "{TableAbbr}{FldName}" ) of the primary Table\'s Field to find related secondary Table records in the User\'s Data. This Field must be a Foreign Key pointing to the secondary Table.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Field ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 146,
			'FldDatabase' => '3',
			'FldTable' => '26',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'SubTbl',
			'FldEng' => 'Secondary Table',
			'FldDesc' => 'Indicates the name of the secondary Database Table in this Data Subset relationship, included in this User Experience. This Table is downstream of the primary Table when loading User Data.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Table ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 147,
			'FldDatabase' => '3',
			'FldTable' => '26',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'SubLnk',
			'FldEng' => 'Secondary Table Linking Field',
			'FldDesc' => 'When appropriate, this indicates the full name ( "{TableAbbr}{FldName}" ) of the secondary Table\'s Field to find related secondary Table records in the User\'s Data. This Field must be a Foreign Key pointing to the primary Table.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Field ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 148,
			'FldDatabase' => '3',
			'FldTable' => '26',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'AutoGen',
			'FldEng' => 'Secondary Records Auto-Generated',
			'FldDesc' => 'Indicates whether or not this Data Subset should enforce the auto-creation of secondary Table records, whenever the related primary Table record exists.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 149,
			'FldDatabase' => '3',
			'FldTable' => '27',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'ParentTable',
			'FldEng' => 'Primary Table',
			'FldDesc' => 'Indicates the name of the primary Database Table in this Data Helper relationship, included in this User Experience. This Table is upstream of the secondary Table when loading User Data.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Table ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 150,
			'FldDatabase' => '3',
			'FldTable' => '27',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Table',
			'FldEng' => 'Secondary Table',
			'FldDesc' => 'Indicates the name of the primary Database Table in this Data Helper relationship, included in this User Experience. This Table is downstream of the primary Table when loading User Data.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Table ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 151,
			'FldDatabase' => '3',
			'FldTable' => '27',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'KeyField',
			'FldEng' => 'Secondary Foreign Key',
			'FldDesc' => 'Indicates the full name ( "{TableAbbr}{FldName}" ) of the secondary Table\'s Field to find related secondary Table records in the User\'s Data. This Field must be a Foreign Key pointing to the secondary Table.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Field ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 152,
			'FldDatabase' => '3',
			'FldTable' => '27',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'ValueField',
			'FldEng' => 'Secondary Storage Field',
			'FldDesc' => 'When appropriate, this indicates the full name ( "{TableAbbr}{FldName}" ) of the secondary Table\'s Field which stores multiple checkbox Response Values from the User and associates them with the primary Database Table.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Field ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 153,
			'FldDatabase' => '3',
			'FldTable' => '25',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Table',
			'FldEng' => 'Database Linkage Table',
			'FldDesc' => 'Indicates the unique Table ID number for the many-to-many linkage table to be included when a User\'s Data is loaded for this User Experience.',
			'FldForeignTable' => '9',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 154,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'CoreID',
			'FldEng' => 'User\'s Core Table Record ID',
			'FldDesc' => 'Indicates the unique Table ID number for the User\'s record in this Experience\'s Core Data Table. This is important for saving update\'s in the User\'s progress.',
			'FldForeignTable' => '3',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 155,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldSpecSource' => '0',
			'FldName' => 'UserID',
			'FldEng' => 'Session User ID',
			'FldDesc' => 'Indicates the unique User ID for the Database User logged in and using this Session record.',
			'FldForeignTable' => '28',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 156,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Tree',
			'FldEng' => 'Session Experience ID',
			'FldDesc' => 'Indicates the unique Experience ID number of the User Experience which this Session record is tracking.',
			'FldForeignTable' => '5',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 157,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'CurrNode',
			'FldEng' => 'Session Current Node ID',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node this User loaded.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 158,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'LoopRootJustLeft',
			'FldEng' => 'Just Left Loop Root ID',
			'FldDesc' => 'When appropriate, this Session data stores the unique Root Node ID for a Data Loop which has just been exited by the User.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 159,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'AfterJumpTo',
			'FldEng' => 'Jump From Node ID',
			'FldDesc' => 'When appropriate, this Session data stores the unique Node ID for an Experience Node the User has just used custom navigation to jump away from.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 160,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'ZoomPref',
			'FldEng' => 'Zoom Preference',
			'FldDesc' => 'Indicates the User\'s current preference of visual zoom of the page.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 161,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the User is currently using a mobile device (1 if yes).',
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
			'FldCompareSame' => '6',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 162,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'Browser',
			'FldEng' => 'Session Browser',
			'FldDesc' => 'Indicates the web browser used during this Session.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldCompareSame' => '6',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 163,
			'FldDatabase' => '3',
			'FldTable' => '20',
			'FldSpecSource' => '0',
			'FldName' => 'SessID',
			'FldEng' => 'User Session ID',
			'FldDesc' => 'Indicates the unique Session ID for the User Session whose Data Loop progress is stored in this record.',
			'FldForeignTable' => '19',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 164,
			'FldDatabase' => '3',
			'FldTable' => '20',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Data Loop Name',
			'FldDesc' => 'Indicates the name of the Data Loop with User progress to store in this record.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Data Loop ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ','
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 165,
			'FldDatabase' => '3',
			'FldTable' => '20',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'ItemID',
			'FldEng' => 'Data Loop Item ID',
			'FldDesc' => 'Indicates the unique ID number of the Data Loop Item which the User was last working on.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 166,
			'FldDatabase' => '3',
			'FldTable' => '17',
			'FldSpecSource' => '0',
			'FldName' => 'Session',
			'FldEng' => 'User Session ID',
			'FldDesc' => 'Indicates the unique Session ID for the User Session whose Node response is stored in this record.',
			'FldForeignTable' => '19',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 167,
			'FldDatabase' => '3',
			'FldTable' => '17',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Node',
			'FldEng' => 'Save Node ID',
			'FldDesc' => 'Indicates the unique Node ID for the Experience Node whose User response is stored in this record.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 168,
			'FldDatabase' => '3',
			'FldTable' => '17',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => ',',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 169,
			'FldDatabase' => '3',
			'FldTable' => '17',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'TblFld',
			'FldEng' => 'Storage Data Field',
			'FldDesc' => 'Indicates the full Database Table and Field address ( "{TableName}:{TableAbbr}{FldName}" ) where this Node has decided to store the User\'s Response.',
			'FldNotes' => 'Yes, this should be changed to a Foreign Key to the Field ID.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 170,
			'FldDatabase' => '3',
			'FldTable' => '17',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'LoopItemID',
			'FldEng' => 'Data Loop Item ID',
			'FldDesc' => 'Indicates the unique ID number of the Data Loop Item which the User was working on for this Node Response.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 171,
			'FldDatabase' => '3',
			'FldTable' => '17',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'NewVal',
			'FldEng' => 'User Response',
			'FldDesc' => 'Indicates the stored User\'s Response Value, or a dump of related information.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 172,
			'FldDatabase' => '3',
			'FldTable' => '18',
			'FldSpecSource' => '0',
			'FldName' => 'Session',
			'FldEng' => 'User Session ID',
			'FldDesc' => 'Indicates the unique Session ID for the User Session whose Page Node progress is stored in this record.',
			'FldForeignTable' => '19',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 173,
			'FldDatabase' => '3',
			'FldTable' => '18',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Node',
			'FldEng' => 'Page Node ID',
			'FldDesc' => 'Indicates the unique Node ID for the Experience Page Node this Session has loaded.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 174,
			'FldDatabase' => '3',
			'FldTable' => '18',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'LoopItemID',
			'FldEng' => 'Data Loop Item ID',
			'FldDesc' => 'Indicates the unique ID number of the Data Loop Item which the User was working on for this Page Node.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 175,
			'FldDatabase' => '3',
			'FldTable' => '22',
			'FldSpecSource' => '0',
			'FldName' => 'UID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID related to the User being granted permissions in this record.',
			'FldForeignTable' => '28',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 176,
			'FldDatabase' => '3',
			'FldTable' => '22',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'RID',
			'FldEng' => 'Role ID',
			'FldDesc' => 'Indicates the unique Definition ID related to a User Role being granted in this record.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 177,
			'FldDatabase' => '3',
			'FldTable' => '21',
			'FldSpecSource' => '0',
			'FldName' => 'User',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID related to the User whose actions are being logged in this record.',
			'FldForeignTable' => '28',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 178,
			'FldDatabase' => '3',
			'FldTable' => '21',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'CurrPage',
			'FldEng' => 'Current URL',
			'FldDesc' => 'Indicates the URL of the system page where the User is taking the logged action.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 179,
			'FldDatabase' => '3',
			'FldTable' => '21',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Val',
			'FldEng' => 'Action Value',
			'FldDesc' => 'Indicates any other value or dump of values which may need to be logged alongside the URL for adequate documentation.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 180,
			'FldDatabase' => '3',
			'FldTable' => '23',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Database',
			'FldEng' => 'Log Database ID',
			'FldDesc' => 'Indicates the unique Database ID number which this Logged Action was taken on.',
			'FldForeignTable' => '4',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 181,
			'FldDatabase' => '3',
			'FldTable' => '23',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Table',
			'FldEng' => 'Log Table ID',
			'FldDesc' => 'Indicates the unique Table ID number which this Logged Action was taken on.',
			'FldForeignTable' => '9',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 182,
			'FldDatabase' => '3',
			'FldTable' => '23',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Field',
			'FldEng' => 'Log Field ID',
			'FldDesc' => 'Indicates the unique Field ID number which this Logged Action was taken on.',
			'FldForeignTable' => '10',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 183,
			'FldDatabase' => '3',
			'FldTable' => '23',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Action',
			'FldEng' => 'Type Of Action',
			'FldDesc' => 'Indicates what type of Action on the Database Design is being Logged.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'New;Edit',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldCompareSame' => '878800',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 184,
			'FldDatabase' => '3',
			'FldTable' => '23',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'OldName',
			'FldEng' => 'Old Name',
			'FldDesc' => 'Indicates the old name of this Database Table or Field, to maintain a history of such important changes.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 185,
			'FldDatabase' => '3',
			'FldTable' => '23',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'NewName',
			'FldEng' => 'New Name',
			'FldDesc' => 'Indicates the new name of this Database Table or Field, to maintain a history of such important changes.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 186,
			'FldDatabase' => '3',
			'FldTable' => '23',
			'FldSpecSource' => '0',
			'FldName' => 'User',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID related to the User whose actions are being logged in this record.',
			'FldForeignTable' => '28',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 187,
			'FldDatabase' => '3',
			'FldTable' => '3',
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
			'FldKeyStruct' => 'Simple',
			'FldNullSupport' => '0',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 188,
			'FldDatabase' => '3',
			'FldTable' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 189,
			'FldDatabase' => '3',
			'FldTable' => '3',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldKeyStruct' => 'Simple',
			'FldNullSupport' => '0',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 200,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Tree Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark specific other qualities of this Node.',
			'FldNotes' => '%3 = Is Admin',
			'FldForeignTable' => '5',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 201,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Tree Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark specific qualities of this Table.',
			'FldNotes' => 'Notes: %3 = Admin Tree, %5 = Tree That Is One Big SurvLoop, %7 = Tree Is Home Page',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
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
			'FldOrd' => '1',
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
			'FldOrd' => '2',
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
			'FldOrd' => '3',
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
			'FldOrd' => '4',
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
			'FldOrd' => '5',
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
			'FldOrd' => '6',
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
			'FldOrd' => '7',
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
			'FldOrd' => '8',
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
			'FldOrd' => '9',
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
			'FldID' => 219,
			'FldDatabase' => '3',
			'FldTable' => '12',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Title',
			'FldEng' => 'Article Title',
			'FldDesc' => 'Indicates an appropriate title for an Article which provides more information for Users with completed submissions meeting this related Condition/Filter.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 220,
			'FldDatabase' => '3',
			'FldTable' => '31',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Contact Type',
			'FldDesc' => 'Indicates which type of contact the site visitor is making with us.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 221,
			'FldDatabase' => '3',
			'FldTable' => '31',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Flag',
			'FldEng' => 'Flag',
			'FldDesc' => 'Indicates the current internal status of this Contact submission, important for organizing contact records which need attention by system administrators.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Unread;Read;Trash',
			'FldDefault' => 'Unread',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 222,
			'FldDatabase' => '3',
			'FldTable' => '31',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Email',
			'FldEng' => 'Email Address',
			'FldDesc' => 'Indicates the email address of the site visitor who completed the Contact Form, important for responding to them.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 223,
			'FldDatabase' => '3',
			'FldTable' => '31',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Subject',
			'FldEng' => 'Message Subject Line',
			'FldDesc' => 'Indicates the subject line (or title) of the site visitor\'s Contact Form submission. This is important for more quickly identifying and classifying the nature of the request.',
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
			'FldID' => 224,
			'FldDatabase' => '3',
			'FldTable' => '31',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Body',
			'FldEng' => 'Message Body',
			'FldDesc' => 'Indicates the main body of the site visitor\'s Contact Form submission, providing all the rest of the details of their request. This also includes a dump of any other fields which may have been built into the Contact Form.',
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
			'FldID' => 225,
			'FldDatabase' => '3',
			'FldTable' => '32',
			'FldSpecSource' => '0',
			'FldName' => 'TreeID',
			'FldEng' => 'Tree ID',
			'FldDesc' => 'Indicates the unique Tree ID number which this record belongs to.',
			'FldForeignTable' => '5',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 226,
			'FldDatabase' => '3',
			'FldTable' => '32',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'RecID',
			'FldEng' => 'Submission Record ID',
			'FldDesc' => 'Indicates the unique record ID number whose data is being cached here.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 227,
			'FldDatabase' => '3',
			'FldTable' => '32',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Dump',
			'FldEng' => 'Full Record Dump',
			'FldDesc' => 'Stores a cache of all raw data from a specific submission record, including English translations for Definition IDs, etc.',
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
			'FldID' => 228,
			'FldDatabase' => '3',
			'FldTable' => '33',
			'FldSpecSource' => '0',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number whose interactions are being logged here. Important for ensuring that one User cannot tag someone\'s completed submission more than once.',
			'FldForeignTable' => '28',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 229,
			'FldDatabase' => '3',
			'FldTable' => '33',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'TreeID',
			'FldEng' => 'Tree ID',
			'FldDesc' => 'Indicates the unique Tree ID number that the record being tagged belongs to. Vital for knowing which table the record ID refers to.',
			'FldForeignTable' => '5',
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
			'FldID' => 230,
			'FldDatabase' => '3',
			'FldTable' => '33',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'RecID',
			'FldEng' => 'Submission Record ID',
			'FldDesc' => 'Indicates the unique record ID number which is being tagged with this row.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 231,
			'FldDatabase' => '3',
			'FldTable' => '33',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'DefID',
			'FldEng' => 'Tag Definition ID',
			'FldDesc' => 'Indicates the unique Definition ID number belonging to the specific tag or interaction being logged in this row.',
			'FldForeignTable' => '7',
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
			'FldID' => 232,
			'FldDatabase' => '3',
			'FldTable' => '34',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Token Type',
			'FldDesc' => 'Indicates which type of Token has been created and stored here. ',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Confirm Email;Sensitive;MFA',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 233,
			'FldDatabase' => '3',
			'FldTable' => '34',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number whose token is logged in this row.',
			'FldForeignTable' => '28',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 234,
			'FldDatabase' => '3',
			'FldTable' => '34',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'TreeID',
			'FldEng' => 'Tree ID',
			'FldDesc' => 'Indicates the unique Tree ID number to which this token relates.',
			'FldForeignTable' => '5',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 235,
			'FldDatabase' => '3',
			'FldTable' => '34',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'CoreID',
			'FldEng' => 'Submission Record ID',
			'FldDesc' => 'Indicates the unique record ID number of the completed submission to which this Token relates.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 236,
			'FldDatabase' => '3',
			'FldTable' => '34',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'TokToken',
			'FldEng' => 'Generated Token',
			'FldDesc' => 'Indicates the randomly generated string which is stored as a Token for a User\'s specific interaction with the database.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 237,
			'FldDatabase' => '3',
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
			'FldID' => 238,
			'FldDatabase' => '3',
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
			'FldID' => 239,
			'FldDatabase' => '3',
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
			'FldID' => 240,
			'FldDatabase' => '3',
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
			'DefDescription' => 'http://survloop.homestead.test'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 3,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-url',
			'DefDescription' => 'http://survloop.homestead.test'
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
			'DefDescription' => 'Highest system administrative privileges, can add, remove, and change permissions of other system users.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 16,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'staff',
			'DefOrder' => '1',
			'DefValue' => 'Analyst',
			'DefDescription' => 'Full staff privileges'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 17,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'volunteer',
			'DefOrder' => '2',
			'DefValue' => 'Volunteer',
			'DefDescription' => 'Basic volunteer privileges'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 18,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'databaser',
			'DefOrder' => '3',
			'DefValue' => 'Database Designer',
			'DefDescription' => 'Beyond standard staff permissions to view the database designing tools, these Database Designers also have permission to make changes.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 19,
			'DefDatabase' => '1',
			'DefSet' => 'User Roles',
			'DefSubset' => 'brancher',
			'DefOrder' => '4',
			'DefValue' => 'Branching-Form Editor',
			'DefDescription' => 'Beyond standard staff permissions to view the branching tree and statistics, these Editor also have permission to make changes.'
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
			'DefDescription' => 'On'
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
			'DefID' => 35,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Design Tweak Types',
			'DefValue' => 'New Database',
			'DefDescription' => 'This is part of the SurvLoop installation process, where a user creates a new Database and a primary/default Experience to go with it.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 36,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Design Tweak Types',
			'DefOrder' => '5',
			'DefValue' => 'New Experience',
			'DefDescription' => 'Create a new, secondary Experience for an existing Database.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 37,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Design Tweak Types',
			'DefOrder' => '3',
			'DefValue' => 'Add a Data Field',
			'DefDescription' => 'Create a new Field in the Database, without adding it as an Experience Node yet.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 38,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Design Tweak Types',
			'DefOrder' => '7',
			'DefValue' => 'New Experience Question',
			'DefDescription' => 'Create a new Question Node in a User Experience. This might include a simplified version of adding a new Database Field.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 39,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Design Tweak Types',
			'DefOrder' => '1',
			'DefValue' => 'Add a Data Table',
			'DefDescription' => 'Create a new Database Table to later fill with Fields.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 40,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Design Tweak Types',
			'DefOrder' => '2',
			'DefValue' => 'Edit Database Table',
			'DefDescription' => 'Edit the basic properties of a Database Table.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 41,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Design Tweak Types',
			'DefOrder' => '4',
			'DefValue' => 'Edit Database Field',
			'DefDescription' => 'Edit the basic or thorough properties of a Database Field.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 42,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Design Tweak Types',
			'DefOrder' => '6',
			'DefValue' => 'Edit Experience',
			'DefDescription' => 'Edit the basic properties of a User Experience.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 43,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Design Tweak Types',
			'DefOrder' => '8',
			'DefValue' => 'Edit Experience Question',
			'DefDescription' => 'Edit the basic properties of a Experience Question Node.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 44,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Definition Types',
			'DefValue' => 'Value Ranges',
			'DefDescription' => 'Each definition in a set of Value Ranges represents one response a user can choose when responding to some question/prompt.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 45,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Definition Types',
			'DefOrder' => '1',
			'DefValue' => 'System Settings',
			'DefDescription' => 'Each definition for System Settings represents one system-wide specification.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 46,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Definition Types',
			'DefOrder' => '2',
			'DefValue' => 'Style Settings',
			'DefDescription' => 'Each definition for Style Settings represents one color or other branding element needed system-wide.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 47,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Definition Types',
			'DefOrder' => '3',
			'DefValue' => 'Instructions',
			'DefDescription' => 'Each definition which is an Instruction represents one blurb, used somewhere in the system, which can be edited by system administrators.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 48,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Definition Types',
			'DefOrder' => '4',
			'DefValue' => 'Diagrams',
			'DefDescription' => 'Each definition which is a Diagram represents one document uploaded by system administrators.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 49,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Definition Types',
			'DefOrder' => '5',
			'DefValue' => 'Custom Settings',
			'DefDescription' => 'Each definition for Custom Settings represents one system-wide specification, which is established and defined by a client-specific installation of SurvLoop.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 50,
			'DefDatabase' => '3',
			'DefSubset' => 'SurvLoop Definition Types',
			'DefOrder' => '6',
			'DefValue' => 'User Roles',
			'DefDescription' => 'Each definition for User Roles represents one system-wide type of user permissions.'
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
			'DefDescription' => '.btn.btn-primary { color: #FFF; }'
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
			'DefDescription' => '#666'
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
			'DefID' => 467,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'tree-3-core-record-singular',
			'DefDescription' => 'Tweak'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 468,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'tree-3-core-record-plural',
			'DefDescription' => 'Tweaks'
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
			'DefDescription' => '1522094988'
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
			'DefDescription' => '2018-02-08'
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
		DB::table('SL_Tree')->insert([
			'TreeID' => 1,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeName' => 'SurvLoop Installs',
			'TreeDesc' => 'Record of all websites and systems powered by the SurvLoop open data engine.',
			'TreeSlug' => 'survloop-installs',
			'TreeOpts' => '1',
			'TreeRoot' => '13',
			'TreeFirstPage' => '-3',
			'TreeLastPage' => '-3',
			'TreeCoreTable' => '29'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 2,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Primary Public XML',
			'TreeName' => 'SurvLoop Installs',
			'TreeSlug' => 'survloop-installs',
			'TreeOpts' => '1',
			'TreeRoot' => '12',
			'TreeFirstPage' => '-3',
			'TreeLastPage' => '-3',
			'TreeCoreTable' => '29'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 3,
			'TreeDatabase' => '3',
			'TreeUser' => '0',
			'TreeName' => 'SurvLoop Database Designer',
			'TreeDesc' => 'SurvLoop users can add a new field to the database and/or user experience.',
			'TreeSlug' => 'data-design',
			'TreeOpts' => '1',
			'TreeRoot' => '7',
			'TreeFirstPage' => '8',
			'TreeLastPage' => '8',
			'TreeCoreTable' => '3'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 4,
			'TreeDatabase' => '3',
			'TreeUser' => '0',
			'TreeType' => 'Primary Public XML',
			'TreeName' => 'SurvLoop Database Designer',
			'TreeSlug' => 'data-design',
			'TreeOpts' => '1',
			'TreeRoot' => '14',
			'TreeCoreTable' => '3'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 5,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Home',
			'TreeSlug' => 'home',
			'TreeOpts' => '7',
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
			'TreeOpts' => '21',
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
			'TreeOpts' => '23',
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
			'TreeOpts' => '1',
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
			'TreeOpts' => '1',
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
			'TreeOpts' => '1',
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
			'TreeSlug' => 'github',
			'TreeOpts' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 7,
			'NodeTree' => '3',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Database Designer'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 9,
			'NodeTree' => '3',
			'NodeParentID' => '11',
			'NodeType' => 'Text',
			'NodePromptText' => '<h2 class="slBlueDark">Welcome</h2>What kind of cool data do you want to collect and share?'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 10,
			'NodeTree' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 11,
			'NodeTree' => '3',
			'NodeParentID' => '7',
			'NodeType' => 'Page',
			'NodePromptText' => 'Welcome To Database Designer',
			'NodePromptNotes' => 'welcome'
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
			'NodeID' => 14,
			'NodeTree' => '4',
			'NodeType' => 'XML',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
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
<pre>
$ php artisan make:auth
$ php artisan vendor:publish --tag=laravel-notifications
</pre>
<p>&nbsp;</p>
<p>Update `composer.json` to add requirements and an easier SurvLoop reference:</p>
<pre>
$ nano composer.json
</pre>
<pre>...
"require": {
	...
    "wikiworldorder/survloop": "0.*",
    "matthiasmullie/minify": "~1.3",
	...
},
...
"autoload": {
	...
	"psr-4": {
		...
		"SurvLoop\\": "vendor/wikiworldorder/survloop/src/",
		"MatthiasMullie\\Minify\\": "vendor/matthiasmullie/minify/src/",
		"MatthiasMullie\\PathConverter\\": "vendor/matthiasmullie/path-converter/src/",
	}
	...
}, ...
</pre>
<pre>
$ composer update
</pre>
<p>&nbsp;</p>
<p>Add the package to your application service providers in `config/app.php`.</p>
<pre>
$ nano config/app.php
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
	\'SurvLoop\'	=> \'WikiWorldOrder\SurvLoop\SurvLoopFacade\',
	...
], ...
</pre>
<p>&nbsp;</p>
<p>Swap out the SurvLoop user model in `config/auth.php`.</p>
<pre>
$ nano config/auth.php
</pre>
<pre>...
\'model\' => App\Models\User::class,
...</pre>
<p>&nbsp;</p>
<p>Update composer, publish the package migrations, etc...</p>
<pre>
$ php artisan vendor:publish --force
$ php artisan migrate
$ composer dump-autoload
$ php artisan db:seed --class=SurvLoopSeeder
</pre>
<p>&nbsp;</p>
<p>For now, to apply database design changes to the same installation you are working in, depending on your server, 
you might also need something like this...</p>
<pre>
$ chown -R www-data:33 app/Models
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
<pre>$ nano ~/.homestead/Homestead.yaml</pre>
<em>Change this chunk of code:</em>
<pre>folders: 
	- map: ~/Code
	  to: /home/vagrant/Code
sites:
    - map: homestead.app
      to: /home/vagrant/Code/Laravel/public</pre>
<em>To this chunk of code:</em>
<pre>folders: 
	- map: ~/web/sites/ProjectName
	  to: /home/vagrant/Code
sites:
    - map: homestead.app
      to: /home/vagrant/Code/ProjectName/public</pre>
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
$ composer create-project laravel/laravel ProjectName "5.3.*"
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
<p>Or anything else you can imagine: <a href="https://laravel.com/docs/5.3" target="_blank" rel="noopener">https://laravel.com/docs/5.3</a></p>
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
<p>&nbsp;</p>
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
<h3>Log Into Your <a href="https://www.digitalocean.com/" target="_blank" rel="noopener">Digital Ocean</a> Account.<br /><br />
Create a new Droplet, with a recent version of Ubuntu.</h3>
<p>The minimal memory size of 1GB is sufficient to get off the ground.</p>
<p>If you have already setup your SSH Key with Digital Ocean before, select it. Otherwise, click the "New SSH Key" button and paste the contents of your key which was copied to your clipboard above.</p>
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-01.png" alt="" />
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<div class="row">
<div class="col-md-4">
<p>&nbsp;</p>
After it is created, open up your Droplet in the website, go to the "Access" tab, and click the button to "Reset Root Password".This will quickly reboot the server while resetting the root password, then send it to your account\'s email address.

It sometimes take around 10 minutes to receive, in my limited experience.</div><div class="col-md-1"></div><div class="col-md-7"><img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-02.png" /></div></div>
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
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-03.png" />
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<div class="row">
<div class="col-md-4">
<p>&nbsp;</p>
<p>This will bring you to the domain\'s details, where you should add DNS Records. Add two "A Records" pointing to your newly created Droplet, one for hostname "@" and one for hostname "www"...</p>
</div><div class="col-md-1"></div><div class="col-md-7">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-04.png" />
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
$ apt-get install php-mbstring
$ apt-get install php-zip
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
<p>Type this, "&lt;?php phpinfo(); ?&gt;", into the empty file, and save it. If things are working, you should be able to type your IP address (or propagated domain name) into your browser, and <a href="https://s14-eu5.ixquick.com/cgi-bin/serveimage?url=https:%2F%2Fassets.digitalocean.com%2Farticles%2Fphp_edit%2Fphpinfo.png&amp;sp=65cea842f80f5dedbeba0cc83ec9851d" target="_blank" rel="noopener">see a bunch of details</a> about your PHP installation.</p>
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
<p>Down the line, you might want a GUI to play with your databases. I\'ve enjoyed <a href="https://www.sequelpro.com/" target="_blank" rel="noopener">Sequel Pro</a>.</p>
<p>Give your new SSH connection an appropriate name, and use your Droplet\'s IP address for the hosts. Copy the MYSQL root password you created while installing the core packages above.</p>
<p>Finally, link your SSH Key in your operating system, "~/.ssh/id_rsa.pub". This can sometimes be challenging since this is a hidden folder which you may need to <a href="https://www.lifewire.com/display-hidden-files-in-os-x-153332" target="_blank" rel="noopener">work to reveal</a>.</p>
</div><div class="col-md-4"></div><div class="col-md-4">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-05.png" />
</div></div>
<p>&nbsp;</p>
<div class="row"><div class="col-md-4">
<p>Once you are connected, use the drop-down in the top-left corner to "Add Database...". Give your database an appropriate name, and write it down for later.</p>
</div><div class="col-md-2"></div><div class="col-md-6">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-06.png" />
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h3>Install Laravel</h3>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key:</p>
<pre>$ rm /var/www/html/index.html
$ composer create-project laravel/laravel /var/www/laravel 5.3.*
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
</p>&nbsp;</p>
<h3><a href="/how-to-install-survloop"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> How to install SurvLoop <nobr>(after installing Laravel)</nobr></a></h3>
</p>&nbsp;</p>'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 1,
			'CondDatabase' => '0',
			'CondTag' => '#IsAdmin',
			'CondDesc' => 'The user is currently logged in as an administrator.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 2,
			'CondDatabase' => '0',
			'CondTag' => '#IsNotAdmin',
			'CondDesc' => 'The user is not currently logged in as an administrator.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 3,
			'CondDatabase' => '0',
			'CondTag' => '#NodeDisabled',
			'CondDesc' => 'This node is not active (for the public).',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 4,
			'CondDatabase' => '0',
			'CondTag' => '#NotLoggedIn',
			'CondDesc' => 'Complainant is not currently logged into the system.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 5,
			'CondDatabase' => '0',
			'CondTag' => '#IsLoggedIn',
			'CondDesc' => 'Complainant is currently logged into the system.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 6,
			'CondDatabase' => '0',
			'CondTag' => '#IsNotLoggedIn',
			'CondDesc' => 'Complainant is not currently logged into the system.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 7,
			'CondDatabase' => '0',
			'CondTag' => '#EmailVerified',
			'CondDesc' => 'Current user\'s email address has been verified.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_UsersRoles')->insert([
			'RoleUserID' => 1,
			'RoleUserUID' => '1',
			'RoleUserRID' => '15'
		]);
	
    }
}
