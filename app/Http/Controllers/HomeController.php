<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\SinhVien;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.app');
    }
    public function getLookup(){
        
        return view('frontend.pages.lookup');
    }
    public function searchStudent(){
        if($_GET['masv']){
            $masv = $_GET['masv'];
            $sv = DB::table('sinhvien')->where('masv', $masv)->first();
            return view('frontend.pages.lookup', compact('sv'));
        }
    }
    public function getResults(){
        if(Request::ajax()){
            $data = strtoupper(Request::get('data'));
            
            $student = DB::table('sinhvien')->where('masv', $data)->skip(0)->take(5)->get();
            return view('frontend.pages.datalookup', compact('student'));
        }
    }
}
