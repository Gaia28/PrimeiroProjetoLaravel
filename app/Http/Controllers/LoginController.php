<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function showForm(): View
    {
        return view('auth/cadastro');
    }

    public function processRegister(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
          $user = User::create([
            
          ]);
            
            
    }
}
