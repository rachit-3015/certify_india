<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    public function index(){
        $id = Auth::id();
        $profile = User::where(['id'=>$id])->get();
        $result['name'] = $profile['0']->name;
        $result['email'] = $profile['0']->email;
        $result['email_verified_at'] = $profile['0']->email_verified_at;
        $result['id'] = $profile['0']->id;
        

        // dd($profile);
        return view('profile',$result);
    }

    public function update(Request $request){
        $pr = new Profile();
        $request->validate([
            // 'username' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'profile' => 'required' | 'mimes: jpg,png,jpeg',
        ]);
          
            $pr->user_id = $request->id;

            if($request->hasfile('image')){ 
                $file = $request->file('image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $file->move('uploads/profile/', $filename);       
                $pr->image = $filename;
                $pr->save();
             }
           

       return redirect('/dashboard')->with('message','Profile Updated Successfully');
    }
}
