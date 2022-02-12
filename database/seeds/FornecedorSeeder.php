<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;



class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Fornecedor::class, 5)->create();

        /*
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Rafael Paulo';
        $fornecedor->site = 'rafaelpsrp.com.br';
        $fornecedor->uf = 'BA';
        $fornecedor->email = 'rafaelpsrp@hotmail.com';

        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Jose Victor',
            'site' => 'josevsr.com.br',
            'uf' => 'RJ',
            'email' => 'josevsr@outlook.com'
        ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Pedro Lucas',
            'site' => 'pedrolucas.com.br',
            'uf' => 'RS',
            'email' => 'pedrolucas@gmail.com'
        ]);
        */
    }
}
