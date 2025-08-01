<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usersAttributes = $request->validate([
            'name' =>  ['required'],
            'email' =>  ['required', 'email', 'unique:users,email'],
            'password' =>  ['required', 'confirmed', Password::min(6)],

        ]);


        $employerAttributes = $request->validate([
            'employer' =>  ['required'],
            'logo' =>  ['required', File::types(['png', 'jpg', ' webp'])],

        ]);

        $user = User::create($usersAttributes);

        $logoPath = $request->logo->store('logo');

        $user->employer()->create(attributes: [
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath

        ]);

        Auth::login($user);

        return redirect('/');
    }
}
