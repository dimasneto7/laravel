<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Telefone;

class Main extends Controller
{
    public function home()
    {
        // $aluno = Telefone::where('numero', '33333')->first()->proprietario;
        // echo $aluno->nome;

        $aluno = Telefone::find(1)->proprietario;
        $telefone = Telefone::find(1)->numero;

        echo $aluno->nome . ' - ' . $telefone;

    }
}
