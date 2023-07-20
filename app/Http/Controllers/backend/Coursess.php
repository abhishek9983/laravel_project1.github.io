<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\models\couse;


use Illuminate\Http\Request;

class Coursess extends Controller
{

  public function form()
  {
    return view('backend/Courses/form');
  }
  public function addform(Request $request)
  {
    $request->validate([
      'tittle' => 'required',
      'description' => 'required',
      'image' => 'required',


    ]);

    $adddata = new couse;
    if ($request->hasFile('image')) {
      $photo = $request->file('image');
      $photoName = rand(10000, 9999) . '.' . $photo->getClientOriginalExtension();

      $photo->move(public_path('image'), $photoName);
    }
    $adddata->tittle = $request->get('tittle');
    $adddata->description = $request->get('description');
    $adddata->image = $photoName;
    $adddata->save();
    return redirect('listCourses');
  }
  public function showuserlist()
  {
    $Users = couse::all();

    return view('backend/Courses/list', compact('Users'));
  }
  public function edituserlist($id)
  {
    $edituser = couse::select('*')
      ->where('id', $id)->first();
    return view('backend/Courses/edit', compact('edituser'));
  }

  public function updateUser(Request $request, $id)
  {

    $request->validate([
      'tittle' => 'required',
      'description' => 'required',
      'image' => 'required',
    ]);

    if ($request->hasFile('image')) {
      $photo = $request->file('image');
      $photoName = rand(10000, 9999) . '.' . $photo->getClientOriginalExtension();

      $photo->move(public_path('image'), $photoName);
    }


    couse::where('id', $id)->update([
      'tittle' => $request->get('tittle'),
      'description' => $request->get('description'),
      'image' => $photoName,

    ]);


    return redirect('listCourses');
  }
  public function deleteUser($id)
  {

    $deleteuser = couse::find($id);
    $deleteuser->delete();

    return redirect('listCourses');
  }
}
