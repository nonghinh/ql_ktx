@extends('backend.app')
@section('title')
Danh sach
@endsection
@section('caption')
	DAnh sach
@endsection
@section('content')
<div id="listUser">
	<div class="showMessage">
		@if(Session::has('flash_message'))
			<div class="alert alert-{{Session::get('flash_level')}}">
				{{ Session::get('flash_message')}}
			</div>
		@endif
	</div>
	<a href="{!! url('backend/user/add') !!}" class="btn btn-primary" title=""><i class="fa fa-plus"></i> Thêm người dùng</a>
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Tài khoản</th>
				<th>Email</th>
				<th>Vai trò</th>
				<th colspan="2">Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<?php $stt = 0; ?>
			@foreach($users as $user)
			<?php $stt++; ?>
				<tr>
					<td>{{ $stt }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
					@if($user->level == 1)
						{{ 'QL A'}}
					@elseif($user->level == 2)
						{{ 'QL B'}}
					@elseif($user->level == 3)
						{{ 'QL C' }}
					@else
						{{ 'admin' }}
					@endif
					</td>
					<td>
						<a href="{!! url('backend/user/edit/'.$user->id)!!}" title="Edit"><i class="fa fa-pencil-square-o"></i> Sửa</a>
					</td>
					<td>
						<a href="{!! url('backend/user/delete/'.$user->id)!!}" title="Delete" onclick="return confirmDelete()"><i class="fa fa-trash"></i> Xóa</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection