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


    <div class="container-fluid">




        <div class="row">
            <div class="col-lg-12" style="    margin-left: 10%;">
                <div class="card">
                    <div class="card-title">

                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="row" method="POST" id="submitBrandForm"
                                action="/admin/lead/update/{{$sql->id}}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group col-md-6">
                                    <label class="control-label">Company Name</label>
                                    <input type="text" class="form-control" value="{{$sql->company_name}}" id="leadName"
                                        placeholder="Company Name" name="company_name" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Customer Name</label>
                                    <input type="text" class="form-control" id="leadName" placeholder="Lead Name"
                                        name="lead" value="{{$sql->lead_name}}" pattern="^[a-z A-z]+$" />
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="control-label">Designation</label>
                                    <input type="text" class="form-control" id="leadName" value="{{$sql->designation}}"
                                        placeholder="Designation" name="designation" />
                                </div>

                                <div class="form-group col-md-6">
                                    <label class=" control-label">Phone</label>
                                    <input type="text" class="form-control" id="categoriesName" placeholder="Phone"
                                        name="phone" value="{{$sql->phone}}" pattern="^[0-9]+$" />
                                </div>

                                <div class="form-group col-md-6">
                                    <label class=" control-label">What's app no.</label>
                                    <input type="text" class="form-control" value="{{$sql->what_no}}"
                                        id="categoriesName" placeholder="Phone" name="what_app" pattern="^[0-9]+$" />
                                </div>



                                <div class="form-group col-md-6">
                                    <label class="control-label">Email</label>
                                    <input type="text" class="form-control" id="categoriesName" value="{{$sql->email}}"
                                        placeholder="Email" name="email" />
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="control-label">Address</label>
                                    <input type="text" class="form-control" value="{{$sql->address}}"
                                        id="categoriesName" placeholder="address" name="address" />
                                </div>


                                <div class="form-group col-md-6">
                                    <label class="control-label">City</label>
                                    <input type="text" class="form-control" id="categoriesName" value="{{$sql->city}}"
                                        placeholder="City" name="city" />
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="control-label">State</label>
                                    <input type="text" class="form-control" value="{{$sql->state}}" id="categoriesName"
                                        placeholder="State" name="state" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Country</label>
                                    <input type="text" class="form-control" value="{{$sql->country}}"
                                        id="categoriesName" placeholder="Country" name="country" />
                                </div>



                                <div class="form-group col-md-6">
                                    <label class="control-label">Industry Type</label>
                                    <input type="text" class="form-control" id="categoriesName"
                                        placeholder="Industry Type" name="industry_type" value="{{$sql->industry_type}}"
                                        pattern="^[a-z A-z]+$" />
                                </div>


                                <div class="form-group col-md-6">
                                    <label class=" control-label">Source</label>
                                    <select class="form-control" id="categoriesStatus" name="source">
                                        <option value="Call" @if($sql->source=="Call") selected @endif > Call</option>
                                        <option value="Organic" @if($sql->source=="Organic") selected @endif > Organic
                                        </option>
                                        <option value="SocialMedia" @if($sql->source=="SocialMedia") selected @endif >
                                            SocialMedia</option>
                                        <option value="Website" @if($sql->source=="Website") selected @endif > Website
                                        </option>
                                        <option value="Campaign" @if($sql->source=="Campaign") selected @endif >
                                            Campaign</option>


                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class=" control-label">Status</label>
                                    <select class="form-control" id="categoriesStatus" name="status">
                                        <option value="1" @if($sql->source==1) selected @endif > New</option>
                                        <option value="2" @if($sql->source==2) selected @endif > Working</option>
                                        <option value="3" @if($sql->source==3) selected @endif > Contacted</option>
                                        <option value="4" @if($sql->source==4) selected @endif > Qualified</option>
                                        <option value="5" @if($sql->source==5) selected @endif > Failed</option>
                                        <option value="6" @if($sql->source==6) selected @endif > Closed</option>


                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class=" control-label">Interested In</label>
                                    <select class="form-control" id="categoriesStatus" name="interest">
                                        <option value="">~~SELECT Services~~</option>
                                        <option value="1" @if($sql->interest==1) selected @endif > Website</option>
                                        <option value="2" @if($sql->interest==2) selected @endif > SEO</option>
                                        <option value="3" @if($sql->interest==3) selected @endif > SMO</option>
                                        <option value="4" @if($sql->interest==4) selected @endif > Google Adwords</option>
                                        <option value="5" @if($sql->interest==5) selected @endif > Portal</option>
                                        <option value="6" @if($sql->interest==6) selected @endif > Portal</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class=" control-label">Remarks</label>
                                    <textarea class="form-control" id="message" name="message"
                                        value="{{$sql->message}}"></textarea>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Reminder Date</label>
                                            <input type="date" class="form-control" id="categoriesName" name="r_date" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Reminder Time</label>
                                            <input type="time" class="form-control" id="categoriesName" name="r_time" />
                                        </div>
                                    </div>

                                    <div class="reviews">
                                       
                                    </div>


                                    <div class="form-group col-md-12">
                                        <button type="submit" name="create" id="createCategoriesBtn"
                                            class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                                    </div>
                            </form>

                            <?php 
                              $data = \DB::table('follow_up')->where('lead_id',$sql->id)->get();
                            ?>
                             @foreach($data as $d)
                             <p>
                        
                        <span class="red">{{$d->remarks}} </span> {{$d->date}}  comment : {{$d->user_name}} 
                        @if($d->r_date)<span class="greens">(Next Calling time {{$d->r_date}} {{$d->r_time}} ) </span>
                        @endif
                       </p>
                             @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
     <style>
        span.red {
    color: red;
    margin-right: 38px;
}
span.greens {
    color: green;
    font-weight: bold;
    margin-left: 12px;
}
     </style>
    @endsection