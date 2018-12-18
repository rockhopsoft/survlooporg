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
        <th><nobr><a href="{{ $inst->InstURL }}" target="_blank"><div class="ico32">
            @if (isset($inst->InstIconUrl)) <img src="{{ $inst->InstIconUrl }}" border=0 > @endif </div>
            <b>{{ $inst->InstName }}</b></a></nobr></th>
        <td class="brdLft">{{ number_format($inst->InstStatSurvey1Complete) }}</td>
        <td>{{ number_format($inst->InstStatUsers) }}</td>
        <td class="brdLft">{{ number_format($inst->InstStatDbTables) }}</td>
        <td>{{ number_format($inst->InstStatDbLinks) }}</td>
        <td>{{ number_format($inst->InstStatDbFields) }}</td>
        <td class="brdLft">{{ number_format($inst->InstStatSurveys) }}</td>
        <td>{{ number_format($inst->InstStatSurveyNodes) }}</td>
        <td>{{ number_format($inst->InstStatSurveyNodesMult) }}</td>
        <td>{{ number_format($inst->InstStatSurveyNodesOpen) }}</td>
        <td>{{ number_format($inst->InstStatSurveyNodesNumb) }}</td>
        <td class="brdLft">{{ number_format($inst->InstStatPages) }}</td>
        <td>{{ number_format($inst->InstStatPageNodes) }}</td>
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
