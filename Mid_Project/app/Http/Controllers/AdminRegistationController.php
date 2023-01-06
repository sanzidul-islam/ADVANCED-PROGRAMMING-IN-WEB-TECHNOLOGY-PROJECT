<?php

namespace App\Http\Controllers;

use App\Models\Admin_registation;
use App\Http\Requests\StoreAdmin_registationRequest;
use App\Http\Requests\UpdateAdmin_registationRequest;
use Illuminate\Http\Request;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;
class AdminRegistationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdmin_registationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdmin_registationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin_registation  $admin_registation
     * @return \Illuminate\Http\Response
     */
    public function show(Admin_registation $admin_registation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin_registation  $admin_registation
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin_registation $admin_registation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdmin_registationRequest  $request
     * @param  \App\Models\Admin_registation  $admin_registation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmin_registationRequest $request, Admin_registation $admin_registation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin_registation  $admin_registation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin_registation $admin_registation)
    {
        //
    }

    public function AdminRegistation() {
        return view('AdminRegistation');
    }
     public function AdminRegistationsubmit(Request $request){
        $rules= [
           'id' => 'required',
           'name'=> 'required|min:5|string:A-Z,a-z',
           'phone'=> 'required|numeric',
           'email' => 'required',
           'roll' => 'required',
           'password'=> 'required|min:6',
           
       ];
       $messages= [
           'required'=> 'Please Fill-Up the Field',
           'name.min'=> 'Minimum 5 Character',
           'string'=> 'Name Should Be String',
           'numeric'=> 'The contact must be Numeric',
           'password.min' => 'Minimum 6 Character'
       ];
     
     $this->validate($request,$rules,$messages);
     
     
     
           $admin = new Admin_registation();
           $admin->id= $request->id;
           $admin->name= $request->name;
           $admin->phone= $request->phone;
           $admin->email= $request->email;
           $admin->roll= $request->roll;
           $admin->password= $request->password;
           
           $admin->save();
           return redirect()->route('login');
           //return "ok";
           //redirect()->route('teacherList');
       }
       public function logins(){
        return view('login');
      }

      public function loginSubmit(Request $request){
        $rules= [
           'phone' => 'required',
           'roll' => 'required',
           'password'=> 'required',
           
       ];
       $messages= [
           'required'=> 'Please Fill-Up the Field',
           'password.min' => 'Minimum 6 Character'
       ];
       $this->validate($request,$rules,$messages);
  
     $admin = Admin_registation::where('phone',$request->phone)
                         ->where('password',$request->password)
                         ->where('roll',$request->roll)
                         ->first();
      
    
     // return $teacher;

     if($admin->roll ==='admin'){
         $request->session()->put('user',$admin->name);
        return redirect()->route('Admindashboard');
        //return '$name';
     }
     elseif($admin->roll ==='customer'){
        $request->session()->put('user',$admin->name);
       return redirect()->route('Customerdashboard');
       //return "customer";
    }
     return back();
   }

   public function logouts()
    {
        session()->forget('user');
        return redirect()->route('logins');
    }

   public function Admindashboard(){
    return view('Admindashboard');
   }

   public function Adminlist(){
    $Admins = Admin_registation::all(); 
    $Admins = Admin_registation::paginate(2);
    return view('Adminlist')->with('Admins', $Admins);
   }

   public function Adminlistedit(Request $request){
    $Admins = Admin_registation::where('id', $request->id)->first();
    // return $student;
    return view('Adminlistedit')->with('Admins', $Admins);
    // return view('student.studentCreate')->with('student', $student);
   }

   public function AdminlisteditSubmit(Request $request){
    $rules= [
        
        'name'=> 'required|min:5|string:A-Z,a-z',
        'phone'=> 'required|numeric',
        'email' => 'required',
        'password'=> 'required|min:6',
        
    ];
    $messages= [
        'required'=> 'Please Fill-Up the Field',
        'name.min'=> 'Minimum 5 Character',
        'string'=> 'Name Should Be String',
        'numeric'=> 'The contact must be Numeric',
        'password.min' => 'Minimum 6 Character'
    ];


    $this->validate($request,$rules,$messages);


    $Admins = Admin_registation::where('id', $request->id)->first();
    // return  $student;
    
    $Admins->name = $request->name;
    //$Admin->id = $request->id;
    $Admins->phone = $request->phone;
    $Admins->email = $request->email;
    $Admins->password = $request->password;
    $Admins->save();
    return redirect()->route('Adminlist');

   }

   public function AdminDelete(Request $request){
    $student = Admin_registation::where('id', $request->id)->first();
    $student->delete();

    return redirect()->route('Adminlist');
    }
  public function search(){
    $search_text = $_GET['name'];
    $Admins = Admin_registation::where('name','LIKE','%'.$search_text.'%')->with('email')->get();
    return view('Adminlist',compact('Admins'));
  }

  public function AdminRegistationApi(){
    return Admin_registation::all();
  }

  public function AdminRegistationApiPost(Request $request){
    $admin = new Admin_registation();
           $admin->id= $request->id;
           $admin->name= $request->name;
           $admin->phone= $request->phone;
           $admin->email= $request->email;
           $admin->roll= $request->roll;
           $admin->password= $request->password;
           
           $admin->save();
           return $request;
    
  }
  public function  login(Request $request){
     
    $admin = Admin_registation::where('phone',$request->phone)
                         ->where('password',$request->password)
                         ->where('roll',$request->roll)
                         ->first();
    if($admin){
        $api_token = Str::random(64);
        $token = new Token();
        $token->userid = $admin->id;
        $token->token = $api_token;
        $token->created_at = new DateTime();
        $token->save();
        return $token;
    }
    return "No user found";

}
public function  logout(Request $req){

    $token = Token::where('token',$req->token)->first();
    if($token){
        $token->expired_at =new DateTime();
        $token->save();
        return $token;
    }
}



}