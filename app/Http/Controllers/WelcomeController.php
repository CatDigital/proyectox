<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class WelcomeController extends Controller
{
    public function index()
    {
        $productos = Producto::where('es_nuevo', true)->get();
        return view('layout.welcome', compact('productos'));
    }
}
