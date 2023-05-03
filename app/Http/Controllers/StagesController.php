<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagesController extends Controller
{
    public function index(Request $request)
    {
        $request->stageid;
        return view('stages')->with(['stage_id' => $request->stageid]);
    }
}
