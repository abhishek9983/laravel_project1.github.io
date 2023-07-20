<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class Banners extends Controller
{
    public function form()
    {
      return view('backend/banner/form');
    }
  
  
    public function addform(Request $request)
    {
      $request->validate([
        'tittle' => 'required',
        'file' => 'required',
        
  
      ]);
  
      $adddata = new Banner;
      if ($request->hasFile('file')){
       $photo=$request->file('file');
       $photoName=rand(10000,9999).'.'.$photo->getClientOriginalExtension();

       $photo->move(public_path('image'),$photoName);
      }
      $adddata->tittle = $request->get('tittle');
      $adddata->file=$photoName;
      
  
      $adddata->save();
  
      return redirect('listbanner');
    }
  
    public function showuserlist()
    {
      $Users = Banner::all();
  
      return view('backend/banner/list', compact('Users'));
    }
  
    public function edituserlist($id)
    {
      $edituser = Banner::select('*')
        ->where('id', $id)->first();
      return view('backend/banner/edit', compact('edituser'));
    }
  
    public function updateUser(Request $request, $id)
    {
      $request->validate([
        'tittle' => 'required',
        'file' => 'required',
        
      ]);
     
      if ($request->hasFile('file')){
       $photo=$request->file('file');
       $photoName=rand(10000,9999).'.'.$photo->getClientOriginalExtension();
       $photo->move(public_path('image'),$photoName);
      }
     
      Banner::where('id', $id)->update([
        'tittle' => $request->get('tittle'),
        'file' => $photoName,
      
  
      ]);

        
  
     
      return redirect('listbanner');
    }
    public function deleteUser($id)
    {
  
      $deleteuser = Banner::find($id);
      $deleteuser->delete();
  
      return redirect('listbanner');
    }
}
