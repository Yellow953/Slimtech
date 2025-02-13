<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['EditPassword', 'UpdatePassword']);
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function new()
    {
        return view('users.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed|max:255',
        ]);

        if ($request->password == $request->password_confirmation) {
            $user = new User();
            $user->email = $request->email;
            $user->name = $request->name;
            $user->role = $request->role;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->medical_condition = $request->medical_condition;

            $text = "User " . $request->name . " created, datetime: " . now();
            Log::create(['text' => $text]);

            $user->save();
            return redirect('/users')->with('success', 'User created successfully');
        } else {
            return redirect('/users/new')->with('danger', 'User cannot be created');
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);

        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->medical_condition = $request->medical_condition;

        $user->save();

        $text = "User " . $user->name . " updated, datetime: " . now();
        Log::create(['text' => $text]);
        return redirect('/users')->with('warning', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $text = "User " . $user->name . " was deleted, datetime: " . now();
        $user->delete();
        Log::create(['text' => $text]);
        return redirect('/users')->with('danger', "User deleted successfully");
    }
}