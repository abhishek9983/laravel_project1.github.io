<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\trainers;
use Illuminate\Http\Request;

class Trainerss extends Controller
{
  public function form()
  {
    return view('backend/Trainers/form');
  }


  public function addform(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'position' => 'required',
      'about' => 'required',
      'image' => 'required',
      'slug' => 'required',


    ]);

    $adddata = new trainers;
    if ($request->hasFile('image')) {
      $photo = $request->file('image');
      $photoName = rand(10000, 9999) . '.' . $photo->getClientOriginalExtension();

      $photo->move(public_path('image'), $photoName);
    }
    $adddata->name = $request->get('name');
    $adddata->position = $request->get('position');
    $adddata->about = $request->get('about');
    // $adddata->image = $request->get('image');
    $adddata->image = $photoName;
    $adddata->slug = $request->get('slug');
    // $adddata->image=$photoName;


    $adddata->save();

    return redirect('listTrainers');
  }
  public function showuserlist()
  {
    $Users = trainers::all();

    return view('backend/Trainers/list', compact('Users'));
  }
  public function edituserlist($id)
  {
    $edituser = trainers::select('*')
      ->where('id', $id)->first();
    return view('backend/Trainers/edit', compact('edituser'));
  }
  public function updateUser(Request $request, $id)
  {
    $request->validate([
      'name' => 'required',
      'position' => 'required',
      'about' => 'required',
      'slug' => 'required',

    ]);

    if ($request->hasFile('image')) {
      $photo = $request->file('image');
      $photoName = rand(10000, 9999) . '.' . $photo->getClientOriginalExtension();

      $photo->move(public_path('image'), $photoName);
    }

    trainers::where('id', $id)->update([
      'name' => $request->get('name'),
      'position' => $request->get('position'),
      'about' => $request->get('about'),
      'image' => $photoName,
      'slug' => $request->get('slug'),
    ]);
    return redirect()->back();

  }



  public function deleteUser($id)
  {
    $deleteuser = trainers::find($id);
    $deleteuser->delete();
    return redirect('listTrainers');
  }
}
