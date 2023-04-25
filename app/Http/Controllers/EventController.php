<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{

    public function all(){
        $event = Event::all();
        return view('event.all_event',compact('event'));
    }
    // public function index(){
    //     return view('event.index');
    // }
public function form(){
    return view('event.index');
}
    public function add(Request $request){
        $request->validate([
            'eid' => 'required',
            'ename' => 'required',
            'edate' => 'required',
            'eorg' => 'required',
            'sign' => 'required | mimes:jpeg,jpg,png',
            'logo' => 'required | mimes:jpeg,jpg,png'
        ]);
        // dd($request->eid);

        $event = new Event();
        $event->event_id = $request->eid;
        $event->event_name = $request->ename;
        $event->event_date = $request->edate;
        $event->organized_by = $request->eorg;
        if($request->hasfile('sign')){
            $file = $request->file('sign');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/event/signature/', $filename);
            $event->signature = $filename;
        }

        if($request->hasfile('logo')){
            $file = $request->file('logo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/event/logo/', $filename);
            $event->logo = $filename;
        }
        $event->save();

        return redirect('admin/event')->with('message','Event Created Successfully');
    }

    public function edit($id){
        $event = Event::where(['id'=>$id])->get();
        $result['event_id'] = $event['0']->event_id;
        $result['event_name'] = $event['0']->event_name;
        $result['event_date'] = $event['0']->event_date;
        $result['organized_by'] = $event['0']->organized_by;
        $result['id'] = $event['0']->id;

        return view('event.editEvent',$result);
    }

    public function update(Request $request, $id){
        $request->validate([
            'eid' => 'required',
            'ename' => 'required',
            'edate' => 'required',
            'eorg' => 'required'
        ]);

        $updateEvent = Event::find($id);
        $updateEvent->event_id = $request->eid;
        $updateEvent->event_name = $request->ename;
        $updateEvent->event_date = $request->edate;
        $updateEvent->organized_by = $request->eorg;
        if($request->hasfile('sign')){
            $destination = 'uploads/category/'.$updateEvent->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('sign');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/event/signature/', $filename);
            $updateEvent->signature = $filename;
        }

        if($request->hasfile('logo')){
            $destination = 'uploads/category/'.$updateEvent->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('logo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/event/logo/', $filename);
            $updateEvent->logo = $filename;
        }
        $updateEvent->update();
        return redirect('admin/event')->with('message','Event Updated..');
    }

    public function delete($id){
        $eventDelete = Event::find($id);
        $eventDelete->delete();
        return redirect('admin/event')->with('message','Event Deleted..');
    }
}
