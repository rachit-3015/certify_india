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
                        <h1 class="text-info">Generate Certificate</h1>
                        <p>Click on the Document name to view</p>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Organization ID</th>
                                    <th>Participant Name</th>
                                    <th>Certificate Validity</th>
                                    <th>Certificate Hash</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                    
                               @foreach ($documents as $item)
                                   
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->organization_id }}</td>
                                    <td>{{ $item->user_name }}</td>
                                    <td>{{ $item->certificate_validate }}</td>
                                    <td>
                                        {{ $item->certificate_hash }}
                                    </td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-primary">Edit</button>
                                        </a>
                                        |
                                        <a href="{{ 'view-certificate/'.$item->certificate }}">
                                            <button class="btn btn-warning">View</button>
                                        </a>
                                        |
                                        <a href="">
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
                          <a href="generate-certificate"><button type="button" class="btn btn-outline-info">Generate Certificate</button></a>
                          <a href="upload-certificate"><button type="button" class="btn btn-outline-primary">Upload Certificate</button></a>

                        </div>
                    
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection