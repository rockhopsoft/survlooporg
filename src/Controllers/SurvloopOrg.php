<?php
/**
  * SurvloopOrg extends the Survloop main branching-tree engine.
  *
  * Survloop.org
  * @package  rockhopsoft/survlooporg
  * @author  Morgan Lesko <rockhoppers@runbox.com>
  * @since 0.0
  */
namespace RockHopSoft\SurvloopOrg\Controllers;

use Illuminate\Http\Request;
use RockHopSoft\SurvloopOrg\Controllers\SurvloopOrgNav;

class SurvloopOrg extends SurvloopOrgNav
{
    
    protected function customNodePrint(&$curr = null)
    {
        $ret = '';
        $nID = $curr->nID;
        $docuNavs = [
            641, 2386, 441, 759, 999, 1081, 1793, 
            2281, 2681, 3088, 3099, 3141
        ];
        if ($nID == 77) {
            $ret .= $this->gatherInstallStatTbl1($nID);
        } elseif ($nID == 81) {
            $ret .= $this->gatherInstallStatTbl2($nID);
        } elseif (in_array($nID, $docuNavs)) {
            $ret .= $this->printDocumentationNav($nID);

        } elseif ($nID == 3142) {
            $ret .= $this->instrInstallSurvloop($nID);
        } elseif ($nID == 3146) {
            $ret .= $this->instrUbuCreateSuperUser($nID);
        } elseif ($nID == 3118) {
            $ret .= $this->instrUbuCreateDatabase($nID);
        } elseif ($nID == 3163) {
            $ret .= $this->instrUbuInstallSurvloop($nID);
        } elseif ($nID == 3072) {
            $ret .= $this->instrInstallHomestead($nID);
        } elseif ($nID == 494) {
            $ret .= $this->instrHomesteadInstallSurvloop($nID);
        }
        return $ret;
    }
    
    protected function customResponses(&$curr)
    {
        if ($curr->nID == 37) {
            
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




    protected function instrInstallSurvloop($nID)
    {
        return view(
            'vendor.survlooporg.nodes.3142-generic-install-survloop'
        )->render();
    }

    protected function instrUbuCreateSuperUser($nID)
    {
        return view(
            'vendor.survlooporg.nodes.3146-ubuntu-create-super-user'
        )->render();
    }

    protected function instrUbuCreateDatabase($nID)
    {
        return view(
            'vendor.survlooporg.nodes.3118-ubuntu-create-database'
        )->render();
    }

    protected function instrUbuInstallSurvloop($nID)
    {
        return view(
            'vendor.survlooporg.nodes.3163-instruct-install-survloop'
        )->render();
    }

    protected function instrInstallHomestead($nID)
    {
        return view(
            'vendor.survlooporg.nodes.3072-instruct-install-homestead'
        )->render();
    }

    protected function instrHomesteadInstallSurvloop($nID)
    {
        $tabs = $GLOBALS["SL"]->printToggleTabs([
            [
                "title" => 'Auto-Install Scripts',
                "body"  => view(
                    'vendor.survlooporg.nodes.494-instruct-install-homestead-survloop-scripts'
                )->render()
            ], [
                "title" => 'All Commands, One-by-One',
                "body"  => view(
                    'vendor.survlooporg.nodes.494-instruct-install-homestead-survloop-commands'
                )->render()
            ]
        ]);
        return '<h5 class="slBlueDark">Install Survloop</h5>' . $tabs . '<p><br /></p>'
            . view('vendor.survlooporg.inc-instruct-survloop-initialize')->render();
    }
    

    


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

}