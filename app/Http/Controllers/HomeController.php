<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function billing_information()
    {
        return view('billing-information');
    }
     public function  payment_store(Request $request){
        $username=$request->username;
        $amount=$request->amount;
        $payment_method=$request->payment_method;
        $payment_date=$request->payment_date;

        $obj=new Billing();

        $obj->username=$username;
        $obj->amount=$amount;
        $obj->payment_method=$payment_method;
        $obj->payment_date=$payment_date;
        if($obj->save()){
           echo "Save Successfully";
        }

    }
}
