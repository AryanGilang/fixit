<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('welcome');
    }

    public function process(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        // Test: username = "admin", password = "admin"
        if ($request->username === 'admin' && $request->password === 'admin') {
            return redirect()->route('menu');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }

    public function menu()
    {
        return view('menu');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'username' => 'required|unique:users,username',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
        'role' => 'required|in:staf,mahasiswa',
    ]);

    // Hash password
    $validated['password'] = Hash::make($validated['password']);

    // Create user dan langsung tersimpan di database
    User::create($validated);

    return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
}
}