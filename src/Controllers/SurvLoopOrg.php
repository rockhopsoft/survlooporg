<?php
/**
  * SurvLoopOrg extends the SurvLoop main branching-tree engine.
  *
  * SurvLoop.org
  * @package  rockhopsoft/survlooporg
  * @author  Morgan Lesko <rockhoppers@runbox.com>
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
    
    protected function customNodePrint(&$curr = null)
    {
        $ret = '';
        $nID = $curr->nID;
        $docuNavs = [641, 2386, 441, 759, 999, 1081, 1793, 2281, 2681, 3088, 3099];
        if ($nID == 77) {
            $ret .= $this->gatherInstallStatTbl1($nID);
        } elseif ($nID == 81) {
            $ret .= $this->gatherInstallStatTbl2($nID);
        } elseif (in_array($nID, $docuNavs)) {
            $ret .= $this->printDocumentationNav($nID);
        }
        return $ret;
    }
    
    protected function customResponses($nID, &$curr)
    {
        if ($nID == 37) {
            
        }
        return $curr;
    }
    
    protected function postNodePublicCustom(&$curr)
    { 
        if (empty($tmpSubTier)) {
            $tmpSubTier = $this->loadNodeSubTier($curr->nID);
        }
        list($curr->tbl, $curr->fld) = $this->allNodes[$curr->nID]->getTblFld();
        if ($curr->nID == 37) {
            
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
    protected function printNodeSessDataOverride(&$curr)
    {
        if (sizeof($this->sessData->dataSets) == 0) {
            return [];
        }
        if ($curr->nID == 37) {
            
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
        return DB::table('sli_install_stats')
            ->join('sli_installations', 'sli_install_stats.inst_stat_install_id', 
                '=', 'sli_installations.inst_id')
            ->where('sli_install_stats.inst_stat_date', '=', date("Y-m-d"))
            ->orderBy('sli_install_stats.inst_stat_install_id', 'asc')
            ->select('sli_installations.*', 'sli_install_stats.*')
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
                    if (isset($i->inst_url) && trim($i->inst_url) != '') {
                        $stats = [];
                        if ($i->inst_id == 1) {
                            $stats = $GLOBALS["SL"]->getJsonSurvStats('rockhopsoft/survloop');
                        } else {
                            $file = $i->inst_url . '/survloop-stats.json';
                            $stats = json_decode(file_get_contents($file), TRUE);
                        }
                        if (sizeof($stats) > 0) {
                            $stat = SLIInstallStats::where('inst_stat_install_id', $i->inst_id)
                                ->where('inst_stat_date', date("Y-m-d"))
                                ->first();
                            if (!$stat) {
                                $stat = new SLIInstallStats;
                                $stat->inst_stat_install_id = $i->inst_id;
                            }
                            foreach ($stats as $fld => $val) {
                                if ($fld == strtolower($fld)) {
                                    if ($fld == 'icon_url') {
                                        $i->{ 'inst_' . $fld } = $val;
                                    } else {
                                        $stat->{ 'inst_stat_' . $fld } = $val;
                                    }
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
                [ 
                    "dat" => [ 
                        "x" => [], 
                        "y" => [] 
                    ], 
                    "datwrit" => [], 
                    "type"  => 'scatter',
                    "mode" => 'lines', 
                    "name" => 'Data Tables', 
                    "color" => 'rgb(43,52,147)', 
                    "width" => 1 
                ], [ 
                    "dat" => [
                        "x" => [], 
                        "y" => [] 
                    ],
                    "datwrit" => [], 
                    "type"  => 'scatter',
                    "mode" => 'lines', 
                    "name" => 'Table Linkages', 
                    "color" => 'rgb(91,192,222)', 
                    "width" => 1 
                ], [ 
                    "dat" => [ 
                        "x" => [], 
                        "y" => [] 
                    ], 
                    "datwrit" => [], 
                    "type"  => 'scatter',
                    "mode" => 'lines', 
                    "name" => 'Data Fields', 
                    "color" => 'rgb(42,171,210)', 
                    "width" => 1
                ], [ 
                    "dat" => [ 
                        "x" => [], 
                        "y" => [] 
                    ], 
                    "datwrit" => [], 
                    "type"  => 'scatter',
                    "mode" => 'lines', 
                    "name" => 'Surveys', 
                    "color" => 'rgb(65,108,189)', 
                    "width" => 1 
                ], [ 
                    "dat" => [
                        "x" => [], 
                        "y" => []
                    ], 
                    "datwrit" => [], 
                    "type"  => 'scatter',
                    "mode" => 'lines', 
                    "name" => 'Survey Multiple-Choice', 
                    "color" => 'rgb(0,109,54)', 
                    "width" => 1 
                ], [ 
                    "dat" => [ 
                        "x" => [], 
                        "y" => [] 
                    ], 
                    "datwrit" => [], 
                    "type"  => 'scatter',
                    "mode" => 'lines', 
                    "name" => 'Survey Open Ended', 
                    "color" => 'rgb(41,183,111)', 
                    "width" => 1 
                ], [ 
                    "dat" => [ 
                        "x" => [], 
                        "y" => [] 
                    ], 
                    "datwrit" => [], 
                    "type"  => 'scatter',
                    "mode" => 'lines', 
                    "name" => 'Survey Structure Nodes', 
                    "color" => 'rgb(83,241,235)', 
                    "width" => 1 
                ]
            ]
        ];
        
        $dailyTots = [];
        $chk = SLIInstallStats::orderBy('inst_stat_date', 'asc')
            ->get();
        if ($chk->isNotEmpty()) {
            foreach ($chk as $stat) {
                if (!isset($dailyTots[$stat->inst_stat_date])) {
                    $dailyTots[$stat->inst_stat_date] = [
                        "db_tables"         => 0,
                        "db_links"          => 0,
                        "db_fields"         => 0,
                        "surveys"           => 0,
                        "survey_nodes_mult" => 0,
                        "survey_nodes_open" => 0,
                        "survey_nodes"      => 0
                    ];
                }
                foreach ($dailyTots[$stat->inst_stat_date] as $fld => $cnt) {
                    if (isset($stat->{ 'inst_stat_' . $fld })) {
                        $dailyTots[$stat->inst_stat_date][$fld] 
                            += intVal($stat->{ 'inst_stat_' . $fld });
                    }
                }
            }
            foreach ($dailyTots as $date => $stats) {
                for ($i = 0; $i < 7; $i++) {
                    $this->v["graph"]["lines"][$i]["dat"]["x"][] = $date;
                }
                $this->v["graph"]["lines"][0]["dat"]["y"][] = $stats["db_tables"];
                $this->v["graph"]["lines"][1]["dat"]["y"][] = $stats["db_links"];
                $this->v["graph"]["lines"][2]["dat"]["y"][] = $stats["db_fields"];
                $this->v["graph"]["lines"][3]["dat"]["y"][] = $stats["surveys"];
                $this->v["graph"]["lines"][4]["dat"]["y"][] = $stats["survey_nodes_mult"];
                $this->v["graph"]["lines"][5]["dat"]["y"][] = $stats["survey_nodes_open"];
                $this->v["graph"]["lines"][6]["dat"]["y"][] 
                    = $stats["survey_nodes"]-$stats["survey_nodes_mult"]-$stats["survey_nodes_open"];
            }
            foreach ($this->v["graph"]["lines"] as $i => $line) {
                $this->v["graph"]["lines"][$i]["datwrit"]["x"] = '\'' 
                    . implode('\', \'', $line["dat"]["x"]) . '\'';
                $this->v["graph"]["lines"][$i]["datwrit"]["y"] = implode(', ', $line["dat"]["y"]);
            }
        }
        $GLOBALS["SL"]->pageJAVA .= view(
            'vendor.survlooporg.nodes.77-gather-install-stats-js', 
            $this->v["graph"]
        )->render();
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
        return view(
            'vendor.survlooporg.inc-documentation-navigation', 
            [
                "docuNav"  => $docuNav,
                "currPage" => $this->getCurrPage()
            ]
        )->render();
    }
    
}