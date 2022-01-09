<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateProfileInformationController extends Controller
{
    public function edit()
    {
        return view('users.edit');
    }

    public function update(Request $request)
    {
        $attr = $request->validate([
            'name' => ['string', 'required', 'min:3', 'max:191'],
            'email' => ['required', 'email', 'min:3', 'max:191'],
            'username' => ['required', 'alpha_num', 'unique:users,username,' . auth()->id()],
        ]);

        auth()->user()->update($attr);

        return back()->with('message', 'Your profile has been updated.');
    }
}
