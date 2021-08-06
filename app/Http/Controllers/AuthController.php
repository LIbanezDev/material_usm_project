<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends ViewController
{
    public function login()
    {
        $credentials = request()->only('email', 'password');

        if (Auth::attempt($credentials, request()->remember)) {
            request()->session()->regenerate();

            return ['ok' => true];
        }

        return ['ok' => false, 'msg' => 'Credenciales no validas'];
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->to('/');
    }

    public function register(Request $request)
    {
        try {
            $data = $request->all();
            $usuario = new Usuario();
            $usuario->name = $data['name'];
            $usuario->email = $data['email'];
            $usuario->email_verified_at = now();
            $usuario->remember_token = Str::random(10);
            $usuario->password = Hash::make($data['password']);
            $usuario->save();
            return ['ok' => true];
        } catch (Exception $ex) {
            return ['ok' => false, 'msg' => 'Email invalido.'];
        }

    }

}
