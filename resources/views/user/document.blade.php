@extends('layouts.userSidebar')
@section('content')
@if(session('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div class="card card-shadow mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/img/folder.svg') }}" alt="" class="float-left">
                        <h1 class="text-info">My Documents</h1>
                        <p>Click on the Document name to view</p>
                    </div>
                    <div class="card-body">
                        @foreach ($documents as $document)
                        <div class="container">
                            <img src="{{ asset('assets/img/list1.png') }}" width="50px" height="50px"  alt="" class="float-left my-0">
                            <p class="mt-2 text-dark">{{ $document->title }}</p>
                        </div>
                        <div class="text-center">
                            <h5>{{$document->title}} uploaded date: </h5>
                            <button class="btn btn btn-outline-warning float-right">View</button>

                            <p>{{ $document->created_at }}</p>
                        </div>
                        <hr class="mt-3">
                        @endforeach
                    </div>
                    <div class=" card-footer border border-light p-3">

                        <div class="text-center">
                          <a href="{{ route('upload_doc') }}"><button type="button" class="btn btn-outline-info">Generate Certificate</button></a>
                        </div>
                    
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection