<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    function index()
    {
        #first way to insert data
        // $cus = new Customer();
        // $cus->name = 'Arif';
        // $cus->rate = 100;
        // $cus->type = 'admin';
        // $cus->is_active = true;
        //$cus->save();
        #second way to data insert
        // $cus = Customer::create([
        //     'name' => 'Faruk',
        //     'rate' => 200,
        //     'type' => 'user',
        //     'is_active' => false
        // ]);
        #data Retrieve
        $data = null;
        // $data = Customer::where('name', 'Arif')->get();
        // $data = Customer::findOrfail();

        // $data = Customer::find(1)->update([
        //     'name' => 'Arif Hossain',
        //     'rate' => 200,
        //     'type' => 'user',
        //     'is_active' => false
        // ]);
        $data = Customer::find(1)->delete();



        return $data;
    }
}
