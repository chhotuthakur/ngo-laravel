<?php

namespace App\Http\Controllers;

use App\Models\SiteInfo;
use Illuminate\Http\Request;

class InfoController extends Controller
{
   
    public function index()
    {
        
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(SiteInfo $siteInfo)
    {
        return view ('frontend.layout.header')->with('siteArr',SiteInfo::all());
    }

   
    public function edit(SiteInfo $siteInfo)
    {
        //
    }

   
    public function update(Request $request, SiteInfo $siteInfo)
    {
        //
    }

   
    public function destroy(SiteInfo $siteInfo)
    {
        //
    }
}
