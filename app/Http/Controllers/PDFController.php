<?php

namespace App\Http\Controllers;

use App\Models\certificate;
use App\Models\Event;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PDFController extends Controller
{
    public function index(){
        return view('certificate.demo');
    }

    public function generate(Request $request){
        $result['name'] = $request->name;
        $event = Event::where('event_name',$request->event_name)->get();
        $result['event_date'] = $request->date;
        $result['event_name'] = $request->event_name;
      

        $pdf = PDF::loadView('certificate.demo', $result);
        $date  = date('d_m_Y');
        // $name1 = $name . '_' . $date;
        return $pdf->download('a.pdf');
    }

    public function upload(){
        return view('certificate.uploadCertificate');
    }

    public function store(Request $request){
        $request->validate([
            'file' => 'required',
            'name' => 'required',
            'valide' => 'required',
            'cid' => 'required'
        ]);

        $oid = Auth::id();
        // dd($oid);
        $certificate = new certificate();
        $certificate->organization_id = $oid;
        $certificate->user_name = $request->name;

        if($request->hasfile('file')){
            $file = $request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            // $file->move('uploads/event/certificate/', $filename);
            $request->file->move('uploads/event/certificate/',$filename);
            $certificate->certificate = $filename;
        }
        $certificate->certificate_validate = $request->valide;
        $certificate->certificate_id = $request->cid;
        $certificate->certificate_hash = Hash::make($request->cid);
        $certificate->save();

        return redirect('/admin/certificate')->with('message',"Certificate Uploaded..");




    }

    public function view($id){
        return response()->file('uploads/event/certificate/'.$id);

    }
}
