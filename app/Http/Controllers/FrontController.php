<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class FrontController extends Controller
{
    function index(){
        $data= Customer::get();
        return view('crud.index',[
            'data' =>$data
        ]);
    }

    function category(){
        $data= Customer::get();
        return view('crud.category',[
            'data' =>$data
        ]);
    }
}
