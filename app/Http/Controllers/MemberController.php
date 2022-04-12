<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mobmodel;
//use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
     function show()
    {
       //return view('list');
       //return mobmodel::all();

    $val= mobmodel::where('no',1)->get('modelname');
    return view('list',['mobmodel'=>$val]);
    }
} 
