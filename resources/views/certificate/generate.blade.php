
@extends('layouts.sidebar')
@section('content')
   
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div  class="card card-shadow mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/img/folder.svg') }}" alt="" class="float-left">
                        <h1 class="text-info">Generate Certificate</h1>
                        <p>Click on the Document name to view</p>
                    </div>
                    <div class="card-body">
                       <form action="ss/generate" method="post" enctype="multipart/form-data" class="form">
                        @csrf
                        <div class="container">
                            <select class="form-control" name="event_name" aria-label="Default select example">
                                <option selected>Select Event</option>
                                @foreach($find as $item)
                                    <option value="{{ $item->event_name }}">{{ $item->event_name }}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="container mt-3">
                            <label for="username">Candidate Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div> 

                        <div class="container mt-3">
                            <label for="username">Event Date</label>
                            <input type="text" name="date" id="date" class="form-control" value="{{ $event_date }}" readonly>
                        </div> 

                        <div class="container mt-3">
                            <label for="username">Certificate Validity</label>
                            <input type="date" name="valide" id="valide" class="form-control">
                        </div>                      
                    </div>
                    <div class=" card-footer border border-light p-3">

                        <div class="text-center">
                          <button type="submit" class="btn btn-outline-info">Generate Certificate</button></a>
                        </div>
                    
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
