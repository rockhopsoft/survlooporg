<!-- resources/views/vendor/survlooporg/inc-documentation-navigation.blade.php -->

<h4><a href="/documentation" class="slBlueDark">Documentation Overview</a></h4>

@forelse ($docuNav as $i => $category)
    <div class="p10"><b>{{ $category[0] }}</b></div>
    @forelse ($category[1] as $j => $nav)
        <p><a href="{{ $nav[0] }}" class="btn btn-block taL
            @if ($currPage == $nav[0]) btn-secondary @else btn-primary @endif ">{!! $nav[1] !!}</a></p>
    @empty
    @endforelse
@empty
@endforelse
