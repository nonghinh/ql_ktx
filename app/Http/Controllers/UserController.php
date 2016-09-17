<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\User;
use Session;
class UserController extends Controller
{
    //
    public function getAdd(){
    	return view('backend.user.add');
    }
    public function postAdd(UserRequest $req){
    	$user = new User;
    	$user->name = $req->username;
    	$user->email = $req->email;
    	$user->password = bcrypt($req->password);
    	$user->level = $req->level;
    	$user->save();
    	return redirect()->route('backend.user.list')->with(['flash_level' => 'success', 'flash_message' => 'Thêm thành công!']);
    }

    public function getList(){
    	Session::set("active", "user");
    	$users = User::select('id', 'name', 'email', 'level')->orderBy('id', 'DESC')->paginate(10);
		return view('backend.user.list', compact('users'));
    }

    public function getEdit($id){
    	$user = User::find($id);
    	return view('backend.user.edit', compact('user'));
    }
    public function postEdit($id, Request $req){
    	$user = User::find($id);
    	$this->validate($req, [
    		'username' => 'required|min:5|unique:users,name,'.$user->id,
    		'email' => 'required|email|unique:users,email,'.$user->id,
    		],
    		[
    			'username.required' => 'Hãy nhập tên tài khoản',
	            'username.min' => 'Tên tài khoản quá ngắn',
	            'username.name' => 'Tên tài khoản đã tồn tại',
	            'email.required' => 'Bạn chưa nhập email',
	            'email.email' => 'Email sai định dạng',
	            'email.unique' => 'Email đã được dùng',	
    		]);
    	$user->name = $req->username;
    	$user->email = $req->email;
    	$user->password = bcrypt($req->password);
    	$user->level = $req->level;
    	$user->save();
    	return redirect()->route('backend.user.list')->with(['flash_level' => 'success', 'flash_message' => 'Cập nhật thành công!']);
    }

    public function getDelete($id){
    	$user = User::find($id);
    	$user->delete();
    	return redirect()->route('backend.user.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công!']);
    }
}
