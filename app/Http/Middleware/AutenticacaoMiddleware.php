<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        echo $metodo_autenticacao.'</br>';

        if($metodo_autenticacao == 'padrao'){
            echo 'Verificar o usuario e senha no banco de dados de dados'.'</br>';
        }


        if($metodo_autenticacao == 'ladp'){
            echo 'Verificar o usuario e senha no AD'.'</br>';
        }

        if($perfil == 'visitante'){
            echo 'Só tem acesso a algumas partes do sistema'.'</br>';
        }else {
            echo 'Usuário ativo carrega as informações no banco'.'</br>';
        }

        if(false){
            return $next($request);
        }else{

            return Response('Acesso negado! Rota exige autenticação');
        }
        //return $next($request);
    }
}
