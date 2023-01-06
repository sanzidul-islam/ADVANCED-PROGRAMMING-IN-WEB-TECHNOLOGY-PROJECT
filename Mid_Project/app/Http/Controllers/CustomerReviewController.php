<?php

namespace App\Http\Controllers;

use App\Models\Customer_review;
use App\Http\Requests\StoreCustomer_reviewRequest;
use App\Http\Requests\UpdateCustomer_reviewRequest;
use Illuminate\Http\Request;

class CustomerReviewController extends Controller
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
     * @param  \App\Http\Requests\StoreCustomer_reviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomer_reviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer_review  $customer_review
     * @return \Illuminate\Http\Response
     */
    public function show(Customer_review $customer_review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer_review  $customer_review
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer_review $customer_review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomer_reviewRequest  $request
     * @param  \App\Models\Customer_review  $customer_review
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomer_reviewRequest $request, Customer_review $customer_review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer_review  $customer_review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer_review $customer_review)
    {
        //
    }

    public function Customerdashboard(){
        return view('Customer.Customerdashboard');
    }

    public function Addcomplain(){
        return view('Customer.Addcomplain');
    }

    public function AddcomplainSubmit(Request $request){
       
     
     
     
           $admin = new Customer_review();
           $admin->hotel= $request->hotel;
           $admin->complain= $request->complain;
           
           $admin->save();
          // return "ok";
          return redirect()->route('Addcomplain'); 
          //redirect()->route('teacherList');
       }

     public function Complainlist(){
    $Admins = Customer_review::all(); 
    $Admins = Customer_review::paginate(3);
    return view('Customer.Complainlist')->with('Admins', $Admins);
    
    }
    public function CustomerReviewapi(){
        return Customer_review::all();
      }
      public function CustomerReviewapipost(Request $request){
        $admin = new Customer_review();
               $admin->id= $request->id;
               $admin->hotel= $request->hotel;
               $admin->complain= $request->complain;   
               $admin->save();
               return $request;
      }
    
}
