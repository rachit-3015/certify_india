@extends('layouts.sidebar')
@section('content')
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div class="card card-shadow mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/img/folder.svg') }}" alt="" class="float-left">
                        <h1 class="text-info">Linked Account</h1>
                        {{-- <p>Click on the Document name to view</p> --}}
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <img src="{{ asset('assets/img/list1.png') }}" width="50px" height="50px"  alt="" class="float-left my-0">
                            <p class="mt-2 text-dark">Aadhar card</p>
                        </div>
                        <div class="text-center">
                            <h5>Aadhar Card was uploaded date: </h5>
                            <button class="btn btn btn-outline-warning float-right">View</button>

                            <p>1/10/2022</p>
                        </div>
                    </div>
                    <div class=" card-footer border border-light p-3">

                        <div class="text-center">
                          <button type="button" class="btn btn-outline-info">Centered button</button>
                        </div>
                    
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection