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
         'firstname' => 'required',
         'lastname' => 'required',
         'email' => 'required',
         'gender' => 'required',
         'photo' => 'required'
      ]);

      $file = $request->hasFile('photo');
      if($file){
         $newfile = $request->file('photo');
         $filepath = $newfile->store('images');

      }
      people::create([
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'mobilenumber' => $request->mobile_number,
         'email' => $request->email,
         'gender' => $request->gender,
         'image' => $filepath
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
   $file = $request->hasFile('photo');
      
   if($file){
      $newfile = $request->file('photo');
      $filepath = $newfile->store('images');
   }

   $people =  people::find($id);  
    $people->first_name = $request->firstname;
    $people->last_name = $request->lastname;
    $people->mobilenumber = $request->mobile_number;
    $people->email = $request->email;
    $people->gender = $request->gender;
    $people->image =  $filepath;
    $people->save();  
    return back()->withErrors('Profile Updated Successfully');
   }
}
