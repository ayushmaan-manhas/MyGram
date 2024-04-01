<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function create()
    {
        $url = url('/customer');
        $customer=new Customer();
        $title = "Customer Registration";
        $data= compact('url', 'title','customer');
        return view ('customerInfoPage')->with($data);
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confir' => 'required|same:password',         
            ]
        );

        
        
        //Insert Query
        $customer = new Customer;
        $customer -> user_name = $request['name'];
        $customer ->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->state= $request['state'];
        $customer->dob= $request['dob'];
        $customer->password=md5($request['password']);
        $customer->save();

        return redirect('/customer');
    }

    public function view(Request $request)
    {
        $search =$request['search']?? "";
        if($search!=""){
            //where search is not empty
            $customers= Customer::where('user_name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->paginate();

        }
        else{
            //where search is empty
            $customers = Customer::paginate(20);
        }
        
        $data = compact('customers','search');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer))
         {
            $customer->delete();
         }
        return redirect('/customer');
        
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer))
            {
                return redirect('customer');
            }
        else
            {
                $title = "Update Customer";
                $url=url('customer/update')."/".$id;
                $data = compact('customer','url','title');
                return view('customerInfoPage')->with($data);
            }  
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);

        $customer->user_name = $request['name'];
        $customer ->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->state= $request['state'];
        $customer->dob= $request['dob'];
        $customer->save();
        return redirect('customer');
    }

    public function trash()
    {
        $customers= Customer::onlyTrashed()->get();
        $data =compact('customers');
        return view('customer-trash')->with($data);
    }

    public function restore($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer))
         {
            $customer->restore();
         }
        return redirect('/customer');
        
    }
    
    public function forceDelete($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer))
         {
            $customer->forceDelete();
         }
        return redirect('/customer');
        
    }

}
