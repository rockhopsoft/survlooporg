<?php
use RockHopSoft\SurvloopOrg\Controllers\SurvloopOrgGlobals;

/**
 * Load a global helper object which is extendable
 * by customized installations of Survloop.
 *
 * @return RockHopSoft\Survloop\Controllers\Globals\Globals
 */
if (!function_exists('slorg')) {
    function slorg()
    {
        if (!isset($GLOBALS["CUST"])) {
            $GLOBALS["CUST"] = new SurvloopOrgGlobals;
        }
        return $GLOBALS["CUST"];
    }
}