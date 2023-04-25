@extends('layouts.userSidebar')
@section('content')
   
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div class="card card-shadow mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/img/folder.svg') }}" alt="" class="float-left">
                        <h1 class="text-info">Give Access</h1>
                        <p>Enter the address of recruiter to which you want to give access</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" class="form">
                            @csrf
                            <input class="form-control" type="text" name="address" id="address" placeholder="Address*">
                            <div class="border border-light p-3">
                                <div class="text-center">
                                  <button type="button" class="btn btn-outline-info">Next</button>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection