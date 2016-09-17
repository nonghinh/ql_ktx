@extends('backend.app')
@section('title')
Them day nha
@endsection
@section('caption')
Them day nha
@endsection
@section('content')
<div id="addBuild">
	@include('backend.includes.errors')
	<form action="" method="post" accept-charset="utf-8">
		<div class="col-md-6">
		{{ csrf_field() }}
			<div class="form-group">
				<label>Tên dãy nhà</label>
				<input type="text" name="housename" class="form-control" value="{!! old('housename')!!}" placeholder="">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Mô tả</label>
				<textarea name="description" rows="3" class="form-control"></textarea>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Lưu lại</button>
			</div>
		</div>
	</form>
</div>
@endsection
