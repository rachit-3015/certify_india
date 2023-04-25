
@extends('layouts.sidebar')
@section('content')
   
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div  class="card card-shadow mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/img/folder.svg') }}" alt="" class="float-left">
                        <h1 class="text-info">Upload Certificate</h1>
                        <p>Click on the Document name to view</p>
                    </div>
                    <div class="card-body">
                       <form action="upload-certificate" method="post" enctype="multipart/form-data" class="form">
                        @csrf
                        <div class="container mt-3">
                            <label for="file">upload file</label>
                            <input type="file" name="file" id="file" class="form-control">
                            @error('file')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="container mt-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                            @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="container mt-3">
                            <label for="date">Validity Date</label>
                            <input type="date" name="valide" id="valide" class="form-control">
                            @error('valide')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                        </div>

                        <div class="container mt-3">
                            <label for="cid">Certificate ID</label>
                            <input type="number" name="cid" id="cid" class="form-control">
                            @error('cid')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
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
