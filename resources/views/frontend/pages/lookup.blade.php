@extends('frontend.app')
@section('title')
Tra cứu Sinh viên
@endsection
@section('content')
	<div id="lookup">
		<div class="col-md-6 col-md-offset-3">
			<div class="search">
				<form action="{!! url('get_results') !!}" id="fLookup" method="get" accept-charset="utf-8">
					{!! csrf_field() !!}
					<div class="form-group" id="lookup-group">
						<input type="text" name="masv" id="inputLookup" value="" class="form-control" placeholder="Nhập mã sinh viên...">
						<i class="fa fa-search fa-fw"></i>
					</div>

				</form>
			</div>
		</div>
		<div class="col-md-12">
			<div id="resultLookup" class="col-md-6 col-md-offset-3">
				@if(isset($sv))
					<ul>
						<li><strong>{!! $sv->tensv !!}</strong> ở nhà {!! $sv->nha!!}, phòng {!! $sv->phong !!}</li>
					</ul>
				@endif
			</div>
		</div>
	</div>
@endsection