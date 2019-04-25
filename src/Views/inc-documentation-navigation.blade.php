<!-- resources/views/vendor/survlooporg/inc-documentation-navigation.blade.php -->

<h4><a href="/documentation" class="slBlueDark">Documentation Overview</a></h4>

<a href="https://github.com/wikiworldorder/survloop" target="_blank" class="btn btn-primary btn-block taL mB20"><div class="row"><div class="col-2 pT5 pL20"><i class="fa fa-github" aria-hidden="true"></i></div><div class="col-10 taL pT15">github.com/<br>wikiworldorder/survloop</div></div></a>

@forelse ($docuNav as $i => $category)
    <div class="p10"><b>{{ $category[0] }}</b></div>
    @forelse ($category[1] as $j => $nav)
        <p><a href="{{ $nav[0] }}" class="btn btn-block taL
            @if ($currPage == $nav[0]) btn-secondary @else btn-primary @endif ">{!! $nav[1] !!}</a></p>
    @empty
    @endforelse
@empty
@endforelse
