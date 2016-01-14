<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()

    {

        $people = [
        'Tasha DiBiagio',
        'Martin Benes',
        'Nathan Explosion'];

        return view('pages.about',compact('people'));
    }

    public function contact(){
        return view('pages.contact');
    }

    
}
