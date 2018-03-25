<?php
namespace SurvLoopOrg\Controllers;

use SurvLoopOrg\Controllers\SurvLoopOrg;

class SurvLoopOrgReport extends SurvLoopOrg
{
    
    public $classExtension  = 'SurvLoopOrgReport';
    public $treeID          = 1;
    protected $isReport     = true;
    public $hideDisclaim    = false;
    
    
    public function prepReport()
    {
        return true;
    }
    
    public function printPreviewReport($isAdmin = false)
    {
        /* $this->prepReport();
        return view('vendor.rii.powerscore-report-preview', [
            "sessData" => $this->sessData->dataSets 
        ]); */
        return '';
    }
    
}
