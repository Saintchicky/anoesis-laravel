<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
}
