<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();
        return view('customer.index',['customers'=>$data]);
    }


    public function login(){
        return view ('customer.login');
    }

    
    public function register(){
        return view ('customer.register');
    }


    public function store(Request $req){
        //dd($req);
        $validated=$req->validate([
            "name"=>['required','min:4'],
            "email"=>['required','email', Rule::unique('customers','email'),],
            "password"=>'required|confirmed|min:6'
        ]);

        $validated['password']=Hash::make($validated['password']);
        $customer=Customer::create($validated);

        return redirect("/");

    }
    
    public function delete($id){
        $delete = DB::table("customers")
        ->where("id", "=", $id)
        ->delete();
        return redirect ('/') -> with("success", 'customer deleted');
        
    }
}
