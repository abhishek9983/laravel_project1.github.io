<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Cms;
use Illuminate\Http\Request;

class Cmss extends Controller
{
    public function form()
    {
        return view('backend/Cms/form');
    }
    public function addform(Request $request)
    {
        $request->validate([
            'tittle' => 'required',
            'discreption' => 'required',

        ]);

        $adddata = new Cms;
        $adddata->tittle = $request->get('tittle');
        $adddata->discreption = $request->get('discreption');
        
        $adddata->save();

        return redirect('listcms');
    }

    public function showuserlist()
    {
        $Users = Cms::all();

        return view('backend/Cms/list', compact('Users'));
    }
public function stutas($id){
    $product=Cms::select('stutas')->where('id',$id)->first();

    if($product->stutas=='1'){
        $stutas='0';
    }
    else{
        $stutas='1';
    }
    $value=array('stutas'=>$stutas);
    Cms::where('id',$id)->update($value);

    return redirect()->back();
}


    public function edituserlist($id)
    {
        $edituser = Cms::select('*')
            ->where('id', $id)->first();
        return view('backend/Cms/edit', compact('edituser'));
    }

    public function updateUser(Request $request, $id)
    {  $request->validate([
        'tittle' => 'required',
        'discreption' => 'required',
       
  
      ]);
      Cms::where('id', $id)->update([
        'tittle' => $request->get('tittle'),
        'discreption' => $request->get('discreption'),
      
  
      ]);
        return redirect('listcms');
    }
    public function deleteUser($id)
    {

        $deleteuser = Cms::find($id);
        $deleteuser->delete();

        return redirect('listcms');
    }
}
