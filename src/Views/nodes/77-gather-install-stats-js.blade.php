/* resources/views/vendor/survlooporg/nodes/77-gather-install-stats-js.blade.php */

@foreach ($lines as $i => $line)
trace{{ $i }} = {
  type: '{{ $line["type"] }}',
  x: [{!! $line["datwrit"]["x"] !!}],
  y: [{!! $line["datwrit"]["y"] !!}],
  mode: '{{ $line["mode"] }}',
  name: '{{ $line["name"] }}',
  line: {
    color: '{{ $line["color"] }}',
    width: {{ $line["width"] }}
  }
};
@endforeach

var layout = {
  width: {{ $width }},
  height: {{ $height }}
};

var data = [@foreach ($lines as $i => $line)@if ($i > 0),@endif trace{{ $i }} @endforeach];

Plotly.newPlot('{{ $divID }}', data, layout);
