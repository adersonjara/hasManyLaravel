<?php

namespace App\Http\Controllers;

use App\Models\Direccione;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function dataUsers()
    {
        $usuarios = Usuario::with('direcciones')->get();
        return $usuarios;
    }

    public function dataUser(Usuario $usuario, Direccione $direccione)
    {
        /*$usuario = Usuario::find($usuario->id)->direcciones;*/
        $usuario = Usuario::find($usuario->id)->direcciones()
                    ->where('id', $direccione->id)
                    ->first();

        return $usuario;
    }
}
