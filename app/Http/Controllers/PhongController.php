<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PhongRequest;

use App\Daynha;
class PhongController extends Controller
{
    //
    public function getAdd(){
    	$houses = Daynha::all();
    	return view('backend.phong.add', compact('houses'));
    }
    public function postAdd(PhongRequest $req){
    	$room = new Phong;
    	$room->sop = $req->room_number;
    	$room->manha = $req->house_id;
    	$room->mota = $req->description;
    }
    public function getList(){}
    public function getEdit($id){}
    public function postEdit($id){}
    public function getDelete($id){}
}
