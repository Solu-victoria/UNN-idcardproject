<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\id_card_request;

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

    public function view_id($id_no){
        $details = id_card_request::where('ident_number', $id_no)->get();
        return view('portal.id')->with('details', $details);
    }    

    public function request(){
        return view('portal.forms');
    }    

    public function report(){
        return view('portal.validation');
    }    


}
