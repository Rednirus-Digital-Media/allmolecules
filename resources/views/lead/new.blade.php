@extends('layouts.header')
@section('title','Add Blog')
@section('content')

<div class="container">
<div class="row">
<div class="card">
            <div class="card-body">

               
                
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>

                               
                                <th>Company Name</th>
                                <th>Customer Name</th>
                                <th>Phone</th>
                                <th>Email </th>
                                <th>City</th>
                                <th>Industry</th>
                                <th>Interested</th>
                                <th>Source</th>
                                <th>Posted By</th>
                                <th>last update</th>
                                <th>message</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($sql as $s)
                            <tr>
                            <td class="text-center">
                                {{$s->lead_name}}
                                   
                                </td>
                               
                               
                                <td class="text-center">
                                   
                                    {{$s->lead_name}}
                                </td>
                                <td>
                  
                                    {{$s->phone}}
                                </td>

                                <td>
                                {{$s->email}}
                                   
                                </td>
                                <td>
                                {{$s->city}}
                                  
                                </td>
                                <td>
                                {{$s->industry_type}}
                                   
                                </td>

                                <td>
                             
                                @if($s->interest ==1)
                                    <label class='badge badge-primary' >Website</label>
                                    @elseif($s->interest ==2)
                                    <label class='badge badge-primary'> Seo</label>
                                    @elseif($s->interest ==3)
                                    <label class='badge badge-primary'> Smo</label>
                                    @elseif($s->interest ==4)
                                    <label class='badge badge-primary'> Google Adwords</label>
                                    @elseif($s->interest ==5)
                                    <label class='badge badge-primary'>Portal</label>
                                    @else
                                    <label class='badge badge-primary'> other</label>
                                    @endif
                                    
                                </td>
                                <td>
                                {{$s->source}}
                                   
                                </td>
                                <td>
                                {{$s->employe_name}}
                                    
                                </td>
                                <td>
                                {{$s->last_update}}
                                   
                                </td>
                                <td>
                                {{$s->message}}
                                   
                                </td>

                                <td>
                                    @if($s->status ==1)
                                    <label class='badge badge-primary' >New</label>
                                    @elseif($s->status ==2)
                                    <label class='badge badge-primary'> Working</label>
                                    @elseif($s->status ==3)
                                    <label class='badge badge-primary'> Contacted</label>
                                    @elseif($s->status ==4)
                                    <label class='badge badge-primary'> Qualified</label>
                                    @elseif($s->status ==5)
                                    <label class='badge badge-primary'> Failed</label>
                                    @else
                                    <label class='badge badge-primary'>Closed</label>
                                    @endif
                                    
                                </td>

                                <td>

                                    <a href="/admin/lead/edit/{{$s->id}}"><i class="fas fa-pencil-alt"></i></a>


<!-- 
                                    <a href="php_action/removeLead.php?id="><button type="button"
                                            class="btn btn-xs btn-danger"
                                            onclick="return confirm('Are you sure to delete this record?')"><i
                                                class="fa fa-trash"></i></button></a> -->


                                </td>
                            </tr>
                          @endforeach
                        </tbody>

                    </table>
                </div>
               
                                       
                                   
             
                                       
            </div>
        </div>
</div>
</div>  

@endsection