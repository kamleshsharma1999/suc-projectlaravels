<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainerModel;

class TrainerController extends Controller
{
    public function trainerForm()
    {

        return view('admin/Trainer/trainerform');

    }
    public function posttrainerForm(Request $request)
    {
        $request->validate([
           'image' => 'required',
           'name' => 'required',
           'position' => 'required',
           'description' => 'required',

        ]);
        $addproduct = new TrainerModel();
  
        $addproduct->name = $request->get('name');
        $addproduct->position = $request->get('position');
        $addproduct->description = $request->get('description');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $photo = rand(10000, 99999) . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('Trainer-imagess'), $photo);
        }
            $addproduct->image = $photo;

   
        
        $addproduct->save();

        return redirect('trainerFormlist');
    
    //
}

public function trainerFormlist(){

    $list=TrainerModel::all();
    return view('admin/Trainer/list',compact('list'));

  }
  public function edits($id){
    $editdata=TrainerModel::where('id',$id)->first(); 
    return view('admin/Trainer/edit',compact('editdata'));
  }
  public function editdata(Request $request, $id)
    {
        $request->validate([
           'image' => 'required',
           'name' => 'required',
           'position' => 'required',
           'description' => 'required',

        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $photo = rand(10000, 99999) . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('Trainer-imagess'), $photo);
        }
        TrainerModel::where('id',$id)->update([
  
        'name' => $request->get('name'),
        'position'=> $request->get('position'),
        'description'=> $request->get('description'),
         'image' => $photo,
        ]);
        return redirect('trainerFormlist')->withSuccess('updated successfully');
}
public function deleted($id){
    $deletee=TrainerModel::where('id',$id)->first();
    $deletee->delete();
    return redirect('trainerFormlist')->withSuccess('deleted successfully');
  }
}
