<!-- resources/views/vendor/survlooporg/nodes/77-gather-install-stats.blade.php -->
<table class="table table-striped instStatRow" border=0 >
<tr>
    <th class="vaB"><b>Installations</b></th>
    <td class="vaB brdLft">Primary Survey Completions</td>
    <td class="vaB">Users</td>
    <td class="vaB brdLft">Data Tables</td>
    <td class="vaB">Table Linkages</td>
    <td class="vaB">Data Fields</td>
    <td class="vaB brdLft"><b>Surveys</b></td>
    <td class="vaB">Survey Nodes</td>
    <td class="vaB">Multiple-Choice</td>
    <td class="vaB">Open Ended</td>
    <td class="vaB"><nobr>Numeric /</nobr> Measure</td>
    <td class="vaB brdLft">Pages</td>
    <td class="vaB">Page Nodes</td>
</tr>
@forelse ($latest as $i => $inst)
    <tr @if ($i%2 > 0) class="row2" @endif >
        <th><nobr><a href="{{ $inst->inst_url }}" target="_blank"><div class="ico32">
            @if (isset($inst->inst_icon_url)) <img src="{{ $inst->inst_icon_url }}" border=0 > @endif </div>
            <b>{{ $inst->inst_name }}</b></a></nobr></th>
        <td class="brdLft">{{ number_format($inst->inst_stat_survey1_complete) }}</td>
        <td>{{ number_format($inst->inst_stat_users) }}</td>
        <td class="brdLft">{{ number_format($inst->inst_stat_db_tables) }}</td>
        <td>{{ number_format($inst->inst_stat_db_links) }}</td>
        <td>{{ number_format($inst->inst_stat_db_fields) }}</td>
        <td class="brdLft">{{ number_format($inst->inst_stat_surveys) }}</td>
        <td>{{ number_format($inst->inst_stat_survey_nodes) }}</td>
        <td>{{ number_format($inst->inst_stat_survey_nodes_mult) }}</td>
        <td>{{ number_format($inst->inst_stat_survey_nodes_open) }}</td>
        <td>{{ number_format($inst->inst_stat_survey_nodes_numb) }}</td>
        <td class="brdLft">{{ number_format($inst->inst_stat_pages) }}</td>
        <td>{{ number_format($inst->inst_stat_page_nodes) }}</td>
    </tr>
@empty
@endforelse
</table>

<style>
table.instStatRow tr td, table.instStatRow tr th { padding: 10px; }
table.instStatRow tr td { text-align: right; }
table.instStatRow tr th { text-align: left; }
.ico32 { display: inline; margin-right: 5px; }
.ico32, .ico32 img { height: 22px; width: 22px; }
</style>
