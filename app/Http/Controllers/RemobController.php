<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RemobController extends Controller
{
  // public function adData()
  // {
  //   $remob=new Remo;
  //   $u1=DB::table('users')->get('name');
  //   $u2=DB::table('users')->get('email');
  //   $remob->name=$u1;
  //   $remob->email=$u2;
  //   $remob->save();
  // }
     function addData(Request $req)
       {
           $remob=new Remo;
           //$sell->brand = $request->input('brand');
          //  $u1=DB::table('users')->get('name');
          //  $u2=DB::table('users')->get('email');
          $u1 = Auth::user()->name;
          $u2 = Auth::user()->email;

          $remob->name=$u1;
          $remob->email=$u2;
           $remob->brand=$req->input('bt1');
           $remob->model=$req->input('bt2');
            $remob->save();
            // $req->validate(['terms'=> 'accepted']);
            // return Validator::make($data, [
            //   'terms' =>'accepted'
            // $validatedAttributes = request()->validate([
            //   'active' => 'boolean'
      //]);

      $req->validate([
        // 'brand' => 'required',
        // 'model' => 'required',
        'terms' => 'required'
     
      ]);
          
          

    }

  //   public function store(Request $request){
  //     $request->validate([
  //        // 'name' => 'required|max:255',
  //         'terms' => 'accepted'
  //     ]);
  // }
} 
