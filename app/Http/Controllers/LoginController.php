<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showForm(): View
    {
        return view('auth/login');
    }

 public function validarLogin(Request $request): RedirectResponse
    {
        Log::info('Entrou em validarLogin', $request->only('email'));

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Log::info('Login bem-sucedido', ['user_id' => Auth::id()]);
            return redirect()->intended(route('home'));
        }

        Log::warning('Falha no login', $request->only('email','password'));
        return back()->withErrors(['msg' => 'Credenciais inválidas.'])->withInput();
    }
}
