<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }

    public function update(Request $request)
{
    $request->user()->update(
        $request->all()
    );

    return redirect()->route('profile.edit');
}
}
