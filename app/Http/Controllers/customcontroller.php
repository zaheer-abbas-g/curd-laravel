<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\people;
class customcontroller extends Controller
{
   public function create(){

    return view('form.create');
   }

   public function store(Request $request){
       
      // dd($request->all());

      $request->validate([
         'name' => 'required',
         'email' => 'required'
      ]);

      people::create([
         'name' => $request->name,
         'mobilenumber' => $request->mobile_number,
         'email' => $request->email
      ]);

      return back()->withErrors('Profile Successfully Created');
   }

   public function viewdata(){

    $people =  people::all();

      return view('form.list',compact('people'));
   }

   public function delete($id){
      // dd($id);

     $people = people::find($id)->delete();
      return back();
   }

   public function edit($id){

      $people = people::find($id);
      return view ('form.edit',compact('people'));
   }

   public function update(Request $request,$id){
      // dd($request->all());

    $people =  people::find($id);
    $people->name = $request->name;
    $people->mobilenumber = $request->mobile_number;
    $people->email = $request->email;
    $people->save();  
    return back()->withErrors('Profile Updated Successfully');
   }
}
