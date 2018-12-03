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
        <th><nobr><a href="{{ $inst->InstURL }}" target="_blank"><div class="ico32">
            @if (isset($inst->InstIconUrl)) <img src="{{ $inst->InstIconUrl }}" border=0 > @endif </div>
            <b>{{ $inst->InstName }}</b></a></nobr></th>
        <th> @if (isset($inst->InstOnGitHub)) <a href="{{ $inst->InstOnGitHub }}" target="_blank"
            ><i class="fa fa-github f16" aria-hidden="true"></i></a> @endif </th>
        <td class="brdLft">{{ number_format($inst->InstStatCodeLinesControllers) }}</td>
        <td>{{ number_format($inst->InstStatCodeLinesViews) }}</td>
        <td class="brdLft">{{ $GLOBALS["SL"]->humanFilesize($inst->InstStatBytesControllers, 1) }}</td>
        <td>{{ $GLOBALS["SL"]->humanFilesize($inst->InstStatBytesDatabase, 1) }}</td>
        <td>{{ $GLOBALS["SL"]->humanFilesize($inst->InstStatBytesUploads, 1) }}</td>
        <td>{{ $GLOBALS["SL"]->humanFilesize($inst->InstStatBytesViews, 1) }}</td>
    </tr>
@empty
@endforelse
</table>

<style>
table.instStatRow tr td, table.instStatRow tr th { padding: 10px; }
table.instStatRow tr td { text-align: right; }
table.instStatRow tr th { text-align: left; }
</style>