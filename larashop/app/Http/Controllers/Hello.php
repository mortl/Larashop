<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Hello extends Controller
{
    //
    public function index()
    {
    	return 'Hello World from Controller';
    }

    public function show($name){
    	return view('hello',array('name' => $name));
    }
}
