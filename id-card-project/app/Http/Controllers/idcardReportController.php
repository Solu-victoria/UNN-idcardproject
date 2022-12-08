<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\id_card_request;
use App\Models\id_card_report;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;

class idcardReportController extends Controller
{
    public function create() {
        return view('portal.validation');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['string', 'required', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'ident_number' => ['required', 'string', 'exists:id_card_requests']

        ], [
            'ident_number.exists' => 'This identification number has not applied for an ID card, if this is your portal then click <a href="id-request">here</a> to apply for one. if not then login to your portal and apply for one or check the identification number and try again.'
        
        ]);

        $id_no = $request->ident_number;

        $idcheck = id_card_report::where('ident_number', $id_no)->orderBy('id', 'desc')->first();
        
        if (isset($idcheck) && is_null($idcheck['newcardgiven_at'])) {
            return redirect()->back()->with('message', 'You have reported your ID card already, pls wait for our response!' );
        
        }else {
            
            $idrep = id_card_report::create([
                'name' => $request->name,
                'email' => $request->email,
                'ident_number' => $id_no,          
                'reported_at' => Carbon::now()          
            ]);
            return redirect()->back()->with('message', 'You have successfully reported your ID card!' );

        }

        // event(new Registered($idrep));
        
    }
}
