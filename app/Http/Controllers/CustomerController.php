<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function store(Request $request){
        $customer = Customer::created($request->all());

        return redirect()->route('aguacate');
    }
}
