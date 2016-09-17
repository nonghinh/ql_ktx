<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DaynhaRequest;
use App\Daynha;
class DaynhaController extends Controller
{
    //
    public function getAdd(){
    	return view('backend.daynha.add');
    }
    public function postAdd(DaynhaRequest $req){
    	$house = new Daynha;
    	$house->tennha = $req->housename;
    	$house->mota = $req->description;
    	$house->save();
    	return redirect()->route('backend.house.list')->with(['flash_level' => 'success', 'flash_message' => 'Thêm thành công!']);
    }
    public function getList(){
    	$houses = Daynha::paginate(20);
    	return view('backend.daynha.list', compact('houses'));
    }
    public function getEdit($id){
    	$house = Daynha::where('manha',$id)->first();
    	return view('backend.daynha.edit', compact('house'));
    }
    public function postEdit( $id, Request $req){
    	$house = Daynha::where('manha',$id)->first();
    	$this->validate($req, [
    		'housename' => 'required|unique:daynha,tennha',
    		],[
    		'housename.required' => 'Tên dãy nhà không được trống',
    		'housename.unique' => 'Tên dãy nhà đã tồn tại',
    		]);
    	$house->tennha = $req->housename;
    	$house->mota = $req->description;
    	$house->save();

    	return redirect()->route('backend.house.list')->with(['flash_level' => 'success', 'flash_message' => 'Cập nhật thành công!']);
    }
    public function getDelete($id){
    	$house = Daynha::where('manha',$id)->first();
    	$house->delete();
    	return redirect()->route('backend.house.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thành công!']);
    }
}
