<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\User;
use Session;
use App\Mail\SendMailable;
use App\SendMessage;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use DB;

class EnquirysController extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
           
            'city' => $request->city,
           
            'message' => $request->message,
        ];
        Enquiry::create($data);
        
        Mail::to('dev@rednirus.com')
        ->send(new SendMailable($data));
        Session::flash('flash_type','success');
        Session::flash('flash_message','Thanku We have successfully registered your Enquiry !!');
        
        
         return redirect('thank-you-for-contacting-us');
        return back();
    }
    public function new_employee(Request $request){
        $sql = User::get();
        return view('employee.add')->with('sql',$sql);
     
        }

     public function add_employee(Request $request){
       
         User::create([
            'firstname' => $request->first_name,
            'lastname' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->designation,
            'password' => Hash::make($request->password),
        ]);
        Session::flash('flash_type','success');
        Session::flash('flash_message','Employee Added Successfully !!');
        
        
        return back();
     }



   
    public function add_lead(Request $request){
        $comany_name = $_POST['company_name'];
       
	$designation = $_POST['designation'];
	$what_no = $_POST['what_app'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	
	$lead_name = $_POST['lead'];
    $phone = $_POST['phone'];
    $email = $_POST['email']; 
    $city = $_POST['city'];
    $interest = $_POST['interest'];
    $source = $_POST['source'];
	 $industry = $_POST['industry_type'];
     $assigned = $_POST['assigned'];
    $status = $_POST['status'];
	$message = $_POST['message'];
	
	date_default_timezone_set('Asia/Kolkata');
       $currentTime = date( 'd-m-Y h:i:s A', time () );

         DB::table('lead')->insert([
          'company_name'=>$comany_name,
          'lead_name'=>$lead_name,
         'designation'=>$designation,
          'phone'=>$phone,
          'call_status'=>$what_no,
         'what_no'=>$what_no,
          'email'=>$email,
          'address'=>$address,
          'state'=>$state,
          'country'=>$country,
          'city'=>$city,
          'industry_type'=>$industry,
          'interest'=>$interest,
          'source'=>$source,
          'status'=>$status,
          'lead_status'=>1,
          'employe_id'=>\Auth::user()->id,
          'employe_name'=>\Auth::user()->firstname
         ]);
         Session::flash('flash_type','success');
         Session::flash('flash_message','Lead Added Sucessfully!');
         
         
         return back();


    }

   public function view_lead(){
    if(\Auth::user()->id == 1){
        $sql = \DB::table('lead')->where('lead_status',1)->get();
    }else{
        $sql=  \DB::table('lead')->where('lead_status',1)->where('employe_id',\Auth::user()->id)->get();
    }
    
    return view('lead.all')
    ->with('sql' , $sql);
   }


   public function edit_lead($id){
    $sql = \DB::table('lead')->where('id',$id)->first();
    return view('lead.edit')
    ->with('sql' , $sql);
}

public function update_lead(Request $request, $id){
    $lead_name = $_POST['lead'];
    $phone = $_POST['phone'];
    $email = $_POST['email']; 
    $city = $_POST['city'];
    $interest = $_POST['interest'];
    $source = $_POST['source'];
    $message = $_POST['message'];
    $status = $_POST['status'];
	$type = $_POST['industry_type'];
	
		$comany_name = $_POST['company_name'];
	$designation = $_POST['designation'];
	$what_no = $_POST['what_app'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$rdate = $_POST['r_date'];
	$rtime = $_POST['r_time'];
    date_default_timezone_set('Asia/Kolkata');
	$currentTime = date( 'd-m-Y h:i:s A', time () );
    DB::table('lead')->where('id',$id)->update([
        'company_name'=>$comany_name,
        'lead_name'=>$lead_name,
       'designation'=>$designation,
        'phone'=>$phone,
        'call_status'=>$what_no,
       'what_no'=>$what_no,
        'email'=>$email,
        'address'=>$address,
        'state'=>$state,
        'country'=>$country,
        'city'=>$city,
        'industry_type'=>$type,
        'interest'=>$interest,
        'source'=>$source,
        'status'=>$status,
        'lead_status'=>1,
        'last_update'=>$currentTime,
        'employe_id'=>\Auth::user()->id,
        'employe_name'=>\Auth::user()->firstname
       ]);
       if($message){
        DB::table('follow_up')->insert([
            'remarks'=>$message,
            'lead_id'=>$id,
            'user_id'=>\Auth::user()->id,
            'date'=>$currentTime,
            'user_name'=>\Auth::user()->firstname,
            'r_time'=>$rdate,
            'r_date'=>$rtime
        ]);
       }
       Session::flash('flash_type','success');
       Session::flash('flash_message','Lead updated Sucessfully!');
       
       
       return redirect('/admin/lead/view');
}


    public function add(){
        return view('lead.add');
    }
    public function new(){
        if(\Auth::user()->id == 1){
            $sql = \DB::table('lead')->where('lead_status',1)->where('status',1)->get();
        }else{
            $sql=  \DB::table('lead')->where('lead_status',1)->where('status',1)->where('employe_id',\Auth::user()->id)->get();
        }
        

        return view('lead.new')->with('sql' , $sql);
    }
    public function working(){
        if(\Auth::user()->id == 1){
            $sql = \DB::table('lead')->where('lead_status',1)->where('status',2)->get();
        }else{
            $sql=  \DB::table('lead')->where('lead_status',1)->where('status',2)->where('employe_id',\Auth::user()->id)->get();
        }
        
        return view('lead.working')->with('sql' , $sql);
    }
    public function contacted(){
        if(\Auth::user()->id == 1){
            $sql = \DB::table('lead')->where('lead_status',1)->where('status',3)->get();
        }else{
            $sql=  \DB::table('lead')->where('lead_status',1)->where('status',3)->where('employe_id',\Auth::user()->id)->get();
        }
        return view('lead.contacted')->with('sql' , $sql);
    }
    public function qualified(){
        if(\Auth::user()->id == 1){
            $sql = \DB::table('lead')->where('lead_status',1)->where('status',4)->get();
        }else{
            $sql=  \DB::table('lead')->where('lead_status',1)->where('status',4)->where('employe_id',\Auth::user()->id)->get();
        }
        return view('lead.qualified')->with('sql' , $sql);
    }
    public function failed(){
        if(\Auth::user()->id == 1){
            $sql = \DB::table('lead')->where('lead_status',1)->where('status',5)->get();
        }else{
            $sql=  \DB::table('lead')->where('lead_status',1)->where('status',5)->where('employe_id',\Auth::user()->id)->get();
        }
        return view('lead.failed')->with('sql' , $sql);
    }
    public function closed(){
        if(\Auth::user()->id == 1){
            $sql = \DB::table('lead')->where('lead_status',1)->where('status',6)->get();
        }else{
            $sql=  \DB::table('lead')->where('lead_status',1)->where('status',6)->where('employe_id',\Auth::user()->id)->get();
        }
        return view('lead.closed')->with('sql' , $sql);
    }
    public function renewable(){
        if(\Auth::user()->id == 1){
            $sql = \DB::table('lead')->where('lead_status',1)->where('status',2)->get();
        }else{
            $sql=  \DB::table('lead')->where('lead_status',1)->where('status',2)->where('employe_id',\Auth::user()->id)->get();
        }
        return view('lead.renewable')->with('sql' , $sql);
    }
   

    public function view(){
        return view('Enquiry.view')
            ->with('enquiries',Enquiry::orderBy('id','DESC')->paginate(20));
    }
}
