<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-seeder.blade.php

namespace Database\Seeders;

use Auth;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {


	DB::table('SL_Databases')->insert([
			'DbID' => 3,
			'DbUser' => '0',
			'DbPrefix' => 'SL_',
			'DbName' => 'Survloop',
			'DbDesc' => 'All The Data Are Belong',
			'DbMission' => 'Empower you to design your complex databases, collect data with an easy user experience, and create an API to share the data with the world!',
			'db_tables' => '38',
			'db_fields' => '280'
		]);
	
	DB::table('SL_Tables')->insert([
			'TblID' => 3,
			'TblDatabase' => '3',
			'TblAbbr' => 'Tweak',
			'TblName' => 'DesignTweaks',
			'TblEng' => 'Design Tweaks',
			'TblDesc' => 'Represents one modification to the existing database and user experience designs in Survloop. Information stored here is important for tracking history of changes and success of A/B testing in the user experience. This is the Core Data Table of Survloop\'s naked installation.',
			'TblGroup' => 'Session Records',
			'TblOrd' => '19',
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
			'TblDesc' => 'Each record represents one Database being designed in Survloop, a collection of Tables, Fields, Definitions, and Business Rules often owned by a User. Information stored here can define core system settings.',
			'TblGroup' => 'Databases',
			'TblNumFields' => '8',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '8'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 5,
			'TblDatabase' => '3',
			'TblAbbr' => 'Tree',
			'TblName' => 'Tree',
			'TblEng' => 'Trees',
			'TblDesc' => 'Each Tree represents one collection of Nodes which one specific survey  process, page of content, navigation menu, etc. Nodes are connected to each other to form a branching Tree which define all the details.',
			'TblNotes' => 'Tree options should be broken out into helper table.',
			'TblGroup' => 'Trees',
			'TblOrd' => '5',
			'TblNumFields' => '11',
			'TblNumForeignKeys' => '6',
			'TblNumForeignIn' => '13'
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
			'TblNumForeignIn' => '2'
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
			'TblNumForeignKeys' => '2',
			'TblNumForeignIn' => '7'
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
			'TblNumForeignIn' => '4'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 11,
			'TblDatabase' => '3',
			'TblAbbr' => 'Cond',
			'TblName' => 'Conditions',
			'TblEng' => 'Conditions',
			'TblDesc' => 'Each record represents one specific Condition used to filter Database submissions. These are important for determining which Nodes to include during a User\'s Experience, and which finished submissions to include in public queries.',
			'TblGroup' => 'Trees',
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
			'TblGroup' => 'Trees',
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
			'TblGroup' => 'Trees',
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
			'TblGroup' => 'Trees',
			'TblOrd' => '9',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 15,
			'TblDatabase' => '3',
			'TblAbbr' => 'Node',
			'TblName' => 'Node',
			'TblEng' => 'Tree Nodes',
			'TblDesc' => 'Each record represents one Node in the branching Tree, defining the critical details of each survey, page, etc. Each Node could represent the start of a new branch of the Tree, a new question asked of a User, or a new page which will ask multiple questions.',
			'TblNotes' => 'Node options should be broken out into helper table.',
			'TblGroup' => 'Trees',
			'TblOrd' => '6',
			'TblNumFields' => '17',
			'TblNumForeignKeys' => '2',
			'TblNumForeignIn' => '13'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 16,
			'TblDatabase' => '3',
			'TblAbbr' => 'NodeRes',
			'TblName' => 'NodeResponses',
			'TblEng' => 'Node Responses',
			'TblDesc' => 'Each record represents one Response presented to the User when prompted by a specific Node.',
			'TblType' => 'Subset',
			'TblGroup' => 'Trees',
			'TblOrd' => '7',
			'TblNumFields' => '6',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 17,
			'TblDatabase' => '3',
			'TblAbbr' => 'NodeSave',
			'TblName' => 'NodeSaves',
			'TblEng' => 'Node Saves',
			'TblDesc' => 'Each record represents one User\'s Response to a specific Node during a specific Session. Among other quality control, this is important for comparing the efficacy of various A/B testing in the user experience.',
			'TblGroup' => 'Session Records',
			'TblOrd' => '23',
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
			'TblGroup' => 'Session Records',
			'TblOrd' => '22',
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
			'TblGroup' => 'Session Records',
			'TblOrd' => '20',
			'TblNumFields' => '10',
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
			'TblGroup' => 'Session Records',
			'TblOrd' => '21',
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
			'TblOrd' => '33',
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
			'TblOrd' => '28',
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
			'TblOrd' => '34',
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
			'TblGroup' => 'Trees',
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
			'TblGroup' => 'Trees',
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
			'TblGroup' => 'Trees',
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
			'TblGroup' => 'Trees',
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
			'TblDesc' => 'This represents the Laravel Users table, but will not actually be implemented by Survloop as part of the database installation.',
			'TblGroup' => 'Users',
			'TblOrd' => '29',
			'TblNumForeignIn' => '12'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 35,
			'TblDatabase' => '3',
			'TblAbbr' => 'Emailed',
			'TblName' => 'Emailed',
			'TblEng' => 'Emailings',
			'TblDesc' => 'Each record represents one individual Email Template Mailing, including a copy of the auto-generated (then optionally customized) body of the sent email.',
			'TblGroup' => 'Users',
			'TblOrd' => '32',
			'TblNumFields' => '9',
			'TblNumForeignKeys' => '4'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 36,
			'TblDatabase' => '3',
			'TblAbbr' => 'Email',
			'TblName' => 'Emails',
			'TblEng' => 'Email Templates',
			'TblDesc' => 'Each record represents one Email Template which can be used throughout Survloop.',
			'TblGroup' => 'Users',
			'TblOrd' => '31',
			'TblNumFields' => '7',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 37,
			'TblDatabase' => '3',
			'TblAbbr' => 'Img',
			'TblName' => 'Images',
			'TblEng' => 'Gallery Images',
			'TblDesc' => 'Each record represents one item in the Media Galleries managed by Survloop.',
			'TblGroup' => 'Trees',
			'TblOrd' => '16',
			'TblNumFields' => '13',
			'TblNumForeignKeys' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 38,
			'TblDatabase' => '3',
			'TblAbbr' => 'Zip',
			'TblName' => 'Zips',
			'TblEng' => 'Zip Codes',
			'TblDesc' => 'Each record represents one United States zip code to map it to state and counties. ',
			'TblType' => 'Linking',
			'TblGroup' => 'Lookups',
			'TblOrd' => '35',
			'TblNumFields' => '7'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 31,
			'TblDatabase' => '3',
			'TblAbbr' => 'Cont',
			'TblName' => 'Contact',
			'TblEng' => 'Contact Form',
			'TblDesc' => 'Each record represents one complete submission of the default Contact Form.',
			'TblGroup' => 'Users',
			'TblOrd' => '30',
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
			'TblGroup' => 'Trees',
			'TblOrd' => '18',
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
			'TblGroup' => 'Session Records',
			'TblOrd' => '24',
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
			'TblOrd' => '27',
			'TblNumFields' => '5',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 39,
			'TblDatabase' => '3',
			'TblAbbr' => 'AdyGeo',
			'TblName' => 'AddyGeo',
			'TblEng' => 'Address Geolocate',
			'TblDesc' => 'Each record represents one Address (all in one line) to map it to its latitude and longitude coordinates. This is important to reducing the number of geocoding requests sent to third parties.',
			'TblGroup' => 'Lookups',
			'TblOrd' => '36',
			'TblNumFields' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 41,
			'TblDatabase' => '3',
			'TblAbbr' => 'SessPage',
			'TblName' => 'SessPage',
			'TblEng' => 'Session Page Loads',
			'TblDesc' => 'Each record represents one page load, or server-side redirect, as related to their current Session. This is important for saving a User\'s path through the entire website.',
			'TblGroup' => 'Session Records',
			'TblOrd' => '26',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 42,
			'TblDatabase' => '3',
			'TblAbbr' => 'SiteSess',
			'TblName' => 'SessSite',
			'TblEng' => 'Site Session',
			'TblDesc' => 'Each record represents one User\'s Site Session while browsing through the whole website, not just surveys. This is important for identifying any problems in the website use flow.',
			'TblGroup' => 'Session Records',
			'TblOrd' => '25',
			'TblNumFields' => '5',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 43,
			'TblDatabase' => '3',
			'TblAbbr' => 'Up',
			'TblName' => 'Uploads',
			'TblEng' => 'Uploads',
			'TblDesc' => 'Each record stores details about a file uploaded by a user, especially with any survey process.',
			'TblGroup' => 'Trees',
			'TblOrd' => '17',
			'TblNumFields' => '13',
			'TblNumForeignKeys' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 44,
			'TblDatabase' => '3',
			'TblAbbr' => 'Cach',
			'TblName' => 'Caches',
			'TblEng' => 'Caches',
			'TblDesc' => 'Each record represents one cache of content, whether HTML, JS, or CSS.',
			'TblGroup' => 'Optimization',
			'TblOrd' => '37',
			'TblNumFields' => '7',
			'TblNumForeignKeys' => '1'
		]);
	
	DB::table('SL_Fields')->insert([
			'FldID' => 10001,
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
			'FldID' => 10002,
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
			'FldID' => 10003,
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
			'FldID' => 10004,
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
			'FldID' => 10005,
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
			'FldID' => 10006,
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
			'FldID' => 10007,
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
			'FldID' => 10008,
			'FldDatabase' => '3',
			'FldTable' => '4',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Database Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark specific qualities of this Database.',
			'FldNotes' => '%3 Simple Field Specifications',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldNullSupport' => '0',
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10009,
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
			'FldID' => 10010,
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
			'FldID' => 10011,
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
			'FldID' => 10012,
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
			'FldID' => 10013,
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
			'FldID' => 10014,
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
			'FldID' => 10015,
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
			'FldID' => 10016,
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
			'FldID' => 10017,
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
			'FldID' => 10018,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Table Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark specific qualities of this Table.',
			'FldNotes' => '%3 Table Has User-Defined Primary Key',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10019,
			'FldDatabase' => '3',
			'FldTable' => '9',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'Extend',
			'FldEng' => 'Extension of Table',
			'FldDesc' => 'Indicates whether or not this Database Table is an extension of another Table. This means it inherits all of the other Table\'s fields, plus whatever you add here.',
			'FldForeignTable' => '9',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10020,
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
			'FldID' => 10021,
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
			'FldID' => 10022,
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
			'FldID' => 10023,
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
			'FldID' => 10024,
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
			'FldID' => 10025,
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
			'FldID' => 10026,
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
			'FldID' => 10027,
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
			'FldID' => 10028,
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
			'FldID' => 10029,
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
			'FldID' => 10030,
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
			'FldID' => 10031,
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
			'FldID' => 10032,
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
			'FldID' => 10033,
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
			'FldID' => 10034,
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
			'FldID' => 10035,
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
			'FldID' => 10036,
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
			'FldID' => 10037,
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
			'FldID' => 10038,
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
			'FldID' => 10039,
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
			'FldID' => 10040,
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
			'FldID' => 10041,
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
			'FldID' => 10042,
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
			'FldID' => 10043,
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
			'FldID' => 10044,
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
			'FldID' => 10045,
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
			'FldID' => 10046,
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
			'FldID' => 10047,
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
			'FldID' => 10048,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '25',
			'FldSpecSource' => '0',
			'FldName' => 'KeyType',
			'FldEng' => 'Key Type',
			'FldDesc' => 'Indicates whether or not this Field is some kind of Key in its parent Database Table, including Foreign Keys, Primary Keys, or Alternate Keys. By default, all Survloop Tables will automatically generate a Unique, Primary Key if no such Field is specified by the Database Designer. (* Multiple key types are currently stored as comma separated strings, but this should probably be some cleaner method. *)',
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
			'FldID' => 10049,
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
			'FldID' => 10050,
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
			'FldID' => 10051,
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
			'FldID' => 10052,
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
			'FldID' => 10053,
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
			'FldID' => 10054,
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
			'FldID' => 10055,
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
			'FldID' => 10056,
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
			'FldID' => 10057,
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
			'FldID' => 10058,
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
			'FldID' => 10059,
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
			'FldID' => 10060,
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
			'FldID' => 10061,
			'FldDatabase' => '3',
			'FldTable' => '10',
			'FldOrd' => '38',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Field Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark other specific qualities of this Field.',
			'FldNotes' => '%3 Field Is Auto-Managed by Survloop; | %1 XML Public Data; %7 XML Private Data; %11 XML Sensitive Data; %13 XML Internal Use Data;',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10062,
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
			'FldValues' => 'Def::Survloop Definition Types',
			'FldDefault' => 'Value Ranges',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10063,
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
			'FldID' => 10064,
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
			'FldID' => 10065,
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
			'FldID' => 10066,
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
			'FldID' => 10067,
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
			'FldID' => 10068,
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
			'FldID' => 10069,
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
			'FldID' => 10070,
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
			'FldID' => 10071,
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
			'FldID' => 10072,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'IsAppOrient',
			'FldEng' => 'Is Implemented In Application',
			'FldDesc' => 'Indicates whether or not this Business Rule can be directly implemented within the logical design of the database (Database-Oriented). Application-Oriented Rules will have to be implemented with custom coding, outside the scope of Survloop\'s automation.',
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
			'FldID' => 10073,
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
			'FldID' => 10074,
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
			'FldID' => 10075,
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
			'FldID' => 10076,
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
			'FldID' => 10077,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'Phys',
			'FldEng' => 'Physical Elements Affected',
			'FldDesc' => 'Indicates the multiple of various prime numbers which represent physical data specifications related to this Rule, including Data Type, Length, Decimal Places, Character Support, Input Mask, and Display Format.
    ',
			'FldNotes' => '%2 Data Type, %3 Length, %5 Decimal Places, %7 Character Support, %11 Input Mask, %13 Display Format',
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
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10078,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'Logic',
			'FldEng' => 'Logical Elements Affected',
			'FldDesc' => 'Indicates the multiple of various prime numbers which represent logical data specifications related to this Rule, including Key Type, Key Structure, Uniqueness, Null Support, Values Entered By, Required Value, Default Value, Range of Values, Comparisons Allowed, Operations Allowed, and Edit Rule.',
			'FldNotes' => '%2 Key Type, %3 Key Structure, %5 Uniqueness, %7 Null Support, %11 Values Entered By, %13 Required Value, %17 Default Value, %19 Range of Values, %23 Comparisons Allowed, %29 Operations Allowed, %31 Edit Rule',
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
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10079,
			'FldDatabase' => '3',
			'FldTable' => '6',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'Rel',
			'FldEng' => 'Relationship Characteristics Affected',
			'FldDesc' => 'Indicates the multiple of various prime numbers which represent data relation specifications related to this Rule, including Deletion Rule, Type of Participation, Degree of Participation.',
			'FldNotes' => '%2 Deletion Rule, %3 Type of Participation, %5 Degree of Participation',
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
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10080,
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
			'FldID' => 10081,
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
			'FldID' => 10082,
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
			'FldID' => 10083,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Tree Type',
			'FldDesc' => 'Indicates whether this Tree (collection of Nodes) indeed maps out a User Experience, or if it provides a map of the Database Design for the creating XML documents automatically-generated by Survloop.',
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
			'FldID' => 10084,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Tree Name',
			'FldDesc' => 'Indicates the most succinct and clear name internally used to refer to this specific Tree.',
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
			'FldID' => 10085,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Desc',
			'FldEng' => 'Tree Description',
			'FldDesc' => 'Documents a longer description of the purpose, use, and importance of this specific Tree.',
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
			'FldID' => 10086,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Slug',
			'FldEng' => 'Tree URL',
			'FldDesc' => 'Indicates the URL for the starting page of this Tree.',
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
			'FldID' => 10087,
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
			'FldID' => 10088,
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
			'FldID' => 10089,
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
			'FldID' => 10090,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'CoreTable',
			'FldEng' => 'Tree Core Data Table',
			'FldDesc' => 'Indicates the unique Table ID which acts as the backbone for all data collected throughout this entire Tree.',
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
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10091,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'Tree',
			'FldEng' => 'Node Tree ID',
			'FldDesc' => 'Indicates the unique Tree ID number which this Tree Node belongs to.',
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
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10092,
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
			'FldID' => 10093,
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
			'FldID' => 10094,
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
			'FldID' => 10095,
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
			'FldID' => 10096,
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
			'FldID' => 10097,
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
			'FldID' => 10098,
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
			'FldID' => 10099,
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
			'FldID' => 10100,
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
			'FldID' => 10101,
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
			'FldID' => 10102,
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
			'FldID' => 10103,
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
			'FldID' => 10104,
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
			'FldID' => 10105,
			'FldDatabase' => '3',
			'FldTable' => '15',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Node Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark specific other qualities of this Node.',
			'FldNotes' => 'For XML Nodes... %5 Include members with parent, without table wrap; %7 Min 1 Record; %11 Max 1 Record; | For Other Nodes... %2 Customize Layout; %13 \'Required\' Displayed On Separate Line; %29 Exit Page; %31 Show Word Count; %37 Wrap In Jumbotron Style; %41 Echo Response Edits To Div; %43 Toggle Child Nodes On Click; %47 Limit Word Count; %53 Dropdown Tagger; %59 Hide Progress Bar; %61 Responses In Columns; %67 Skinny Content Width; %71 Content Block Background; %73 Leave Existing Rows\' Records; %79 After Response Selected, Hide Other Options; %83 Show After Pressing Info Button; %89 Wrap in Card Element; %97 Defer Loading of Node Contents',
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
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10106,
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
			'FldID' => 10107,
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
			'FldID' => 10108,
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
			'FldID' => 10109,
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
			'FldID' => 10110,
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
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10111,
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
			'FldID' => 10112,
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
			'FldID' => 10113,
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
			'FldID' => 10114,
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
			'FldID' => 10115,
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
			'FldID' => 10116,
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
			'FldID' => 10117,
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
			'FldID' => 10118,
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
			'FldID' => 10119,
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
			'FldID' => 10120,
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
			'FldID' => 10121,
			'FldDatabase' => '3',
			'FldTable' => '11',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Condition Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark any other specific qualities of this Condition.',
			'FldNotes' => '%2 For Public Use In Filter Defaults; %3 Is Linked With Article(s);',
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
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10122,
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
			'FldID' => 10123,
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
			'FldID' => 10124,
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
			'FldID' => 10125,
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
			'FldID' => 10126,
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
			'FldID' => 10127,
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
			'FldID' => 10128,
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
			'FldID' => 10129,
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
			'FldID' => 10130,
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
			'FldID' => 10131,
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
			'FldID' => 10132,
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
			'FldID' => 10133,
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
			'FldID' => 10134,
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
			'FldID' => 10135,
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
			'FldID' => 10136,
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
			'FldID' => 10137,
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
			'FldID' => 10138,
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
			'FldID' => 10139,
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
			'FldID' => 10140,
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
			'FldID' => 10141,
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
			'FldID' => 10142,
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
			'FldID' => 10143,
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
			'FldID' => 10144,
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
			'FldID' => 10145,
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
			'FldID' => 10146,
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
			'FldID' => 10147,
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
			'FldID' => 10148,
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
			'FldID' => 10149,
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
			'FldID' => 10150,
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
			'FldID' => 10151,
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
			'FldID' => 10152,
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
			'FldID' => 10153,
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
			'FldID' => 10154,
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
			'FldID' => 10155,
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
			'FldID' => 10156,
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
			'FldID' => 10157,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '4',
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
			'FldID' => 10158,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '5',
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
			'FldID' => 10159,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '6',
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
			'FldID' => 10160,
			'FldDatabase' => '3',
			'FldTable' => '42',
			'FldOrd' => '3',
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
			'FldID' => 10161,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '8',
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
			'FldID' => 10162,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'Browser',
			'FldEng' => 'Session Browser',
			'FldDesc' => 'Indicates the web browser used during this Session.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '255',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10163,
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
			'FldID' => 10164,
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
			'FldID' => 10165,
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
			'FldID' => 10166,
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
			'FldID' => 10167,
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
			'FldID' => 10168,
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
			'FldID' => 10169,
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
			'FldID' => 10170,
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
			'FldID' => 10171,
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
			'FldID' => 10172,
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
			'FldID' => 10173,
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
			'FldID' => 10174,
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
			'FldID' => 10175,
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
			'FldID' => 10176,
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
			'FldID' => 10177,
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
			'FldID' => 10178,
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
			'FldID' => 10179,
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
			'FldID' => 10180,
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
			'FldID' => 10181,
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
			'FldID' => 10182,
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
			'FldID' => 10183,
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
			'FldID' => 10184,
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
			'FldID' => 10185,
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
			'FldID' => 10186,
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
			'FldID' => 10187,
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
			'FldID' => 10188,
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
			'FldID' => 10189,
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
			'FldID' => 10200,
			'FldDatabase' => '3',
			'FldTable' => '5',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Tree Options',
			'FldDesc' => 'Indicates the multiple of various prime numbers which mark specific other qualities of this Node.',
			'FldNotes' => '%3 Admin-Only; %5 Tree That Is One Big Survloop; %7 Area Home Page (for Public, Admin, or Volun); %11 Record Edits Not Allowed (except by Admins); %13 Report for Survey (linked and shares core table); %17 Volunteers Access (& Admin); %19 Contact Form (Auto Page); %23 Page Is Skinny; %29 Page Not [Yet] Simple Enough To Be Cached; %31 Search Bar Results Page (for Public, Admin, or Volun); %37 Survey Navigation Menu Bottom; %41 Partners Member Access; %43 Staff Access; %47 Uses Public ID#; %53 Has Page Form; %59 Survey Navigation Menu Top; %61 Survey Progress Line',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800',
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10201,
			'FldDatabase' => '3',
			'FldTable' => '42',
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
			'FldID' => 10202,
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
			'FldID' => 10203,
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
			'FldID' => 10204,
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
			'FldID' => 10205,
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
			'FldID' => 10206,
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
			'FldID' => 10207,
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
			'FldID' => 10208,
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
			'FldID' => 10209,
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
			'FldID' => 10210,
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
			'FldID' => 10211,
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
			'FldID' => 10212,
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
			'FldID' => 10213,
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
			'FldID' => 10214,
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
			'FldID' => 10215,
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
			'FldID' => 10216,
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
			'FldID' => 10217,
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
			'FldID' => 10218,
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
			'FldID' => 10219,
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
			'FldDataLength' => '255',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10197,
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
			'FldID' => 10198,
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
			'FldID' => 10199,
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
		DB::table('SL_Fields')->insert([
			'FldID' => 10220,
			'FldDatabase' => '3',
			'FldTable' => '35',
			'FldSpecSource' => '0',
			'FldName' => 'Tree',
			'FldEng' => 'Tree ID',
			'FldDesc' => 'Indicates the unique Tree ID which sent this email.',
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
			'FldID' => 10221,
			'FldDatabase' => '3',
			'FldTable' => '35',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'RecID',
			'FldEng' => 'Core Record ID',
			'FldDesc' => 'Indicates the unique Record ID of the core table of the Tree sending this email.',
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
			'FldID' => 10222,
			'FldDatabase' => '3',
			'FldTable' => '35',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'EmailID',
			'FldEng' => 'Email Template ID',
			'FldDesc' => 'Indicates the unique Email Template ID which is being sent.',
			'FldForeignTable' => '36',
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
			'FldID' => 10223,
			'FldDatabase' => '3',
			'FldTable' => '35',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'To',
			'FldEng' => 'Recipient Email Address',
			'FldDesc' => 'The email address this message is being sent to.',
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
			'FldID' => 10224,
			'FldDatabase' => '3',
			'FldTable' => '35',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'ToUser',
			'FldEng' => 'Recipient User ID',
			'FldDesc' => 'Indicates the unique User ID of the User this email is being sent to.',
			'FldForeignTable' => '28',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10225,
			'FldDatabase' => '3',
			'FldTable' => '35',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'FromUser',
			'FldEng' => 'Sender User ID',
			'FldDesc' => 'Indicates the unique User ID of the User initiating this emailing.',
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
			'FldID' => 10226,
			'FldDatabase' => '3',
			'FldTable' => '35',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Subject',
			'FldEng' => 'Subject Line',
			'FldDesc' => 'Indicates the subject line of this specific email, even if it is different than the default, auto-generated version from the Email Template.',
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
			'FldID' => 10227,
			'FldDatabase' => '3',
			'FldTable' => '35',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'Body',
			'FldEng' => 'Email Body',
			'FldDesc' => 'Indicates the body of this specific email, even if it is different than the default, auto-generated version from the Email Template.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10228,
			'FldDatabase' => '3',
			'FldTable' => '35',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Options',
			'FldDesc' => 'Indicates the options or flags stored with this emailing.',
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
			'FldCompareSame' => '878800',
			'FldOperateSame' => '52'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10229,
			'FldDatabase' => '3',
			'FldTable' => '36',
			'FldSpecSource' => '0',
			'FldName' => 'Tree',
			'FldEng' => 'Tree ID',
			'FldDesc' => 'Indicates the unique Tree ID related to the home Tree of this Email Template.',
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
			'FldID' => 10230,
			'FldDatabase' => '3',
			'FldTable' => '36',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Type',
			'FldDesc' => 'Indicates the general type of Email Template being stored here.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10231,
			'FldDatabase' => '3',
			'FldTable' => '36',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Template Name',
			'FldDesc' => 'Indicates the name of this Email Template, as it will be referred to internally within the system.',
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
			'FldID' => 10232,
			'FldDatabase' => '3',
			'FldTable' => '36',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Subject',
			'FldEng' => 'Default Subject Line',
			'FldDesc' => 'Indicates the default subject line of emails sent out using this template.',
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
			'FldID' => 10233,
			'FldDatabase' => '3',
			'FldTable' => '36',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Body',
			'FldEng' => 'Default Email Body',
			'FldDesc' => 'Indicates the default main content of emails sent out using this template.',
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
			'FldID' => 10234,
			'FldDatabase' => '3',
			'FldTable' => '36',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Opts',
			'FldEng' => 'Options',
			'FldDesc' => 'Indicates any options necessary to accurately define the properties of this Email Template.',
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
			'FldID' => 10235,
			'FldDatabase' => '3',
			'FldTable' => '36',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'TotSent',
			'FldEng' => 'Total Emails Sent',
			'FldDesc' => 'Indicates the total number of individual Emails sent using this Email Template.',
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
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10236,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldSpecSource' => '0',
			'FldName' => 'DatabaseID',
			'FldEng' => 'Database ID',
			'FldDesc' => 'Indicates the unique Database ID number which owns this media item.',
			'FldForeignTable' => '4',
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
			'FldID' => 10237,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number who uploaded or owns this media item.',
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
			'FldID' => 10238,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'FileOrig',
			'FldEng' => 'Original Filename',
			'FldDesc' => 'Indicates the original filename, as it was uploaded.',
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
			'FldID' => 10239,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'FileLoc',
			'FldEng' => 'Stored Filename',
			'FldDesc' => 'Indicates the filename as it was actually stored here on the server.',
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
			'FldID' => 10240,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'FullFilename',
			'FldEng' => 'Full File Location',
			'FldDesc' => 'Indicates the full path where this media file is actually stored here on the server (relative to the system app\'s root).',
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
			'FldID' => 10241,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Title',
			'FldEng' => 'Media Title',
			'FldDesc' => 'Indicates the title of this uploaded media, or a concise description of it. This is important as a label used internally throughout the system.',
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
			'FldID' => 10242,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Credit',
			'FldEng' => 'Media Credit (Legal)',
			'FldDesc' => 'Indicates any attribution required or appropriate to be shared alongside this media item.',
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
			'FldID' => 10243,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'CreditUrl',
			'FldEng' => 'Media Credit URL (Legal)',
			'FldDesc' => 'Indicates an optional URL link for any attribution required or appropriate to be shared alongside this media item.',
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
			'FldID' => 10244,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'NodeID',
			'FldEng' => 'Node ID',
			'FldDesc' => 'Indicates the unique Node ID number used to upload this media item.',
			'FldForeignTable' => '15',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10245,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Media Type',
			'FldDesc' => 'Indicates which allowed type of media upload this record tracks.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'jpg;png;gif',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10246,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'FileSize',
			'FldEng' => 'Media File Size',
			'FldDesc' => 'Indicates this media file\'s size in bytes here on the server.',
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
			'FldID' => 10247,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'Width',
			'FldEng' => 'Media Width',
			'FldDesc' => 'Indicates the default width of this media item.',
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
			'FldID' => 10248,
			'FldDatabase' => '3',
			'FldTable' => '37',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'Height',
			'FldEng' => 'Media Height',
			'FldDesc' => 'Indicates the default height of this media item.',
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
			'FldID' => 10249,
			'FldDatabase' => '3',
			'FldTable' => '16',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'MutEx',
			'FldEng' => 'Response Is Mutually Exclusive',
			'FldDesc' => 'Indicates whether or not this response option is mutually exclusive with all the other responses to this question (Node).',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDefault' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10250,
			'FldDatabase' => '3',
			'FldTable' => '38',
			'FldSpecSource' => '0',
			'FldName' => 'Zip',
			'FldEng' => 'Zip Code',
			'FldDesc' => 'Indicates the zip code (postal code) being mapped in this record.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10251,
			'FldDatabase' => '3',
			'FldTable' => '38',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Lat',
			'FldEng' => 'Latitude',
			'FldDesc' => 'Indicates the Zip Code\'s latitude is a geographic coordinate that specifies the north–south position of a point on the Earth\'s surface.',
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
			'FldID' => 10252,
			'FldDatabase' => '3',
			'FldTable' => '38',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Long',
			'FldEng' => 'Longitude',
			'FldDesc' => 'Indicates the Zip Code\'s longitude is a geographic coordinate that specifies the east-west position of a point on the Earth\'s surface.',
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
			'FldID' => 10253,
			'FldDatabase' => '3',
			'FldTable' => '38',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'City',
			'FldEng' => 'City',
			'FldDesc' => 'Indicates the city where this Zip Code is located.',
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
			'FldID' => 10254,
			'FldDatabase' => '3',
			'FldTable' => '38',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'State',
			'FldEng' => 'State',
			'FldDesc' => 'Indicates the state where this Zip Code is located.',
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
			'FldID' => 10255,
			'FldDatabase' => '3',
			'FldTable' => '38',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'County',
			'FldEng' => 'County',
			'FldDesc' => 'Indicates the county where this Zip Code is located.',
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
			'FldID' => 10256,
			'FldDatabase' => '3',
			'FldTable' => '38',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Country',
			'FldEng' => 'Country',
			'FldDesc' => 'Indicates the country where this Zip Code is located.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10257,
			'FldDatabase' => '3',
			'FldTable' => '39',
			'FldSpecSource' => '0',
			'FldName' => 'Address',
			'FldEng' => 'Full Address',
			'FldDesc' => 'Indicates the full address, in one line, which is being linked with latitude and longitude coordinates.',
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
			'FldID' => 10258,
			'FldDatabase' => '3',
			'FldTable' => '39',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Lat',
			'FldEng' => 'Latitude',
			'FldDesc' => 'Indicates the Address\'s latitude is a geographic coordinate that specifies the north–south position of a point on the Earth\'s surface.',
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
			'FldID' => 10259,
			'FldDatabase' => '3',
			'FldTable' => '39',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Long',
			'FldEng' => 'Longitude',
			'FldDesc' => 'Indicates the Address\'s longitude is a geographic coordinate that specifies the east-west position of a point on the Earth\'s surface.',
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
			'FldID' => 10260,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'IsActive',
			'FldEng' => 'Is Active',
			'FldDesc' => 'Indicates whether or not this session is currently active, or editable. This allows us to avoid permanently deleting these records valuable for audits.',
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
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10261,
			'FldDatabase' => '3',
			'FldTable' => '41',
			'FldSpecSource' => '0',
			'FldName' => 'SessID',
			'FldEng' => 'Session ID',
			'FldDesc' => 'Indicates the unique Session ID for the User Session who loaded this page.',
			'FldForeignTable' => '42',
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
			'FldID' => 10262,
			'FldDatabase' => '3',
			'FldTable' => '41',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'URL',
			'FldEng' => 'URL Loaded',
			'FldDesc' => 'Indicates the URL which is currently being loaded, or redirected through on the server-side.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6',
			'FldCompareOther' => '6',
			'FldCompareValue' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10263,
			'FldDatabase' => '3',
			'FldTable' => '42',
			'FldSpecSource' => '0',
			'FldName' => 'UserID',
			'FldEng' => 'Session User ID',
			'FldDesc' => 'Indicates the unique User ID for the Database User logged in and using this Site Session record.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10264,
			'FldDatabase' => '3',
			'FldTable' => '42',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Browser',
			'FldEng' => 'Session Browser',
			'FldDesc' => 'Indicates the web browser used during this Session.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '255',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10265,
			'FldDatabase' => '3',
			'FldTable' => '42',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device',
			'FldDesc' => 'Indicates whether or not the User is currently using a mobile device (1 if yes).
',
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
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10196,
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
			'FldID' => 10266,
			'FldDatabase' => '3',
			'FldTable' => '19',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'IP',
			'FldEng' => 'IP Address',
			'FldDesc' => 'Encrypted IP address of the current user.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 309,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldSpecSource' => '0',
			'FldName' => 'TreeID',
			'FldEng' => 'Tree ID',
			'FldDesc' => 'Indicates the unique Tree ID number which this Upload belongs to. This is important to track the journey to this upload.',
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
			'FldID' => 310,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'CoreID',
			'FldEng' => 'Core Record ID',
			'FldDesc' => 'Indicates the unique ID number associated the Core Record for whichever Tree this Upload belongs to. This is important to track the journey to this upload.',
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
			'FldID' => 311,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Upload Type',
			'FldDesc' => 'Indicates the type of upload as defined by the unique Definition ID number from the Definitions set \'Value Ranges\' and subset \'Upload Types\'.',
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
			'FldID' => 312,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Privacy',
			'FldEng' => 'Privacy Setting',
			'FldDesc' => 'Indicates whether or not the user wants this uploaded file to be publicly published or for administrators\' eyes only.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 313,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Title',
			'FldEng' => 'Title of File',
			'FldDesc' => 'Indicates a brief name by which this file can be referenced in English.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 314,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Desc',
			'FldEng' => 'Description of File',
			'FldDesc' => 'Provides a longer description for this uploaded file, if needed.',
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
			'FldID' => 315,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'UploadFile',
			'FldEng' => 'Filename as Uploaded',
			'FldDesc' => 'Indicates the original filename for this upload when it got to the server.',
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
			'FldID' => 316,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'StoredFile',
			'FldEng' => 'Filename as Stored',
			'FldDesc' => 'Indicates the new filename for this upload as it is stored on the server.',
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
			'FldID' => 317,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'VideoLink',
			'FldEng' => 'Video Link URL',
			'FldDesc' => 'Indicates the URL of a video being "uploaded". So far, only YouTube is supported for automatically embeded previews.',
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
			'FldID' => 318,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'VideoDuration',
			'FldEng' => 'Video Duration',
			'FldDesc' => 'Indicates the duration of the video in seconds.',
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
			'FldCompareSame' => '6',
			'FldOperateSame' => '137200',
			'FldOperateOther' => '137200'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 319,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'NodeID',
			'FldEng' => 'Tree Node ID',
			'FldDesc' => 'Indicates the unique Node ID number (within the Tree) from which this file was uploaded. This is potentially important for tracking exactly when the user uploaded this.',
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
			'FldID' => 320,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'LinkFldID',
			'FldEng' => 'Link Field ID',
			'FldDesc' => 'Indicates the unique Database Field ID which this uploaded file is related to.',
			'FldForeignTable' => '10',
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
			'FldID' => 321,
			'FldDatabase' => '3',
			'FldTable' => '43',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'LinkRecID',
			'FldEng' => 'Link Record ID',
			'FldDesc' => 'Indicates the unique Record ID from the Database Table owning the associated Field, if applicable.',
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
			'FldID' => 10267,
			'FldDatabase' => '3',
			'FldTable' => '44',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Cache Type',
			'FldDesc' => 'Indicates which type of cache record this is.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '12',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10268,
			'FldDatabase' => '3',
			'FldTable' => '44',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'TreeID',
			'FldEng' => 'Tree ID',
			'FldDesc' => 'Indicates the unique Tree ID number which generated this cache.',
			'FldForeignTable' => '5',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
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
			'FldID' => 10269,
			'FldDatabase' => '3',
			'FldTable' => '44',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'RecID',
			'FldEng' => 'Core Record ID',
			'FldDesc' => 'Indicates the unique Core Record ID number which generated this cache.',
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
			'FldID' => 10270,
			'FldDatabase' => '3',
			'FldTable' => '44',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Key',
			'FldEng' => 'Cache Key String',
			'FldDesc' => 'Indicates the unique key string used to locate this cached content.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldKeyType' => ',',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 10271,
			'FldDatabase' => '3',
			'FldTable' => '44',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Value',
			'FldEng' => 'Cache Content Value',
			'FldDesc' => 'Indicates the actual value of the cached content.',
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
			'FldID' => 10272,
			'FldDatabase' => '3',
			'FldTable' => '44',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Css',
			'FldEng' => 'Cache Content CSS',
			'FldDesc' => 'Indicates CSS needed for the cached content.',
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
			'FldID' => 10273,
			'FldDatabase' => '3',
			'FldTable' => '44',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Js',
			'FldEng' => 'Cache Content JS',
			'FldDesc' => 'Indicates JS needed for the cached content.',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldKeyType' => ',',
			'FldNullSupport' => '0'
		]);
	
	DB::table('SL_Definitions')->insert([
			'DefID' => 35,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Design Tweak Types',
			'DefValue' => 'New Database',
			'DefDescription' => 'This is part of the Survloop installation process, where a user creates a new Database and a primary/default Experience to go with it.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 36,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Design Tweak Types',
			'DefOrder' => '5',
			'DefValue' => 'New Experience',
			'DefDescription' => 'Create a new, secondary Experience for an existing Database.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 37,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Design Tweak Types',
			'DefOrder' => '3',
			'DefValue' => 'Add a Data Field',
			'DefDescription' => 'Create a new Field in the Database, without adding it as an Experience Node yet.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 38,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Design Tweak Types',
			'DefOrder' => '7',
			'DefValue' => 'New Experience Question',
			'DefDescription' => 'Create a new Question Node in a User Experience. This might include a simplified version of adding a new Database Field.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 39,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Design Tweak Types',
			'DefOrder' => '1',
			'DefValue' => 'Add a Data Table',
			'DefDescription' => 'Create a new Database Table to later fill with Fields.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 40,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Design Tweak Types',
			'DefOrder' => '2',
			'DefValue' => 'Edit Database Table',
			'DefDescription' => 'Edit the basic properties of a Database Table.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 41,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Design Tweak Types',
			'DefOrder' => '4',
			'DefValue' => 'Edit Database Field',
			'DefDescription' => 'Edit the basic or thorough properties of a Database Field.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 42,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Design Tweak Types',
			'DefOrder' => '6',
			'DefValue' => 'Edit Experience',
			'DefDescription' => 'Edit the basic properties of a User Experience.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 43,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Design Tweak Types',
			'DefOrder' => '8',
			'DefValue' => 'Edit Experience Question',
			'DefDescription' => 'Edit the basic properties of a Experience Question Node.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 44,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Definition Types',
			'DefValue' => 'Value Ranges',
			'DefDescription' => 'Each definition in a set of Value Ranges represents one response a user can choose when responding to some question/prompt.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 45,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Definition Types',
			'DefOrder' => '1',
			'DefValue' => 'System Settings',
			'DefDescription' => 'Each definition for System Settings represents one system-wide specification.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 46,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Definition Types',
			'DefOrder' => '2',
			'DefValue' => 'Style Settings',
			'DefDescription' => 'Each definition for Style Settings represents one color or other branding element needed system-wide.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 47,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Definition Types',
			'DefOrder' => '3',
			'DefValue' => 'Instructions',
			'DefDescription' => 'Each definition which is an Instruction represents one blurb, used somewhere in the system, which can be edited by system administrators.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 48,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Definition Types',
			'DefOrder' => '4',
			'DefValue' => 'Diagrams',
			'DefDescription' => 'Each definition which is a Diagram represents one document uploaded by system administrators.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 49,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Definition Types',
			'DefOrder' => '5',
			'DefValue' => 'Custom Settings',
			'DefDescription' => 'Each definition for Custom Settings represents one system-wide specification, which is established and defined by a client-specific installation of Survloop.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 50,
			'DefDatabase' => '3',
			'DefSubset' => 'Survloop Definition Types',
			'DefOrder' => '6',
			'DefValue' => 'User Roles',
			'DefDescription' => 'Each definition for User Roles represents one system-wide type of user permissions.'
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
			'DefID' => 598,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'site-name',
			'DefDescription' => 'for general reference, in English'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 599,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'cust-abbr',
			'DefDescription' => 'Survloop'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 600,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'cust-package',
			'DefDescription' => 'rockhopsoft/survloop'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 601,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-url',
			'DefDescription' => 'http://myapp.com'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 602,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-url',
			'DefDescription' => '/optionally-different'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 603,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-title'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 604,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-desc'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 605,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-keywords'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 606,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-img'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 607,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-lrg',
			'DefDescription' => '/siteabrv/uploads/logo-large.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 608,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-md',
			'DefDescription' => '/siteabrv/uploads/logo-medium.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 609,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-sm',
			'DefDescription' => '/siteabrv/uploads/logo-small.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 610,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'shortcut-icon',
			'DefDescription' => '/siteabrv/ico.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 611,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'spinner-code',
			'DefDescription' => '&lt;i class="fa-li fa fa-spinner fa-spin"&gt;&lt;/i&gt;'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 613,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'twitter',
			'DefDescription' => '@Survloop'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 614,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'show-logo-title',
			'DefDescription' => '1 or 0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 615,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'users-create-db',
			'DefDescription' => '1 or 0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 616,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-volunteers',
			'DefDescription' => '1 or 0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 617,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'parent-company',
			'DefDescription' => 'MegaOrg'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 618,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'parent-website',
			'DefDescription' => 'http://www...'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 619,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'login-instruct',
			'DefDescription' => 'HTML'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 620,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'signup-instruct',
			'DefDescription' => 'HTML'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 621,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license',
			'DefDescription' => 'Creative Commons Attribution-ShareAlike License'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 622,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license-url',
			'DefDescription' => 'http://creativecommons.org/licenses/by-sa/3.0/'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 623,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'app-license-img',
			'DefDescription' => '/survloop/uploads/creative-commons-by-sa-88x31.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 624,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'css-extra-files',
			'DefDescription' => 'comma separated'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 625,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'header-code',
			'DefDescription' => '&lt;div&gt;Anything&lt;/div&gt;'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 650,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'font-main',
			'DefDescription' => 'Helvetica,Arial,sans-serif'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 651,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-bg',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 652,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-text',
			'DefDescription' => '#333'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 653,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-link',
			'DefDescription' => '#416CBD'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 654,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-grey',
			'DefDescription' => '#999'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 655,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-faint',
			'DefDescription' => '#EDF8FF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 656,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-faintr',
			'DefDescription' => '#F9FCFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 657,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-main-on',
			'DefDescription' => '#2B3493'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 659,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-info-on',
			'DefDescription' => '#5BC0DE'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 661,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-danger-on',
			'DefDescription' => '#EC2327'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 663,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-success-on',
			'DefDescription' => '#006D36'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 665,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-warn-on',
			'DefDescription' => '#F0AD4E'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 667,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-line-hr',
			'DefDescription' => '#999'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 668,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-field-bg',
			'DefDescription' => '#FFF'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 669,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-form-text',
			'DefDescription' => '#333'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 670,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-logo',
			'DefDescription' => '#53F1EB'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 671,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-nav-bg',
			'DefDescription' => '#fff'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 672,
			'DefDatabase' => '3',
			'DefSet' => 'Style Settings',
			'DefSubset' => 'color-nav-text',
			'DefDescription' => '#888'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 678,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-partners',
			'DefDescription' => '1 or 0'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 679,
			'DefDatabase' => '3',
			'DefSet' => 'System Settings',
			'DefSubset' => 'has-canada',
			'DefDescription' => '1 or 0'
		]);
	

	DB::table('SL_Tree')->insert([
			'TreeID' => 3,
			'TreeDatabase' => '3',
			'TreeUser' => '0',
			'TreeType' => 'Survey',
			'TreeName' => 'Survloop Database Designer',
			'TreeDesc' => 'Survloop users can add a new field to the database and/or user experience.',
			'TreeSlug' => 'data-design',
			'TreeRoot' => '7',
			'TreeFirstPage' => '8',
			'TreeLastPage' => '8',
			'TreeCoreTable' => '3'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 4,
			'TreeDatabase' => '3',
			'TreeUser' => '0',
			'TreeType' => 'Survey XML',
			'TreeName' => 'Survloop Database Designer',
			'TreeSlug' => 'data-design',
			'TreeRoot' => '14',
			'TreeCoreTable' => '3'
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
			'NodeID' => 14,
			'NodeTree' => '4',
			'NodeType' => 'XML',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1643,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1644,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1645,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1646,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1647,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1648,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1652,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1653,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1654,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1655,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1656,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1657,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1658,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1659,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1660,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1661,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1662,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1663,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1664,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1665,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1666,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1667,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1668,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1669,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1670,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1671,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1672,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1673,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1674,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1675,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1676,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1677,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1678,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1679,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1680,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1681,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1683,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1684,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1685,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1686,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1687,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1688,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1689,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1690,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1691,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1692,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1693,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1694,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1695,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1696,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1697,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1698,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1699,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1700,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1702,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1703,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1704,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1705,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1706,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1707,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1708,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1709,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1710,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1711,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1712,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1713,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1714,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1715,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1716,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1717,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1718,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1719,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1720,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1721,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1722,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1723,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1724,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1725,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1726,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1727,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1728,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1729,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1730,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1731,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1732,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1733,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1734,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1735,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1736,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1737,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1738,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1739,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1740,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1741,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1742,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1743,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1744,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1745,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1746,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1747,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1748,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1749,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1750,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1751,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1752,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1753,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1754,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1755,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1756,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1757,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1758,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1759,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1760,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1761,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1762,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1763,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1764,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1765,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1766,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1767,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1768,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1769,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1770,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1771,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1772,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1773,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1775,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1776,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1777,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1778,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1779,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1780,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1781,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1782,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1783,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1784,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1785,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1786,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1792,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1787,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1788,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1789,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1790,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1791,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1794,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1795,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1796,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1797,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1798,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1799,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1800,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1801,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1802,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1803,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1804,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1805,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1806,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1807,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1808,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1809,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1810,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1811,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1813,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1814,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1815,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1816,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1817,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1818,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1819,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1820,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1821,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1822,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1823,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1824,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1825,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1826,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1827,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1828,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1829,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1830,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1831,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1832,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1833,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1834,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1835,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1836,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1837,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1838,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1839,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1840,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1841,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1842,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1843,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1844,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1845,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1846,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1847,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1848,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1849,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1850,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1851,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1852,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1853,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1854,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1855,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1856,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1857,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1858,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1859,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1860,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1861,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1862,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1863,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1864,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1865,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1866,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1867,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1868,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1869,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1870,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1871,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1872,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1873,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1874,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1875,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1876,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1877,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1878,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1879,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1880,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1881,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1882,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1883,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1884,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1885,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1886,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1887,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1888,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1889,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1890,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1891,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1892,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1893,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1894,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1895,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1896,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1897,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1898,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1899,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1900,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1901,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1902,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1903,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1904,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1905,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1906,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1907,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1908,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1909,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1910,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1911,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1912,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1913,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1914,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1915,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1916,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1917,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1918,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1919,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1920,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1921,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1922,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1923,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1924,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1925,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1926,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1927,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1928,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1929,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1930,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1931,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1932,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1933,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1934,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1935,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1936,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1937,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1938,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1939,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1940,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1941,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1942,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1943,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1944,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1945,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1946,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1947,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1948,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1949,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1950,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1951,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1952,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1953,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1954,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1955,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1956,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1957,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1958,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1959,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1960,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1961,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1962,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1963,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1964,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1965,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1966,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1967,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1968,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1969,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1970,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1971,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1972,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1973,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1974,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1975,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1976,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1977,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1978,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1979,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1980,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1982,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1983,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1984,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1985,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1986,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1987,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1988,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1989,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1990,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1991,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1992,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1993,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1994,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1995,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1996,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1997,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1998,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 1999,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2000,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2001,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2002,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2003,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2004,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2005,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2006,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2007,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2008,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2009,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2010,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2011,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2012,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2013,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2014,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2015,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2016,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2017,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2018,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2019,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2020,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2021,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2022,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2023,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2024,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2025,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2026,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2027,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2028,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2029,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2030,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2031,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2032,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2033,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2034,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2035,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2036,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2037,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2038,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2039,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2040,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2041,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2042,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2043,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2044,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2045,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2046,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2047,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2048,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2049,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2050,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2051,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2052,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2053,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2054,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2055,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2056,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2057,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2058,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2059,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2060,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2061,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2062,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2063,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2064,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2065,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2066,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2067,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2068,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2069,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2070,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2071,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2072,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2073,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2074,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2075,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2076,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2077,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2078,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2079,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2080,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2081,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2082,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2083,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2084,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2085,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2086,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2087,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2088,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2089,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2090,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2091,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2092,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2093,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2094,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2095,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2096,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2097,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2098,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2099,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2100,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2101,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2102,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2103,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2104,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2105,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2106,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2107,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2108,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2109,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2110,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2111,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2112,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2113,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2114,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2115,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2116,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2117,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2118,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2119,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2120,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2121,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2122,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2123,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2124,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2125,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2126,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2127,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2128,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2129,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2130,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2131,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2132,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2133,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2134,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2135,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2136,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2137,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2138,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2139,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2140,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2141,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2142,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2143,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2144,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2145,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2146,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2147,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2148,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2149,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2150,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2151,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2152,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2153,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2154,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2155,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2156,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2157,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2158,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2159,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2160,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2161,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2162,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2163,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2164,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2165,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2166,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2167,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2168,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2169,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2170,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2171,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2172,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2173,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2175,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2176,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2177,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2178,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2179,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2180,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2187,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2188,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2189,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2190,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2191,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2192,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2193,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2194,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2195,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2196,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2197,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2198,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2199,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2200,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2201,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2202,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2203,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2204,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2205,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2206,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2207,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2208,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2209,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2210,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2211,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2212,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2213,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2214,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2215,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2216,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2217,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2218,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2219,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2220,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2221,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2222,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2223,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2224,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2225,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2226,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2227,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2228,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2229,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2230,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2231,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2232,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2233,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2234,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2235,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2236,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2237,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2238,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2239,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2240,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2241,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2242,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2243,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2244,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2245,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2246,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2250,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2251,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2252,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2253,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2254,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2255,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2256,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2257,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2258,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2259,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2260,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2261,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2262,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2263,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2264,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2265,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2266,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2267,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2268,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2269,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2270,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2271,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2272,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2273,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2275,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2276,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2277,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2278,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2279,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2280,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2282,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2283,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2284,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2285,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2286,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2287,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2288,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2289,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2290,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2291,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2292,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2293,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2294,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2295,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2296,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2297,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2298,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2299,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2304,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2305,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2300,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2301,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2302,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2303,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2306,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2307,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2308,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2309,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2310,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2311,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2313,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2314,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2315,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2316,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2317,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2318,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2319,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2320,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2321,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2322,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2323,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2324,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2325,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2326,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2327,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2328,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2329,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2330,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2331,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2332,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2333,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2335,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2336,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2337,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2338,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2339,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2340,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2341,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2342,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2343,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2344,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2345,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2346,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2348,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2349,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2350,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2351,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2352,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2353,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2355,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2356,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2357,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2358,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2359,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2360,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2361,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2362,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2363,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2364,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2365,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2366,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2367,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2368,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2369,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2370,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2371,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2372,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2374,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2375,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2376,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2377,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2378,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2379,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2380,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2381,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2382,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2383,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2384,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2385,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2387,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2388,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2389,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2390,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2391,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2392,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2393,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2394,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2395,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2396,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2397,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2398,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2399,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2400,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2401,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2402,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2403,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2404,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2405,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2406,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2407,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2408,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2409,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2410,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2411,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2412,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2413,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2414,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2415,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2416,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2417,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2418,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2419,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2420,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2421,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2422,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2423,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2424,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2425,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2426,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2427,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2428,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2429,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2430,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2431,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2432,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2433,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2434,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2435,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2436,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2437,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2438,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2439,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2440,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2441,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2442,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2443,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2444,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2445,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2446,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2447,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2448,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2449,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2450,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2451,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2452,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2453,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2454,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2455,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2456,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2457,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2458,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2460,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2461,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2462,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2463,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2464,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2465,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2466,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2467,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2468,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2469,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2470,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2471,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2472,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2473,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2474,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2475,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2476,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2477,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2478,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2479,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2480,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2481,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2482,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2483,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2484,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2485,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2486,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2487,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2488,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2489,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2490,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2491,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2492,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2493,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2494,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2495,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2496,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2497,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2498,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2499,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2500,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2501,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2503,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2504,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2505,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2506,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2507,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2508,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2509,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2510,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2511,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2512,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2513,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2514,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2515,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2516,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2517,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2518,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2519,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2520,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2521,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2522,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2523,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2524,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2525,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2526,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2527,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2528,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2529,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2530,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2531,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2532,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2533,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2534,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2535,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2536,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2537,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2538,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2539,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2540,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2541,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2542,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2543,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2544,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2545,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2546,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2547,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2548,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2549,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2550,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2551,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2552,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2553,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2554,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2555,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2556,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2557,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2560,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2561,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2562,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2558,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2559,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2563,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2564,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2565,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2566,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2567,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2568,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2569,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2570,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2571,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2572,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2573,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2574,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2578,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2579,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2580,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2581,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2582,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2583,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2584,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2585,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2586,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2587,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2588,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2589,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2590,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2591,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2592,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2593,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2594,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2595,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2596,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2597,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2598,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2599,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2600,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2601,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2648,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2649,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2650,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2651,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2652,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2653,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2657,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2658,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2659,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2660,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2661,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2662,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2663,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2664,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2665,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2666,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2667,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2668,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2669,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2670,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2671,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2672,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2673,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2674,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2675,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2676,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2677,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2678,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2679,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2680,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2682,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2683,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2684,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2685,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2686,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2687,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2688,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2689,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2690,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2691,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2692,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2693,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2695,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2696,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2697,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2698,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2699,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2700,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2702,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2703,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2704,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2705,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2706,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2707,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2708,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2709,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2710,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2711,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2712,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2713,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2714,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2715,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2716,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2717,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2718,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2719,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2720,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2721,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2722,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2723,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2724,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2725,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2726,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2727,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2728,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2729,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2730,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2731,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2732,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2733,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2734,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2735,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2736,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2737,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2738,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2739,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2740,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2741,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2742,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2743,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2744,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2745,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2746,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2747,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2748,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2749,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2750,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2751,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2752,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2753,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2754,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2755,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2756,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2757,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2758,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2759,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2760,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2761,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2763,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2764,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2765,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2766,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2767,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2768,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2770,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2771,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2772,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2773,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2774,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2775,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2776,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2777,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2778,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2779,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2780,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2781,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2782,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2783,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2784,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2785,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2786,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2787,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2788,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2789,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2790,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2791,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2792,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2793,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2794,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2795,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2796,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2797,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2798,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2799,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2800,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2801,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2802,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2803,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2804,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2805,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2806,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2807,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2808,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2809,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2810,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2811,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2816,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2817,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2812,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2813,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2814,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2815,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2818,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2819,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2820,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2821,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2822,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2823,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2824,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2825,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2826,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2827,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2828,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2829,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2830,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2831,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2832,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2833,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2834,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2835,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2836,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2837,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2838,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2839,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2840,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2841,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2844,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2845,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2846,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2847,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2848,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2849,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2851,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2852,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2853,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2854,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2855,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2856,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2857,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2858,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2859,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2860,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2861,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2862,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2863,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2864,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2865,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2866,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2867,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2868,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2869,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2870,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2871,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2872,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2873,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2874,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2875,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2876,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2877,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2878,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2879,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2880,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2884,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2885,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2886,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2887,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2888,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2889,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2890,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2891,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2892,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2893,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2894,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2895,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2896,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2897,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2898,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2899,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2900,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2901,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2902,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2903,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2904,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2905,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2906,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2907,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2908,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2909,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2910,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2911,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2912,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2913,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2914,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2915,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2916,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2917,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2918,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2919,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2920,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2921,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2922,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2923,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2924,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2925,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2926,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2927,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2928,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2929,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2930,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2931,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2932,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2933,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2934,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2935,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2936,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2937,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2938,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2939,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2940,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2941,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2942,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2943,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2944,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2945,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2946,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2947,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2948,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2949,
			'NodeTree' => '3',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
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
		DB::table('SL_Conditions')->insert([
			'CondID' => 8,
			'CondDatabase' => '0',
			'CondTag' => '#IsOwner',
			'CondDesc' => 'The user is currently logged is the owner of this record.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 9,
			'CondDatabase' => '0',
			'CondTag' => '#IsPrintable',
			'CondDesc' => 'The current page view is intended to be printable.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 10,
			'CondDatabase' => '0',
			'CondTag' => '#IsPrintInFrame',
			'CondDesc' => 'The current page view is printed into frame/ajax/widget.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 11,
			'CondDatabase' => '0',
			'CondTag' => '#IsDataPermPublic',
			'CondDesc' => 'The current data permissions are set to public.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 12,
			'CondDatabase' => '0',
			'CondTag' => '#IsDataPermPrivate',
			'CondDesc' => 'The current data permissions are set to private.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 13,
			'CondDatabase' => '0',
			'CondTag' => '#IsDataPermSensitive',
			'CondDesc' => 'The current data permissions are set to sensitive.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 14,
			'CondDatabase' => '0',
			'CondTag' => '#IsDataPermInternal',
			'CondDesc' => 'The current data permissions are set to internal.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 15,
			'CondDatabase' => '0',
			'CondTag' => '#HasTokenDialogue',
			'CondDesc' => 'Current page load includes an access token dialogue.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 16,
			'CondDatabase' => '0',
			'CondTag' => '#TestLink',
			'CondDesc' => 'Current page url parameters includes ?test=1.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 17,
			'CondDatabase' => '0',
			'CondTag' => '#NextButton',
			'CondDesc' => 'Current page load results from clicking the survey\'s next button.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 18,
			'CondDatabase' => '0',
			'CondTag' => '#IsProfileOwner',
			'CondDesc' => 'The user is currently logged in owns this user profile.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 19,
			'CondDatabase' => '0',
			'CondTag' => '#IsStaff',
			'CondDesc' => 'The user is currently logged in as a staff user.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 20,
			'CondDatabase' => '0',
			'CondTag' => '#IsStaffOrAdmin',
			'CondDesc' => 'The user is currently logged in as a staff or admin user.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 21,
			'CondDatabase' => '0',
			'CondTag' => '#IsPartner',
			'CondDesc' => 'The user is currently logged in as a partner.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 22,
			'CondDatabase' => '0',
			'CondTag' => '#IsVolunteer',
			'CondDesc' => 'The user is currently logged in as a volunteer.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 23,
			'CondDatabase' => '0',
			'CondTag' => '#IsBrancher',
			'CondDesc' => 'The user is currently logged in as a database manager.',
			'CondOperator' => 'CUSTOM'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 24,
			'CondDatabase' => '0',
			'CondTag' => '#IsPartnerStaffOrAdmin',
			'CondDesc' => 'The user is currently logged in as a partner, staff, or admin user.',
			'CondOperator' => 'CUSTOM'
		]);
	

	DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 1,
			'CondNodeCondID' => '3',
			'CondNodeNodeID' => '1642'
		]);
	







 } }