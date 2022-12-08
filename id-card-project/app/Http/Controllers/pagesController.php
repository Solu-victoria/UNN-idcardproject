<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\id_card_request;
use App\Models\User;

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

    public function info(){
        return view('portal.userinfo');
    }  

    public function pindex(){
        return view('portal.index');
    }  

    public function view_id($id_no){
        $idno = urldecode(urldecode($id_no));
        $details = id_card_request::where('ident_number', $idno)->get();
        return view('portal.id')->with('details', $details);
    }    

    public function userinfo($id){
        $id = urldecode(urldecode($id));
        $info = User::where('ident_number', $id)->get();
        return view('userinfo')->with('info', $info);
    }    


}
