@extends('layouts.userSidebar')
@section('content')

@if(session('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

    This is user dashboard
@endsection