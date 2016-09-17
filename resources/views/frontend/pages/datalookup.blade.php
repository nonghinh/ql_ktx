@if($student)
<ul>
	@foreach($student as $val)
	<li><strong>{!! $val->tensv!!}</strong> ở nhà {!! $val->nha !!}, phòng {!! $val->phong !!}</li>
	@endforeach
</ul>
@else
{!! 'No data'!!}
@endif