<?php

namespace App\Http\Controllers;

use App\Models\Aluno;

class Main extends Controller
{
    public function home()
    {
       // $resultados = Aluno::find(1)->telefones;
       $aluno = Aluno::where('nome', 'Dimas')->first();
       $telefones = Aluno::where('nome', 'Dimas')->first()->telefones;

       echo $aluno->nome;
       echo '<br>';
       foreach ($telefones as $telefone){
           echo $telefone->numero . '<br>';
       }
    }
}
