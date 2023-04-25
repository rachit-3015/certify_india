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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Event Name</th>
                                    <th>Event Date</th>
                                    <th>Organized By</th>
                                    <th>Event Logo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($event as $item)
                                    
                                
                                <tr>
                                    <td>{{ $item->event_id }}</td>
                                    <td>{{ $item->event_name }}</td>
                                    <td>{{ $item->event_date }}</td>
                                    <td>{{ $item->organized_by }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/event/logo/'.$item->logo) }}"  width="100px" height="60px" alt="">
                                    </td>
                                    <td>
                                        <a href="{{'edit_event/'.$item->id}}">
                                            <button class="btn btn-primary">Edit</button>
                                        </a>
                                        |
                                        <a href="{{'delete_event/'.$item->id}}">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class=" card-footer border border-light p-3">

                        <div class="text-center">
                          <a href="add_event"><button type="button" class="btn btn-outline-info">Create Event</button></a>
                        </div>
                    
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection