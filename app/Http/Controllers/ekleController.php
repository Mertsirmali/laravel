<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ekleController extends Controller
{
   public function create(){
       return view('ekle');
   }
   public function store(Request $request){

        /*$isim = $request->input('isim');
        dd($isim);*/

       /*if ($request->has(['oyunid','isim'])){
           echo "var";
       }
       else{
           echo "yok";
       }*/
       $image = $request->file('image');
       dd($image);

   }
}
