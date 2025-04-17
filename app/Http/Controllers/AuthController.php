<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function index(){
        $titulo = 'Login de usuario';
        return view("layout.login", compact("titulo"));
    }

    public function logear(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        // buscar el email
        $user = User::where('email', $request->email)->first();
    
        // validar usuario y contraseña
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Credencial incorrecta!'])->withInput();
        }
    
        // el usuario esté activo
        if (!$user->activo) {
            return back()->withErrors(['email' => 'Tu cuenta está inactiva!']);
        }

        // crear la sesión de usuario
        Auth::login($user);
        $request->session()->regenerate();

        return to_route('welcome');

    }
    public function crearAdmin()
    {
        //crear directamente un admin
        User::create([
            'nombre_user' => 'Facultad Autodidacta',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'telefono' => 123456789,
            'direccion' => 'Calle Ficticia 123',
            'activo' => true,
            'Rol' => 'admin'
        ]);

        return "Admin creado con exito!!";
    }
       
}
