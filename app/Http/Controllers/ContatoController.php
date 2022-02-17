<?php

namespace App\Http\Controllers;

use App\SiteContato;
use App\MotivoContato;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Since;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contato = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato', 'motivo_contato' => $motivo_contato]);
    }

    public function salvar(Request $request){

        $request->validate([
            'nome' => 'required|min:3|max:150|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
                'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ],
        [
            'nome.min' => 'Deve conter mais de 3 ou mais caracteres',
            'nome.max' => 'Deve conter no máximo 150 caracteres',
            'nome.unique' => 'Nome já existe',

            'email.email' => 'e-mail não válido',

            'mensagem.max' => 'Deve conter no máximo 2000 caracteres',

            'required' => 'O campo :attributes é obrigatório'

        ]

        );
        SiteContato::create($request->all());
        return redirect()->route('site.index');

    }
}
