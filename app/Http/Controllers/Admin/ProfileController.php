<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public $guard = 'admin';

    public function profile()
    {
        return view('admin.profile.index', [
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

    public function password()
    {
        return view('admin.profile.password', [
            'pageTitle' => 'Change Password'
        ]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        if(Hash::check($request->old_password, $request->user($this->guard)->password)){
            $user = Admin::find($request->user($this->guard)->id);
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('admin.dashboard')->with('success', 'Password updated');
        }else{
            return back()->with('error', 'Old password not matched the record, please try again');
        }
    }
}
