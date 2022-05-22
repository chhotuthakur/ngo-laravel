<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddInfoController extends Controller
{
    public function add_info(Request $request){
        $title = $request->input('title');
        $subtitle = $request->input('subtitle');
        $con_mail = $request->input('con_mail');
        $con_num = $request->input('con_num');
        $reg_num = $request->input('reg_num');
        $data=array('title'=>$title,"subtitle"=>$subtitle,"con_mail"=>$con_mail,"con_num"=>$con_num,"reg_num"=>$reg_num);
        DB::table('student_details')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';




    }
}
