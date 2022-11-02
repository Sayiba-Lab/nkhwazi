<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallLogController extends Controller
{
    public function index(){
        return view('pages.calllogs.index')->with([
            'title'=>'Call Logs',
            'subtitle'=>'Filtering'
        ]);
    }
}
