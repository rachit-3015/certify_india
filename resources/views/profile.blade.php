@extends('layouts.sidebar')
@section('content')
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div class="card card-shadow mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/img/folder.svg') }}" alt="" class="float-left">
                        <h1 class="text-info">Edit Profile</h1>
                        <p>Edit Your Profile Here</p>
                    </div>
                    <div class="card-body">
                       <form action="update-profile" method="post" enctype="multipart/form-data" class="form">
                        @csrf
                        <div class="container">
                            <label for="Username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="{{$name}}">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="container mt-3">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" id="email" class="form-control" value="{{$email}}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="container mt-3">
                            <label for="profile">Upload Your Profile</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      
                    </div>
                    <div class=" card-footer border border-light p-3">

                        <div class="text-center">
                          <button type="submit" class="btn btn-outline-info">Update Profile</button></a>
                        </div>
                    
                      </div>
                      <input type="hidden" name="id" value="{{ $id  }}"> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection