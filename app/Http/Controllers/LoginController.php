<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request)
    {

        $valoresCampoValidado = array();

        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'usuario.email' => 'Deve conter valor no campo e ser um email valido ',
            'senha.required' => 'Deve conter algum valor no campo'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $senha = $request->get('senha');

        echo "Usuario: $email e Senha: $senha";
        echo '<br>';

        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $senha)->get()->first();

        if(isset($usuario->name)){
            echo 'Usuario existe';
        }else{
            echo 'Usuario não existe';
        }

    }
}
