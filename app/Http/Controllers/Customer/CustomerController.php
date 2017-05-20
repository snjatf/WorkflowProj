<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Models\Customer;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Cache;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Cache::get('customer',function(){
            $customer = Customer::all();
            Cache::forever('customer', $customer);
            return $customer;
        });
        return view('customer.index',['theme'=>'default','page_data'=>$customers]);
    }

    public function create()
    {
        return view('customer.edit',['theme'=>'default','page_data'=>null]);
    }

    public function customer_detail()
    {
        return view('customer.detail',['theme'=>'default','page_data'=>null]);
    }
    public function task()
    {
        return view('customer.task',['theme'=>'default','page_data'=>null]);
    }
}
