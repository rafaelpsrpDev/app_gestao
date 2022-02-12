<?php

use App\Fornecedor;
use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(SiteContato::class, 100)->create();

        /*
        $contato = new SiteContato();
        $contato->nome = 'phf.com.br';
        $contato->telefone = '81 99232-3210';
        $contato->email = 'phf@gmail.com';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja bem vindo';
        $contato->save();*/
    }
}
