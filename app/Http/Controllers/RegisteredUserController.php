<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\Employer;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // Validate data
        $validatedAttrs = request()->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required', Password::min(8)->letters()->numbers(), 'confirmed']
        ]);

        // Create User
        $user = User::create($validatedAttrs);

        // What a fucking headache.
        Employer::create([
            'company_name' => fake()->company(),
            'user_id' => $user->id
        ]);

        // Log in
        Auth::login($user);

        return redirect('/jobs');
    }

}
