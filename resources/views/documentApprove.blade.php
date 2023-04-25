@extends('layouts.sidebar')
@section('content')
   
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div class="card card-shadow mt-4">
                    <div class="card-header text-center">
                        <img src="{{ asset('assets/img/folder.svg') }}" alt="" class="float-left">
                        <h1 class="text-info">Document Approve</h1>
                        <p>Verify Details of the Recruiter</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" class="form">
                            <h2 class="text-center">Request From: Vishal Sorani</h2>
                            <h3 class="text-danger text-center">0X5B7FA5B0</h3>
                            <table class="table mb-0">
                                <tbody>
                                    <tr class="text-center">
                                        <td>
                                            <button type="button" class="btn btn-outline-danger">DENY</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-info">VIEW</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success">ALLOW</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p>(You can change your Account Preferences by going into the Account setting page.)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection