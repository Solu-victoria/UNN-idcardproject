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
        $idreq = id_card_request::create([
            'name' => $request->name,
            'email' => $request->email,
            'ident_number' => $request->ident_number,
            'student-type' => $request->student_type,
            'address' => $request->address,            
            'request_date' => Carbon::now()          
        ]);

        event(new Registered($idreq));

        $id_no = $request->ident_number;
        return redirect('/portal/id/'.$id_no);
    }
}
