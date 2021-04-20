<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class fatchController extends Controller
{
    
     function student(Request $req){

           $student=new student;
                 $student->name=$req->name;
                 $student->surname=$req->surname;
                 $student->gender=$req->gender;
                   $student->mmarks=$req->mmarks;
                   $student->fmarks=$req->fmarks;
                     $student->pmarks=$req->pmarks;
                 $student->save();
                 return redirect('/');

     }

  //       function show(){
  //    $items= student::paginate(4);
  //       return view('show',['student'=>$items]);
  // }


 function search(Request $req){
    $items= student::where('name', 'like', '%'.$req->input('query').'%')->get();
    return view('show',['student'=>$items]);
   }





}
