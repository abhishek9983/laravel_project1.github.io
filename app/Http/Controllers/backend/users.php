<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\laraveltable;
use Illuminate\Http\Request;

class users extends Controller
{
  public function form()
  {
    return view('backend/users/form');
  }


  public function addform(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
      'mobile' => 'required',
      'address' => 'required',
      'photo' => 'required'

    ]);

    $adddata = new laraveltable;
    if (isset($request->photo)) {
      $file = $request->file('photo')->getClientOriginalExtension();
      $request->photo->move(public_path('image'), $file);
      $adddata->photo = $file;
    }
    $adddata->name = $request->get('name');
    $adddata->email = $request->get('email');
    $adddata->password = $request->get('password');
    $adddata->mobile = $request->get('mobile');
    $adddata->address = $request->get('address');
    $adddata->photo = $request->get('photo');

    $adddata->save();

    return redirect('listshow')->withsuccess('add form-data successfully');
  }

  public function showuserlist()
  {
    $Users = laraveltable::all();

    return view('backend/Users/list', compact('Users'));
  }

  public function edituserlist($id)
  {
    $edituser = laraveltable::select('*')
      ->where('id', $id)->first();
    return view('backend/Users/edit', compact('edituser'));
  }

  public function updateUser(Request $request, $id)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
      'mobile' => 'required',
      'address' => 'required',
      // 'photo' => 'required'

    ]);
    laraveltable::where('id', $id)->update([
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'password' => $request->get('password'),
      'mobile' => $request->get('mobile'),
      'address' => $request->get('address'),
      'photo' => $request->get('photo')

    ]);
    return redirect('listshow');
  }
  public function deleteUser($id)
  {

    $deleteuser = laraveltable::find($id);
    $deleteuser->delete();

    return redirect('listshow');
  }
}
