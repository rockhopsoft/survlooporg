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

<div class="pT20"><p>
	<a href="https://github.com/wikiworldorder/survloop" target="_blank" 
		class="btn btn-secondary btn-lg btn-block taL mB20"
		><i class="fa fa-github mR5" aria-hidden="true"></i> 
		wikiworldorder/survloop</a>
</p></div>
