@extends('backend.app')
@section('title')
Thêm người dùng
@endsection
@section('caption')
	Thêm người dùng
@endsection
@section('content')
	<div id="addUser">
		<div class="container-fluid">
			@if(count($errors) > 0)
				<div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
		</div>
		<form action="{!! url('backend/user/add')!!}" method="post" accept-charset="utf-8">
			{!! csrf_field() !!}
			<div class="col-md-6">
				<div class="form-group">
					<label>Tên tài khoản<span class="required">*</span></label>
					<input type="text" name="username" value="{!! old('username')!!}" class="form-control" placeholder="Username">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Email<span class="required">*</span></label>
					<input type="email" name="email" value="{!! old('email')!!}" class="form-control" placeholder="Email">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Mật khẩu<span class="required">*</span></label>
					<input type="password" name="password" value="" class="form-control" placeholder="Password">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Xác nhận mật khẩu<span class="required">*</span></label>
					<input type="password" name="confirm_password" value="" class="form-control" placeholder="Confirm Password">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Vai trò</label>
					<select name="level" class="form-control">
						<option value="1" selected>QL A</option>
						<option value="2">QL B</option>
						<option value="3">QL C</option>
					</select>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Lưu lại</button>
				</div>
			</div>
		</form>
	</div>
@endsection