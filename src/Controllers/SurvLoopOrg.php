<?php
namespace SurvLoopOrg\Controllers;

use DB;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SLIInstallations;
use App\Models\SLIInstallStats;
use SurvLoop\Controllers\CoreGlobals;
use SurvLoop\Controllers\TreeSurvForm;

class SurvLoopOrg extends TreeSurvForm
{
    // Initializing a bunch of things which are not [yet] automatically determined by the software
    protected function initExtra(Request $request)
    {
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
            $ret .= $this->gatherInstallStatTbl1($nID);
        } elseif ($nID == 81) {
            $ret .= $this->gatherInstallStatTbl2($nID);
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
    protected function printNodeSessDataOverride($nID = -3, $tmpSubTier = [], $nIDtxt = '', $currNodeSessionData = '')
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
    
    protected function latestInstallStats()
    {
        return DB::table('SLI_InstallStats')
            ->join('SLI_Installations', 'SLI_InstallStats.InstStatInstallID', '=', 'SLI_Installations.InstID')
            ->where('SLI_InstallStats.InstStatDate', '=', date("Y-m-d"))
            ->orderBy('SLI_InstallStats.InstStatInstallID', 'asc')
            ->select('SLI_Installations.*', 'SLI_InstallStats.*')
            ->get();
    }
    
    protected function gatherInstallStatTbl1($nID)
    {
        $this->v["latest"] = $this->latestInstallStats();
        if ($this->v["latest"]->isEmpty() || $GLOBALS["SL"]->REQ->has('refresh')) {
            $insts = SLIInstallations::orderBy('created_at', 'asc')
                ->get();
            if ($insts->isNotEmpty()) {
                foreach ($insts as $i) {
                    if (isset($i->InstURL) && trim($i->InstURL) != '') {
                        $stats = [];
                        if ($i->InstID == 1) {
                            $dbOg = [$this->dbID, $this->treeID];
                            $GLOBALS["SL"] = new CoreGlobals($GLOBALS["SL"]->REQ, 3, 3, 3);
                            $stats = $GLOBALS["SL"]->getJsonSurvLoopStats('wikiworldorder/survloop');
                            $GLOBALS["SL"] = new CoreGlobals($GLOBALS["SL"]->REQ, $dbOg[0], $dbOg[1], $dbOg[1]);
                        } else { // if ($i->InstID != 3) {
                            $jsonFile = $i->InstURL . '/survloop-stats.json';
                            $stats = json_decode(file_get_contents($jsonFile), TRUE);
                        }
                        if (sizeof($stats) > 0) {
                            $stat = SLIInstallStats::where('InstStatInstallID', $i->InstID)
                                ->where('InstStatDate', date("Y-m-d"))
                                ->first();
                            if (!$stat) {
                                $stat = new SLIInstallStats;
                                $stat->InstStatInstallID = $i->InstID;
                            }
                            foreach ($stats as $fld => $val) {
                                if ($fld == 'IconUrl') {
                                    $i->{ 'Inst' . $fld } = $val;
                                } else {
                                    $stat->{ 'InstStat' . $fld } = $val;
                                }
                            }
                            $stat->save();
                        }
                        $i->save();
                    }
                }
            }
            $this->v["latest"] = $this->latestInstallStats();
        }
    	return view('vendor.survlooporg.nodes.77-gather-install-stats', $this->v)->render();
    }
    
    protected function gatherInstallStatTbl2($nID)
    {
    	return view('vendor.survlooporg.nodes.81-gather-install-stats-table2', $this->v)->render();
    }
    
}