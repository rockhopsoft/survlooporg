<?php
/**
  * SurvLoopOrg extends the SurvLoop main branching-tree engine.
  *
  * SurvLoop.org
  * @package  wikiworldorder/survlooporg
  * @author  Morgan Lesko <wikiworldorder@protonmail.com>
  * @since 0.0
  */
namespace SurvLoopOrg\Controllers;

use DB;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SLIInstallations;
use App\Models\SLIInstallStats;
use SurvLoop\Controllers\Globals\Globals;
use SurvLoop\Controllers\Tree\TreeSurvForm;

class SurvLoopOrg extends TreeSurvForm
{
    /*
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
    */
    
    protected function customNodePrint($nID = -3, $tmpSubTier = [], $nIDtxt = '', $nSffx = '', $currVisib = 1)
    {
        $ret = '';
        if ($nID == 77) {
            $ret .= $this->gatherInstallStatTbl1($nID);
        } elseif ($nID == 81) {
            $ret .= $this->gatherInstallStatTbl2($nID);
        } elseif (in_array($nID, [641, 2386, 441, 759, 999, 1081, 1793, 2281, 2681, 3088, 3099])) {
            $ret .= $this->printDocumentationNav($nID);
        }
        return $ret;
    }
    
    protected function customResponses($nID, $curr)
    {
        if ($nID == 37) {
            
        }
        return $curr;
    }
    
    protected function postNodePublicCustom($nID = -3, $nIDtxt = '', $tmpSubTier = [])
    { 
        if (empty($tmpSubTier)) {
            $tmpSubTier = $this->loadNodeSubTier($nID);
        }
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
        if (sizeof($this->sessData->dataSets) == 0) {
            return [];
        }
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
            ->join('SLI_Installations', 'SLI_InstallStats.InstStatInstallID', 
                '=', 'SLI_Installations.InstID')
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
                            $url = 'https://survloop.org/survloop-engine-stats.json';
                            //$stats = json_decode(file_get_contents($url), TRUE);
                        } else {
                            $file = $i->InstURL . '/survloop-stats.json';
                            $stats = json_decode(file_get_contents($file), TRUE);
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
                        $i->save(); // save Installation record
                    }
                }
            }
            $this->v["latest"] = $this->latestInstallStats();
        }
        $this->v["graph"] = [
            "title"  => 'Overall Stats',
            "divID"  => 'chartComplexity',
            "width"  => 600,
            "height" => 600,
            "lines"  => [
                [ "dat" => [ "x" => [], "y" => [] ], "datwrit" => [], "type"  => 'scatter',"mode" => 'lines', 
                    "name" => 'Data Tables', "color" => 'rgb(43,52,147)', "width" => 1 ],
                [ "dat" => [ "x" => [], "y" => [] ], "datwrit" => [], "type"  => 'scatter',"mode" => 'lines', 
                    "name" => 'Table Linkages', "color" => 'rgb(91,192,222)', "width" => 1 ],
                [ "dat" => [ "x" => [], "y" => [] ], "datwrit" => [], "type"  => 'scatter',"mode" => 'lines', 
                    "name" => 'Data Fields', "color" => 'rgb(42,171,210)', "width" => 1 ],
                [ "dat" => [ "x" => [], "y" => [] ], "datwrit" => [], "type"  => 'scatter',"mode" => 'lines', 
                    "name" => 'Surveys', "color" => 'rgb(65,108,189)', "width" => 1 ],
                [ "dat" => [ "x" => [], "y" => [] ], "datwrit" => [], "type"  => 'scatter',"mode" => 'lines', 
                    "name" => 'Survey Multiple-Choice', "color" => 'rgb(0,109,54)', "width" => 1 ],
                [ "dat" => [ "x" => [], "y" => [] ], "datwrit" => [], "type"  => 'scatter',"mode" => 'lines', 
                    "name" => 'Survey Open Ended', "color" => 'rgb(41,183,111)', "width" => 1 ],
                [ "dat" => [ "x" => [], "y" => [] ], "datwrit" => [], "type"  => 'scatter',"mode" => 'lines', 
                    "name" => 'Survey Structure Nodes', "color" => 'rgb(83,241,235)', "width" => 1 ]
                ]
            ];
        
        $dailyTots = [];
        $chk = SLIInstallStats::orderBy('InstStatDate', 'asc')
            ->get();
        if ($chk->isNotEmpty()) {
            foreach ($chk as $stat) {
                if (!isset($dailyTots[$stat->InstStatDate])) {
                    $dailyTots[$stat->InstStatDate] = [
                        "DbTables"        => 0,
                        "DbLinks"         => 0,
                        "DbFields"        => 0,
                        "Surveys"         => 0,
                        "SurveyNodesMult" => 0,
                        "SurveyNodesOpen" => 0,
                        "SurveyNodes"     => 0
                    ];
                }
                foreach ($dailyTots[$stat->InstStatDate] as $fld => $cnt) {
                    if (isset($stat->{ 'InstStat' . $fld })) {
                        $dailyTots[$stat->InstStatDate][$fld] += intVal($stat->{ 'InstStat' . $fld });
                    }
                }
            }
            foreach ($dailyTots as $date => $stats) {
                for ($i = 0; $i < 7; $i++) {
                    $this->v["graph"]["lines"][$i]["dat"]["x"][] = $date;
                }
                $this->v["graph"]["lines"][0]["dat"]["y"][] = $stats["DbTables"];
                $this->v["graph"]["lines"][1]["dat"]["y"][] = $stats["DbLinks"];
                $this->v["graph"]["lines"][2]["dat"]["y"][] = $stats["DbFields"];
                $this->v["graph"]["lines"][3]["dat"]["y"][] = $stats["Surveys"];
                $this->v["graph"]["lines"][4]["dat"]["y"][] = $stats["SurveyNodesMult"];
                $this->v["graph"]["lines"][5]["dat"]["y"][] = $stats["SurveyNodesOpen"];
                $this->v["graph"]["lines"][6]["dat"]["y"][] 
                    = $stats["SurveyNodes"]-$stats["SurveyNodesMult"]-$stats["SurveyNodesOpen"];
            }
            foreach ($this->v["graph"]["lines"] as $i => $line) {
                $this->v["graph"]["lines"][$i]["datwrit"]["x"] = '\'' . implode('\', \'', $line["dat"]["x"]) . '\'';
                $this->v["graph"]["lines"][$i]["datwrit"]["y"] = implode(', ', $line["dat"]["y"]);
            }
        }
        $GLOBALS["SL"]->pageJAVA 
            .= view('vendor.survlooporg.nodes.77-gather-install-stats-js', $this->v["graph"])->render();
        $GLOBALS["SL"]->x["needsPlots"] = true;
    	return view('vendor.survlooporg.nodes.77-gather-install-stats', $this->v)->render();
    }
    
    protected function gatherInstallStatTbl2($nID)
    {
    	return view('vendor.survlooporg.nodes.81-gather-install-stats-table2', $this->v)->render();
    }
    
    protected function gatherInstallStatGraph($nID)
    {
    	return view('vendor.survlooporg.nodes.81-gather-install-stats-table2', $this->v)->render();
    }
    
    public function engineJsonSurvStats(Request $request)
    {
        header('Content-Type: application/json');
        $GLOBALS["SL"] = new Globals($request, 3, 3, 3);
        $stats = $GLOBALS["SL"]->getJsonSurvLoopStats('wikiworldorder/survloop');
    	echo json_encode($stats);
        exit;
    }
    
    protected function printDocumentationNav($nID)
    {
        $docuNav = [
            [
                'How To Install Survloop', 
                [
                    [
                        '/how-to-install-survloop', 
                        'Install SurvLoop'
                    ],[
                        '/how-to-install-laravel-on-an-ubuntu-server', 
                        'Install Laravel on Ubuntu Server'
                    ],[
                        '/how-to-install-laravel-locally-on-a-mac', 
                        'Install Laravel locally <nobr>on a Mac</nobr>'
                    ]
                ]
            ],
            [
                'SurvLoop Codebase Orientation',
                [
                    [
                        '/introduction-to-survloop-codebase', 
                        'What Is SurvLoop?'
                    ],[
                        '/package-files-folders-classes', 
                        'Folders, Files, & Classes'
                    ],[
                        '/developer-work-flows', 
                        'Developer Work Flows'
                    ],[
                        '/how-a-basic-page-loads-with-survloop', 
                        'How A Basic Page Loads'
                    ]
                ]
            ]
        ];
        return view('vendor.survlooporg.inc-documentation-navigation', [
            "docuNav"  => $docuNav,
            "currPage" => $this->getCurrPage()
        ])->render();
    }
    
}