<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request['email'];
        $password = $request['password'];
        $errors = [];

        $user = User::where('email', $email)->first();
        if (isset($user)) {
            if (Auth::attempt(['email' => $email, 'password' => $password])) {

                return redirect()->intended('/');

            } else {
                $errors['password'] = 'Wrong password';
            }
        }
        else {
            $errors['email'] = 'There\'s no account with that email';
        }

        return redirect()->back()->withErrors($errors);

    }

    public function registration()
    {
        return view('auth.register');
    }

    public function terms()
    {
        return view('auth.terms');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'terms' => 'required',
            'phone' => 'required|min:10',
        ]);

        $data = $request->all();
        $email = $request['email'];
        $password = $request['password'];
        $check = $this->create($data);

        if (isset($check)) {
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                $message = "Registration successful";
                return redirect()->route('login')->with(['message' => $message]);
            } else {
                $message = "Unable to authenticate";
                return redirect()->back()->with(['message' => $message]);
            }
        } else {
            $message = "Unable to create account";
            return redirect()->back()->with(['message' => $message]);
        }

    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

}
