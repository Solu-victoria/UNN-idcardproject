<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\id_card_request;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;

class idcardRequestController extends Controller
{
    public function create() {
        return view('portal.forms');
    }

    public function store(Request $request)
    {
        $id = urlencode(urlencode($request->ident_number));
        $request->validate([
            
            'ident_number' => ['unique:id_card_requests'],
            
        ], [
            
            'ident_number.unique' => "You have already applied for an ID card, pls click <a href='id/".$id."'>here</a> to view your ID Card printout or <a href='id-report'>here</a> to report your ID Card if you can't find your Physical ID Card ."
        ]);

        $idreq = id_card_request::create([
            'name' => $request->name,
            'email' => $request->email,
            'ident_number' => $request->ident_number,
            'student-type' => $request->student_type,
            'address' => $request->address,            
            'request_date' => Carbon::now()          
        ]);

        event(new Registered($idreq));

        return redirect('/portal/id/'.$id);
    }
}
