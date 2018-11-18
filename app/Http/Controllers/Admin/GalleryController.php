<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Gallery;

class GalleryController extends Controller
{
    public function store (Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->hashName();
        $image->move(public_path('storage/photo'),$imageName);
  
        $imageUpload = new Gallery();
        $imageUpload->photo_pict  = $imageName;
        $imageUpload->id_year = $request->id_year;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }
      public function updateOrder(Request $request)
    {
        $tasks = Gallery::all();
        foreach ($tasks as $task) {
            $task->timestamps = false; // To disable update_at field updation
            $id = $task->id;
            foreach ($request->order as $order) {
                if ($order['id'] == $id) {
                    $task->update(['order' => $order['position']]);
                }
            }
        }
        
        return response('Update Successfully.', 200);
    }
    public function up (Request $request)
    {
        if ($request->isMethod('get')){
            $thumb_note = Gallery::find($request->id);   
        }
        return view('back_front.note.note_up_gallery',compact("thumb_note"));
    }
    public function updatePhoto(Request $request)
    {
     $mode_update = false;
        if(is_numeric($request->id)){
            $mode_update = true;
        }
        if($mode_update){
        
            $imageUpload = Gallery::find($request->id);
            
        }else{
            
            $imageUpload = new Gallery();
        }
        $imageUpload->title = $request->title; 
        $imageUpload->description_pict = $request->description_pict; 
        $imageUpload->is_main_photo = $request->is_main_photo;
        $imageUpload->save();   
        return Redirect::back();
    }
    public function delete(Request $request)
    {
        $imageUpload = Gallery::find($request->id);
        $imageUpload->delete(); 
        return Redirect::back();  
    }
}
