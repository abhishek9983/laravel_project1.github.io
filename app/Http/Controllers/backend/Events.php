<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\models\event;


use Illuminate\Http\Request;

class Events extends Controller
{
    public function form()
    {
        return view('backend/Event/form');
    }
    public function addform(Request $request)
    {
        $request->validate([
            'tittle' => 'required',
            'about' => 'required',
            'image' => 'required',

        ]);
        $adddata = new event;
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $photoName = rand(10000, 9999) . '.' . $photo->getClientOriginalExtension();

            $photo->move(public_path('image'), $photoName);
        }
        $adddata->tittle = $request->get('tittle');
        $adddata->about = $request->get('about');
        $adddata->image = $photoName;
        $adddata->save();


        
        return redirect('listEvents');
    }

    public function showuserlist()
    {
        $Users = event::all();

        return view('backend/Event/list', compact('Users'));
    }
    

        public function edituserlist($id)
        {
            $edituser = event::select('*')
                ->where('id', $id)->first();
            return view('backend/Event/edit', compact('edituser'));
        }

        public function updateUser(Request $request, $id)
        {
            $request->validate([
                'tittle' => 'required',
                'about' => 'required',
                'image' => 'required',
                ]);

                if ($request->hasFile('image')) {
                    $photo = $request->file('image');
                    $photoName = rand(10000, 9999) . '.' . $photo->getClientOriginalExtension();
              
                    $photo->move(public_path('image'), $photoName);
                  }
              

                event::where('id', $id)->update([
                'tittle' => $request->get('tittle'),
                'about' => $request->get('about'),
                'image' => $request->get('image'),

            ]);
            return redirect('listEvents');
        }
        public function deleteUser($id)
        {

            $deleteuser = event::find($id);
            $deleteuser->delete();

            return redirect('listEvents');
        }
}
