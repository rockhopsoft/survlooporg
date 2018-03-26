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
    	DB::table('SLI_Installations')->insert([
			'InstID' => 3,
			'InstUserID' => '1',
			'InstIPaddy' => '$2y$10$H/MQbO1hOBauNxmlwxON/OZfjfMLbQ6SkA6fdVYTSx3jxU1zqRIXi',
			'InstSubmissionProgress' => '13',
			'InstUniqueStr' => 'FVeQS5OH8TjKyistZ7uo',
			'InstIsMobile' => '0'
		]);
		DB::table('SLI_Installations')->insert([
			'InstID' => 4,
			'InstIPaddy' => '$2y$10$mQxGBHRQSpFm07ksgaTlJu8MYvBrVESuqWLoHiBDKQN1iRaxQWl56',
			'InstUniqueStr' => 'rykA06HS3aNd7bJPhVQc',
			'InstIsMobile' => '0'
		]);
		DB::table('SLI_Installations')->insert([
			'InstID' => 5,
			'InstIPaddy' => '$2y$10$hk36HRCGBAikBZUreln8.OmC2rG.2W57AHKh/i4hD9Hb6npJS/RBi',
			'InstUniqueStr' => 'pxNYn4sygaCkA8LlvR3S',
			'InstIsMobile' => '0'
		]);
	
    }
}
