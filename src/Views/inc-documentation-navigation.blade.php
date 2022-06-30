<!-- resources/views/vendor/survlooporg/inc-documentation-navigation.blade.php -->

<h4><a href="/documentation" class="slBlueDark"
	>Documentation Overview</a></h4>

@forelse ($docuNav as $i => $category)
    <div class="pT20">
    	<p><b>{{ $category[0] }}</b></p>
	    <ul>
	    @forelse ($category[1] as $j => $nav)
	        <li>
	        	@if ($currPage == $nav[0]) <b class="slBlueDark">{!! $nav[1] !!}</b>
	        	@else <a href="{{ $nav[0] }}">{!! $nav[1] !!}</a>
	        	@endif
	        </li>
	    @empty
	    @endforelse
	   	</ul>
	</div>
@empty
@endforelse

<div class="pT20">
	<a href="https://github.com/rockhopsoft/survloop" 
		target="_blank"><i class="fa-brands fa-github mR3"></i>
		rockhopsoft/survloop</a>
</div>
<div class="pT10">
	<a href="https://github.com/rockhopsoft/install-scripts" 
		target="_blank"><i class="fa-brands fa-github mR3"></i>
		rockhopsoft/install-scripts</a>
</div>
