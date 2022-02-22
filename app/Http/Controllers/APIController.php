<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{

    public function getCustomers()
    {
//'name','mobile','email'
        $occasions = DB::raw('select name, mobile, email from leads');
        //$query = Customer::select('first_name', 'last_name', 'email');
        return datatables($occasions)->make(true);
    }

}
