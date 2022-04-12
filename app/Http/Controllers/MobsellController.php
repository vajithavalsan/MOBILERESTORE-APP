<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mobsell;
use Illuminate\Support\Facades\DB;

class MobsellController extends Controller
{
    
    function addData(Request $req)
       {
           $remob=new mobsell;
                   
          
           $remob->firstname=$req->input('fnt');
           $remob->lastname=$req->input('lnt');
           $remob->u_adrs=$req->input('addt');
           $remob->pin=$req->input('pt');
           $remob->state=$req->input('st');
           $remob->city=$req->input('ci');
           $remob->email=$req->input('et');
           $remob->phone=$req->input('pht');
            $remob->save();
                    
          

    }
}
