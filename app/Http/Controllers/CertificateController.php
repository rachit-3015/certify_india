<?php

namespace App\Http\Controllers;

use App\Models\certificate;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDF;



class CertificateController extends Controller
{
    public function index(){
        $event = Event::where(['id'=>Auth::id()])->get();
        $result['id'] = $event['0']->id;
        $result['event_name'] = $event['0']->event_name;
        $result['event_date'] = $event['0']->event_date;
        $org = $event['0']->organized_by;
        // dd($org);
        $result['find'] = Event::where('organized_by',$org)->get('event_name');
        
        return view('certificate.generate',$result);
    }

    public function demo(){
        return view('certificate.layout');
    }

    public function check(Request $request){
        $request->validate([
            'event_name' => 'required',
            'name'=> 'required',          
            'certificate_validate'=> 'required',
        ]);

        $event = Event::where('event_name',$request->event_name)->get();
        $user = User::where('name',$request->name)->get();
        $userid = $user['0']->id;
        $event_date = $event['0']->event_date;
        $event_logo = $event['0']->logo;
        $event_sign = $event['0']->signature;

       
        $result['event_name'] = $request->event_name;
        $result['event_date'] = $event_date;
        $result['name'] = $request->name;
        $result['certificate_validate'] = $request->certificate_validate;
        $result['logo'] = $event_logo;
        $result['sign'] =$event_sign;
        // $data1 = ([
        //     'ename' => $request->event_name,
        //     'edate' => $event_date,
        //     'name' => $request->name,
        // ]);
        
    //     $data = [
    //         'foo'    => "Foo",
    //    ];

        $pdf = PDF::loadView('certificate.demo', $result);
        $date  = date('d_m_Y');
        // $name1 = $name . '_' . $date;
        // return $pdf->download('a.pdf');

         return view('certificate.view',$result);

    }

    // public function createPDF() {
    //     // retreive all records from db
    //     $data = Employee::all();
    //     // share data to view
    //     view()->share('employee',$data);
    //     $pdf = PDF::loadView('pdf_view', $data);
    //     // download PDF file with download method
    //     return $pdf->download('pdf_file.pdf');
    //   }
}