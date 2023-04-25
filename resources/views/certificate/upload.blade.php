
@extends('layouts.sidebar')
@section('content')
   
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div  class="card card-shadow mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/img/folder.svg') }}" alt="" class="float-left">
                        <h1 class="text-info">Upload Document</h1>
                        <p>Click on the Document name to view</p>
                    </div>
                    <div class="card-body">
                       <form action="{{ route('upload_doc') }}" method="post" enctype="multipart/form-data" class="form">
                        @csrf
                        <div class="container">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="container mt-3">
                            <label for="username">Candidate Name</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="container mt-3">
                            <label for="file">File upload</label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                      
                    </div>
                    <div class=" card-footer border border-light p-3">

                        <div class="text-center">
                          <button type="sub'" class="btn btn-outline-info">Upload Certificate</button></a>
                        </div>
                    
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@endsection