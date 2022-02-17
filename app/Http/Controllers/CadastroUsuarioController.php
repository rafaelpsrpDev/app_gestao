<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CadastroUsuarioController extends Controller
{
    public function index(){
        return view('site.cadastro_usuario', ['titulo' => 'Cadastro Usuário']);
    }

    public function gravar(Request $request){

        $camposValidados = array();
        $regras = [
            'nome' => 'required|min:4|max:50',
            'email' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'nome.min' => 'precisa ter mais que 4 caracters',
            'nome.max' => 'precisa ser até 50 caraters',

            'email.email' => 'precisa ser no formata de um email',

            'required' => 'campo :attribute precisa ser preenchida'
        ];

        $validaCampos = $request->validate($regras, $feedback);
        $retornoEmail = $this->igualdadeEmail($request);
        if($retornoEmail){
            $camposValidados = [
                'name' => $validaCampos['nome'],
                'email' => $validaCampos['email'],
                'password' => $validaCampos['senha']

            ];
            //dd($camposValidados);
            User::create($camposValidados);
            //redirect()->route('site.cadastro_usuario');
        }else{
           // $camposValidados = [];
            //redirect()->route('site.index');
            return false;
        }

    }

    private function igualdadeEmail(Request $request): bool
    {
        $feedbackIgualdade = User::where('email', $request->email)->get();
        $transformArray = $feedbackIgualdade->toArray();

        if(empty($transformArray)){
            $feedBool = true;
        }else{
            $feedBool = false;
        }

        return $feedBool;
    }
}
