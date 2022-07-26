<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RequestUser;
use App\Models\User;
use App\Models\role_assign;
use App\Models\attributes;
use App\Models\company;
use App\Models\reviews;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailRegistraion;
use Auth;
use URL;
use Session;
use \Crypt;

class RegistrationController extends Controller
  {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
  Session::put('url.intended',URL::previous());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function registration_submit(Request $request)
      {
        $_POST['user_role']=2;
        $_POST['status']=1;
        $token_ignore = ['_token' => ''];
        $post_feilds = array_diff_key($_POST , $token_ignore);
        foreach ($post_feilds as $key => $value) {
            if ($key == "password") {
                $post_feilds[$key] = Hash::make($value);
            }
        }
        
        
       $user = User::create($post_feilds);
            if($user)
              {
                $email = Crypt::encrypt($request->get('email'));
                $redirect_link = route('confirm_email' , [$user->id,$email]);
                $details = [
                    'username' => $request->get('username'),
                    'email' =>$request->get('email'),
                    'redirect_link' =>$redirect_link,
                ];
                Mail::to($_POST['email'])->send(new MailRegistraion($details));
       }
       // dd($data);
        $attempt = false;
     //$attempt = Auth::attempt(['email' => $_POST['email'], 'password' => $_POST['password']]);
        
        if ($attempt) {
           return redirect()->route('home')->with('message', 'Welcome '.$user->name.' to Pocking');
        }else{
            return redirect()->back()->with('message', 'We have emailed you a verfication link. Please verify your email address to stay connected with Pocking');
        }
    }
    public function confirm_email($id ,$email)
      {
            $user = User::find($id);
            $email= decrypt($email);
            if ($user) {
                if($user->email == $email){
                    if ($user->is_active == 1) {
                        return redirect()->back()->with('error', 'Link is expired');
                    }else{
                        $user->is_active =1;
                        $user->save();    
                    }
                }
            }else{
               return redirect()->back()->with('message', 'User Dosent exist');
            }

        $attempt = Auth::loginUsingId($user->id,$remember = true);
        if ($attempt) {
           return redirect()->route('home')->with('message', 'Thank You '.$user->name.' for registering with Pocking');
         }else{
            return redirect()->back()->with('message', 'Your profile will be reviewed and will be activated once admin review.');
        }

        
     }

    public function validator_check()
    {
        if ($_POST['type'] == "duplicate") {
            $slug = Str::slug($_POST['value'], '_');
            if ($_POST['table'] == "company") {
                $msg_fail = "Company is already registered";
                $msg_success = "Company is already registered";
                $record = company::where("slug" , $slug)->first();
            }

            if ($_POST['table'] == "user") {
                $msg_fail = "Email is already registered";
                $msg_success = "Company is already registered";
                $record = User::where("email" , $_POST['value'])->first();
            }
            
            if ($record) {
                $resp['status'] = 0;
                $resp['message'] = $msg_fail;
                return json_encode($resp);
            }else{
                $resp['status'] = 1;
                $resp['message'] = $msg_success;
                return json_encode($resp);
            }
        }
    }



    public function registrations_submit(RequestUser $request)
      {
        
        $user = new User;
        $user->project_id = $request->project_id;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->personal_email = $request->personal_email;
        $user->phonenumber = $request->phonenumber;
        $user->emergency_number = $request->emergency_number;
        $user->cnic = $request->cnic;
        $user->residential_address = $request->residential_address;
        $user->blood_group = $request->blood_group;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->marital_status = $request->marital_status;
        $user->emp_id = $request->emp_id;
        $user->email = $request->email;
        $user->designation = $request->designation;
        $user->department = $request->department;
        $user->join_date = $request->join_date;
        $user->reporting_line = $request->reporting_line;
        if (isset($request->company_vehicle)) {
            $user->v_model_name = $request->v_model_name;
            $user->v_model_year = $request->v_model_year;
            $user->v_number_plate = $request->v_number_plate;    
        }else{
            $user->v_model_name = "";
            $user->v_model_year = "";
            $user->v_number_plate = "";
        }
        
        $user->bank_account_number = $request->bank_account_number;
        $user->password = Hash::make("admin321");

        // Avatar Upload
        if ($request->file('avatar') != '') {
            $path_a = ($request->file('avatar'))->store('uploads/avatar/'.md5(Str::random(20)), 'public');
            $user->profile_pic = $path_a;
        }

        // Resume Upload
        if ($request->file('cv_file') != '') {
            $path_r = ($request->file('cv_file'))->store('uploads/resume/'.md5(Str::random(20)), 'public');
            $user->resume_doc = $path_r;
        }

        // CNIC Upload
        if ($request->file('cnic_file') != '') {
            $path_c = ($request->file('cnic_file'))->store('uploads/cnic/'.md5(Str::random(20)), 'public');
            $user->cnic_doc = $path_c;
        }

        // Education Upload
        if ($request->file('education_file') != '') {
            $path_e = ($request->file('education_file'))->store('uploads/education/'.md5(Str::random(20)), 'public');
            $user->education_doc = $path_e;
        }

        $user->save();

        return redirect()->back()->with('message', 'User has been successfully added');
    }
}
