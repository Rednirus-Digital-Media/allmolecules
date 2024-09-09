@extends('layouts.header')
@section('title','Add Blog')
@section('content')
@if ( Session::has('flash_message') )
<div class="alert alert-{{ Session::get('flash_type') }} alert-dismissible fade show" role="alert">
    <b>{{ Session::get('flash_message') }}</b>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif
<div class="row">
    <div class="col-lg-8" style=" margin-left: 10%;">
        <div class="card">
            <div class="card-title">

            </div>
            <div id="add-brand-messages"></div>
            <div class="card-body">
                <div class="input-states">
                    <form class="form-horizontal" method="POST" id="submitUserForm" action="/admin/employe/add"
                        enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="currnt_date" class="form-control">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="first_name" id="edituserName" class="form-control"
                                        placeholder="First name" required="" pattern="^[a-zA-z0-9]+$">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label">last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="last_name" id="edituserName" class="form-control"
                                        placeholder="Username" required="" pattern="^[a-zA-z0-9]+$">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" id="edituserName" class="form-control"
                                        placeholder="Email" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="editPassword" placeholder="Password"
                                        name="password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label">Designation</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="editPassword" placeholder="Designation"
                                        name="designation">
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="create" id="editProductBtn"
                            class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>


                            <th>Employee Name</th>
                            <th>Email</th>
                            <th>Designation</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sql as $s)
                        <tr>
                            <td>
                                {{$s->firstname}} {{$s->lastname}}

                            </td>


                            <td>

                                {{$s->email}}
                            </td>
                            <td>

                                {{$s->mobile}}
                            </td>


                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>


@endsection