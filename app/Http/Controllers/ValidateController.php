<?php

namespace App\Http\Controllers;

use App\Models\certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ValidateController extends Controller
{
    public function index(){
        return view('certificate.validate');
    }

    public function check(Request $request){
        $request->validate([
            'cid' => 'required'
        ]);
        $count = certificate::where('certificate_id', $request->cid)->count();
        if($count > 0){
            $id = certificate::where('certificate_id', $request->cid)->get();
            $hash = $id['0']->certificate_hash;
            if (Hash::check($request->cid, $hash)) {
                // $result['message'] = "Certificate Is Valide"; 
                return view('certificate.status');
            }
        }
        else{
            return view('certificate.statusinvalide');
        }
     
        // $hash = $id['0']->certificate_hash;
        // if (Hash::check($request->cid, $hash)) {
        //     // $result['message'] = "Certificate Is Valide"; 
        //     return view('certificate.status');
        // }else{
        //     // $result['message']  = "Certificate Is not Valide"; 
        //     // return view('certificate.status', $result);
        //     // // return redirect('status_certificate')->with('message',"Certificate Is Not Valide");
        //     return view('certificate.statusinvalide');

        // }
    }

    // public function status(){
    //     return view('status')
    // }
}
