<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){
        $documents = certificate::where('organization_id',Auth::id())->get();
        return view('certificate.index',  compact('documents'));
    }

    public function documents(){
        $documents = certificate::where('id',Auth::id());
        return view('admin.dashboard', compact('documents'));
    }
}
