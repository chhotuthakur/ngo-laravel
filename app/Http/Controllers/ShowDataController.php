<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ShowDataController extends Controller
{
    public function index(){
        $users = DB::select('select * from student_details');
        return view('frontend.layouts.header',['users'=>$users]);
        }
}
