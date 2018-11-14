<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profileHome(Request $request)
    {
        $profile_p = Profile::all();
        $profile_id = Profile::find($request->id);
        return view('back_front.SiteManage.profile_a',compact('profile_p'));
    }
    public function profile_create(Request $request)
    {
       
        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
     
            $extension = $request->file('file')->getClientOriginalExtension();
        
            $profileName= $filename.'_'.time().'.'.$extension;
            $path = $request->file('file')->move('storage/profile', $profileName);
        } else {
            $profileName = 'noimage.jpg';
        }
	 
        
        $profilePict = new Profile();
        $profilePict->pict_profile = $profileName;
        $profilePict->description_p = $request->description_p;
        $profilePict->save();
        return response()->json(['success'=>$profileName]);
    }
    public function delete_profile(Request $request)
    {
        $profile = Profile::find($request->id);
        unlink(public_path("storage/profile/{$profile->pict_profile}"));  
        $profile->delete();
        return Redirect::back();
       
        
    }
    public function profileUp(Request $request)
    {
        // if ($request->isMethod('get')){
            $profile = Profile::find($request->id);
        // }
            return view('back_front.SiteManage.profile_up_a',compact("profile"));
    }
    public function profile_a_up_store(Request $request){
     $mode_update = false;
        if(is_numeric($request->id)){
            $mode_update = true;
        }
        if($mode_update){
  
            $profile = Profile::find($request->id);
            
        }else{
            
            $profile = new Profile();
        }
        $profile->fill($request->all());
        $profile->save();
        return redirect()->route('profile_a');
    }
    public function profilePictUp(Request $request){
        $profile = Profile::find($request->id);
          // Handle File Upload
         if($request->hasFile('pict_profile')){
             $image = public_path("storage/profile/{$profile->pict_profile}"); // get previous image from folder
             if (File::exists($image)) { // unlink or remove previous image from folder
                 unlink($image);
             }
             // Get filename with the extension
             $filenameWithExt = $request->file('pict_profile')->getClientOriginalName();
             // Get just filename
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
             // Get just ext
             $extension = $request->file('pict_profile')->getClientOriginalExtension();
             // Filename to store
             $fileNameToStore= $filename.'_'.time().'.'.$extension;
             // Upload Image
             $path = $request->file('pict_profile')->move('storage/profile', $fileNameToStore);
         }
 
         // Create Post
         if($request->hasFile('pict_profile')){
             $profile->pict_profile = $fileNameToStore;
         }
         $profile->save();
         return redirect()->back();
      
    }
}
