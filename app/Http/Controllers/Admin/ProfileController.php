<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public $guard = 'admin';

    public function profile()
    {
        return view('admin.profile', [
            'user' => auth('admin')->user(),
            'pageTitle' => 'Profile'
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $request->user($this->guard)->id
        ]);

        $user = Admin::find($request->user($this->guard)->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return back()->with('success', 'Profile updated');
    }
}
