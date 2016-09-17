@extends('backend.app')
@section('title')
Danh sách dãy nhà
@endsection
@section('caption')
Danh sách dãy nhà
Them day nha
@endsection
@section('content')
<div id="listBuild">
	<div class="showMessage">
		@if(Session::has('flash_message'))
			<div class="alert alert-{{Session::get('flash_level')}}">
				{{ Session::get('flash_message')}}
			</div>
		@endif
	</div>
	<div class="rown">
		<a href="{!! url('backend/house/add') !!}" class="btn btn-primary" title=""><i class="fa fa-plus"></i> Thêm dãy nhà</a>
	</div>
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Dãy nhà</th>
				<th>Mô tả</th>
				<th colspan="2">Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<?php $stt = 0; ?>
			@foreach($houses as $house)
			<?php $stt++; ?>
				<tr>
					<td>{{ $stt }}</td>
					<td>{{ $house->tennha }}</td>
					<td>{{ $house->mota }}</td>
					
					<td>
						<a href="{!! url('backend/house/edit/'.$house->manha)!!}" title="Edit"><i class="fa fa-pencil-square-o"></i> Sửa</a>
					</td>
					<td>
						<a href="{!! url('backend/house/delete/'.$house->manha)!!}" title="Delete" onclick="return confirmDelete()"><i class="fa fa-trash"></i> Xóa</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection