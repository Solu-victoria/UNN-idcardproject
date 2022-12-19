<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'department' => ['required', 'string', 'max:255'],
            'faculty' => ['required', 'string', 'max:255'],
            'phone_no' => ['required', 'string', 'max:20'],
            'ident_number' => ['required', 'string', 'max:255', 'unique:users'],
            'usertype' => ['required', 'string', 'max:255'],
            'image' => ['required', 'mimes:jpg,jpeg,png', 'max:2000000'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ], [
            'phone_no.max' => 'Must not exceed :max characters',
            'image.mimes' => 'Image formats allowed are jpg,jpeg,png',
            'image.max' => 'Image size must be less than 2 MB',
            'ident_number.unique' => 'This reg no/staff no has already been registered, pls login.',
            'ident_number.required' => 'Pls input a reg no/staff no.',
            'ident_number.max' => 'This identification numder has passed the maximum limit of 255 characters.',
            
        ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'department' => $request->department,
            'phone-no' => $request->phone_no,
            'faculty' => $request->faculty,
            'ident_number' => $request->ident_number,
            'image' => $newImageName,
            'usertype' => $request->usertype,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
