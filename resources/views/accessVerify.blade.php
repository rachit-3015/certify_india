@extends('layouts.sidebar')
@section('content')
   
<div class="py-4">
    <div class="container">
        <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-md-14">
                <div class="card card-shadow mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/img/folder.svg') }}" alt="" class="float-left">
                        <h1 class="text-info">Give Access</h1>
                        <p>Verify Details of the Recruiter</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" class="form">
                            <h1>Sorani Vishal</h1>
                            <p>Address: 0X5B7FA5B0</p>

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-outline-danger">Reject</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">Confirm</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection