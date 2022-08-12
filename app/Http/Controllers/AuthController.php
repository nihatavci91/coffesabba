<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except(['login', 'logout']);
    }

    public function panelLogin(Request $request)
    {
        return view('panel.login');
    }

    public function loginPage(Request $request)
    {
        return view('home.login');
    }

    public function weblogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt(['email' => $validated['email'], 'password' => $validated['password']], empty($validated['remember']) ? false : $validated['remember'])) {
            return redirect()->back()->withErrors(['login-olamiyorum']);
        }

        if (!auth()->user()->isAdmin()) {
            return redirect()->route('home');
        }

        return redirect()->route('panel.index');
    }

    public function register(Request $request)
    {
        return view('customer.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'password' => 'required|min:8|confirmed',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        auth()->login($user);

        return redirect()->route('home');
    }



    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember' => 'nullable|in:true'
        ]);

        if (!auth()->attempt(['email' => $validated['email'], 'password' => $validated['password']], empty($validated['remember']) ? false : $validated['remember'])) {
            return redirect()->back()->withErrors(['login-olamiyorum']);
        }

        if (!auth()->user()->isAdmin()) {
            return redirect()->route('home');
        }

        return redirect()->route('panel.index');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
