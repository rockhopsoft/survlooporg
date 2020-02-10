<!-- resources/views/vendor/survlooporg/nodes/81-gather-install-stats-table2.blade.php -->
<table class="table instStatRow" border=0 >
<tr class="row2 vaB">
    <th colspan=2 style="border-bottom: 0px none;" > </th>
    <td colspan=2 class="vaB brdLft">Lines of Code</td>
    <td colspan=4 class="vaB brdLft">Bytes of Code</td>
</tr><tr class="row2">
    <th class="vaB"><b>Installations</b></th>
    <th class="vaB">GitHub</th>
    <td class="vaB brdLft">Controllers</td>
    <td class="vaB">Views</td>
    <td class="vaB brdLft">Controllers</td>
    <td class="vaB">Views</td>
    <td class="vaB">Database</td>
    <td class="vaB">Uploads</td>
</tr>
@forelse ($latest as $i => $inst)
    <tr @if ($i%2 > 0) class="row2" @endif >
        <th><nobr><a href="{{ $inst->inst_url }}" target="_blank"><div class="ico32">
            @if (isset($inst->inst_icon_url)) <img src="{{ $inst->inst_icon_url }}" border=0 > @endif </div>
            <b>{{ $inst->inst_name }}</b></a></nobr></th>
        <th> @if (isset($inst->inst_on_github)) <a href="{{ $inst->inst_on_github }}" target="_blank"
            ><i class="fa fa-github f16" aria-hidden="true"></i></a> @endif </th>
        <td class="brdLft">{{ number_format($inst->inst_stat_code_lines_controllers) }}</td>
        <td>{{ number_format($inst->inst_stat_code_lines_views) }}</td>
        <td class="brdLft">{{ $GLOBALS["SL"]->humanFilesize($inst->inst_stat_bytes_controllers, 1) }}</td>
        <td>{{ $GLOBALS["SL"]->humanFilesize($inst->inst_stat_bytes_database, 1) }}</td>
        <td>{{ $GLOBALS["SL"]->humanFilesize($inst->inst_stat_bytes_uploads, 1) }}</td>
        <td>{{ $GLOBALS["SL"]->humanFilesize($inst->inst_stat_bytes_views, 1) }}</td>
    </tr>
@empty
@endforelse
</table>

<p>&nbsp;</p>
<h1 class="mB0">Total Install Stats Over Time</h1>
<div id="chartComplexity"></div>

<style>
table.instStatRow tr td, table.instStatRow tr th { padding: 10px; }
table.instStatRow tr td { text-align: right; }
table.instStatRow tr th { text-align: left; }
</style>