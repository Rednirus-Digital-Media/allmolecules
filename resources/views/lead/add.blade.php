@extends('layouts.header')
@section('title','Add Blog')
@section('content')


<div class="container">

    @if ( Session::has('flash_message') )
    <div class="alert alert-{{ Session::get('flash_type') }} alert-dismissible fade show" role="alert">
        <b>{{ Session::get('flash_message') }}</b>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif


    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-title">

                </div>
                <div id="add-brand-messages"></div>
                <div class="card-body">
                    <div class="input-states">
                        <form class="row" method="POST" id="submitBrandForm" action="/admin/lead/post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label class="control-label">Company Name</label>
                                <input type="text" class="form-control" id="leadName" placeholder="Company Name"
                                    name="company_name" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Customer Name</label>
                                <input type="text" class="form-control" id="leadName" placeholder="Lead Name"
                                    name="lead" />
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Designation</label>
                                <input type="text" class="form-control" id="leadName" placeholder="Designation"
                                    name="designation" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class=" control-label">Phone</label>
                                <input type="text" class="form-control" id="categoriesName" placeholder="Phone"
                                    name="phone" required="" pattern="^[0-9]+$" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class=" control-label">What's app no.</label>
                                <input type="text" class="form-control" id="categoriesName" placeholder="Phone"
                                    name="what_app" pattern="^[0-9]+$" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Email</label>
                                <input type="text" class="form-control" id="categoriesName" placeholder="Email"
                                    name="email" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Address</label>
                                <input type="text" class="form-control" id="categoriesName" placeholder="address"
                                    name="address" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">City</label>
                                <input type="text" class="form-control" id="categoriesName" placeholder="City"
                                    name="city" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">State</label>
                                <input type="text" class="form-control" id="categoriesName" placeholder="state"
                                    name="state" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Country</label>
                                <input type="text" class="form-control" id="categoriesName" placeholder="country"
                                    name="country" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Industry Type</label>
                                <input type="text" class="form-control" id="categoriesName" placeholder="Industry Type"
                                    name="industry_type" pattern="^[a-z A-z]+$" />
                            </div>

                            <div class="form-group col-md-6">
                                <label class=" control-label">Interested In</label>
                                <select class="form-control" id="categoriesStatus" name="interest">
                                    <option value="">~~SELECT Services~~</option>
                                    <option value="1">Website</option>
                                    <option value="2">SEO</option>
                                    <option value="3">SMO</option>
                                    <option value="4">Google Adwards</option>
                                    <option value="5">Portal</option>
                                    <option value="6">other</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label class=" control-label">Source</label>
                                <select class="form-control" id="categoriesStatus" name="source">
                                    <option value="">~~SELECT Source~~</option>
                                    <option value="Call">Call</option>
                                    <option value="Organic">Organic</option>
                                    <option value="SocialMedia">Social Media</option>
                                    <option value="Website">Website</option>
                                    <option value="Campaign">Campaign</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class=" control-label">Status</label>
                                <select class="form-control" id="categoriesStatus" name="status">
                                    <option value="">~~SELECT Status~~</option>
                                    <option value="1">New </option>
                                    <option value="2">Working</option>
                                    <option value="3">Contacted</option>
                                    <option value="4">Qualified</option>
                                    <option value="5">Failed </option>
                                    <option value="6">Closed </option>
                                </select>
                            </div>
                           
                            <div class="form-group col-md-6">
                                <label class="control-label">Assigned</label>
                                <select class="form-control" id="categoriesStatus" name="assigned">
                                    <option> ~~Select Employee~~</option>
                                    
                                    <option value="2">
                                       Rekha 
                                    </option>
                                    <option value="3">
                                       Venus
                                     </option>
                                   
                                </select>
                            </div>
                          
                            <div class="form-group col-md-12">
                                <label class=" control-label">Remarks</label>
                                <textarea class="form-control" id="message" name="message"></textarea>
                            </div>

                            <div class="form-group col-md-12">
                                <button type="submit" name="create" id="createCategoriesBtn"
                                    class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection