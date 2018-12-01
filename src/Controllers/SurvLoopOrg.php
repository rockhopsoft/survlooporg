<?php
namespace SurvLoopOrg\Controllers;

use DB;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\SLIInstallations;
use App\Models\SLIInstallStats;

use SurvLoopOrg\Controllers\SurvLoopOrgReport;

use SurvLoop\Controllers\SurvFormTree;

class SurvLoopOrg extends SurvFormTree
{
    
    public $classExtension         = 'SurvLoopOrg';
    public $treeID                 = 1;
    
    
    // Initializing a bunch of things which are not [yet] automatically determined by the software
    protected function initExtra(Request $request)
    {
        // Establishing Main Navigation Organization, with Node ID# and Section Titles
        $this->majorSections = [];
        return true;
    }
    
    // Initializing a bunch of things which are not [yet] automatically determined by the software
    protected function loadExtra()
    {
        return true;
    }
    
    protected function customNodePrint($nID = -3, $tmpSubTier = [], $nIDtxt = '', $nSffx = '', $currVisib = 1)
    {
        $ret = '';
        if ($nID == 77) {
            $ret .= $this->gatherInstallStats($nID);
        }
        return $ret;
    }
    
    protected function customResponses($nID, $curr)
    {
        if ($nID == 37) {
            
        }
        return $curr;
    }
    
    protected function postNodePublicCustom($nID = -3, $tmpSubTier = [])
    { 
        if (empty($tmpSubTier)) $tmpSubTier = $this->loadNodeSubTier($nID);
        list($tbl, $fld) = $this->allNodes[$nID]->getTblFld();
        if ($nID == 37) {
            
        }
        return false; // false to continue standard post processing
    }
    
    public function ajaxChecksCustom(Request $request, $type = '')
    {
        if ($type == 'something-cool') {
            
        }
        return '';
    }
    
    // returns an array of overrides for ($currNodeSessionData, ???... 
    protected function printNodeSessDataOverride($nID = -3, $tmpSubTier = [], $currNodeSessionData = '')
    {
        if (sizeof($this->sessData->dataSets) == 0) return [];
        if ($nID == 37) {
            
        }
        return [];
    }
    
    protected function checkNodeConditionsCustom($nID, $condition = '')
    {
        if ($condition == '#SomethingCool') {
            
        }
        return -1;
    }
    
    protected function gatherInstallStats($nID)
    {
    	$insts = SLIInstallations::orderBy('created_at', 'asc')
    		->get();
        if ($insts->isNotEmpty()) {
            foreach ($insts as $i) {
                if (isset($i->InstURL) && trim($i->InstURL) != '' && $i->InstID > 1) {
                    $jsonFile = $i->InstURL . '/survloop-stats.json';
                    $jsonFile = 'https://survloop.org/survloop-stats.json';
echo '<br /><br /><br />' . $jsonFile;
                    if (file_exists($jsonFile)) {
                        $json = json_decode(file_get_contents($jsonFile), TRUE);
echo '<pre>'; print_r($json); echo '</pre>';
                        if (sizeof($json) > 0) {
                            
                        }
                    }
                }
            }
    	}
    	return view('vendor.survlooporg.nodes.77-gather-install-stats', $this->v)->render();
    }
    
}