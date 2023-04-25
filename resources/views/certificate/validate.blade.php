
@extends('layouts.sidebar')
@section('content')
   
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div  class="card card-shadow mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/img/folder.svg') }}" alt="" class="float-left">
                        <h1 class="text-info">Verify Certificate</h1>
                        <p>Click on the Document name to view</p>
                    </div>
                    <div class="card-body">
                       <form action="validate" method="post" enctype="multipart/form-data" class="form">
                        @csrf
                      
                        <div class="container mt-3">
                            <label for="name">Certificate ID</label>
                            <input type="text" name="cid" id="cid" class="form-control">
                            @error('cid')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                        </div>                     
                    </div>
                    <div class=" card-footer border border-light p-3">

                        <div class="text-center">
                          <button type="sub'" class="btn btn-outline-info">Verify Certificate</button></a>
                        </div>
                    
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
