<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowInfoController extends Controller
{
    public function store(Request $request){

        $this->validate($request,[
            'title'=>'required',
            'subtitle'=>'required'

        ]);
        $info = new Info([
            'title'=> $request->get('title'),
            'subtitle'=> $request->get('subtitle')
            
        ]);
        $info->save();
        return redirect 
    }
}
