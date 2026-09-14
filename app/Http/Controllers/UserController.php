<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.registro');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password,
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function showLoginForm(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['openLoginModal' => true]);
        }

        return redirect()->back()->with('openLoginModal', true);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (! Auth::attempt($credentials)) {
            return back()->withErrors(['email' => 'Las credenciales no coinciden.'])->onlyInput('email');
        }

        $request->session()->regenerate();

        if (Auth::user()->is_admin) {
            Auth::logout();
            return redirect()->route('admin.login')
                ->withErrors(['email' => 'Los admins deben loguearse desde el panel de administración.']);
        }

        return redirect()->intended(route('home'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
