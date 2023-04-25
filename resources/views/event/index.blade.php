@extends('layouts.sidebar')
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
                        <h1 class="text-info">Create Event</h1>
                        <p>Click on the Document name to view</p>
                    </div>
                    <div class="card-body">
                        <form action="add_event" method="post" class="form" enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <label for="event id">Event ID</label>
                                <input type="text" name="eid" id="eid" class="form-control">
                            </div>

                            <div class="container mt-3">
                                <label for="event name">Event Name</label>
                                <input type="text" name="ename" id="ename" class="form-control">
                            </div>

                            <div class="container mt-3">
                                <label for="event name">Event Date</label>
                                <input type="date" name="edate" id="edate" class="form-control">
                            </div>

                            <div class="container mt-3">
                                <label for="event name">Event Organized By</label>
                                <input type="text" name="eorg" id="eorg" class="form-control">
                            </div>
                            <div class="container mt-3">
                                <label for="Signature">Signature</label>
                                <input type="file" name="sign" id="sign" class="form-control">
                            </div>
                            <div class="container mt-3">
                                <label for="Logo">Event Logo</label>
                                <input type="file" name="logo" id="logo" class="form-control">
                            </div>                        
                    </div>
                    <div class=" card-footer border border-light p-3">

                        <div class="text-center">
                         <button type="submit" class="btn btn-outline-info">Create Event</button>
                        </div>
                    
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection