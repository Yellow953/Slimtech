<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['custom_logout', 'profile', 'save_profile', 'EditPassword', 'UpdatePassword']);
    }

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        $categories = Category::select('id', 'name', 'allow_rent')->where('active', true)->get();

        $data = compact('categories');
        return view('shop', $data);
    }

    public function custom_logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function profile()
    {
        return view('profile');
    }

    public function save_profile(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $user->update(
            $request->all()
        );
        $user->address = $request->address;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully...');
    }

    public function EditPassword()
    {
        return view('edit_password');
    }

    public function UpdatePassword(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with("danger", "Old Password Doesn't match!");
        }

        if ($request->new_password == $request->confirm_password) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with('success', "Your password has been changed");
        } else {
            return redirect()->back()->with('danger', "Passwords do not match!");
        }
    }
}
