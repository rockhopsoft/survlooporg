<?php
/**
  * SurvLoopOrgFacade in Laravel is a class which redirects static 
  * method calls to the dynamic methods of an underlying class
  *
  * SurvLoop - All Our Data Are Belong
  * @package  rockhopsoft/survloop
  * @author  Morgan Lesko <rockhoppers@runbox.com>
  * @since 0.2.8
  */
namespace SurvLoopOrg;

use Illuminate\Support\Facades\Facade;

class SurvLoopOrgFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'survlooporgfacade';
    }
}
