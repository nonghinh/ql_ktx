@extends('backend.app')
@section('title')
Thêm Phòng
@endsection
@section('caption')
Thêm phòng
@endsection
@section('content')
<div id="addRoom">
	<form action="" method="get" accept-charset="utf-8">
		<div class="col-md-6">
			<div class="form-group">
				<label>Số phòng</label>
				<input type="text" name="room_number" class="form-control" value="" placeholder="">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Dãy nhà</label>
				<select name="house_id" class="form-control">
					<option value="">Chọn dãy nhà</option>
					@foreach($houses as $house )
						<option value="{!! $house->manha!!}">{!! $house->tennha !!}</option>
					@endforeach
				</select>
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