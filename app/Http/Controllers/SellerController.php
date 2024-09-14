<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    //
    public function index(){
        return view("seller.login");
    }

    protected function getCredencial(Request $request)
    {
        // Aquí estamos verificando que el email, nombre y contraseña coincidan
        return [
            'email' => $request->email,
            'name' => $request->name,
            'password' => $request->password,
        ];
    }

    public function login(Request $request)
    {
        $credentials = $this->getCredencial($request);

        if (Auth::guard('vendedor')->attempt($credentials)) {
            //return redirect()->intended('dashboard'); // Redirige a la página que desees después del login

            return redirect()->route('welcome');
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('vendedor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
