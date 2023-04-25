<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\certificate;

class DashboardController extends Controller
{
    public function documents(){
        $documents = certificate::all();
        return view('user.document', compact('documents'));
    }

    public function share(){
        
        return view('giveaccess');
    }
}
