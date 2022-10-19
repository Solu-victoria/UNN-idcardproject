<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('index');
    }    

    public function about(){
        return view('about');
    }  

    public function contact(){
        return view('contact');
    }  

    public function pindex(){
        return view('portal.index');
    }  

    public function view_id(){
        return view('portal.id');
    }    

    public function request(){
        return view('portal.forms');
    }    

    public function report(){
        return view('portal.validation');
    }    


}
