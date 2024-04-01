<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index(){
        $data="I am working now";
        return view('crud.index',[
            'data' =>$data
        ]);
    }
}
