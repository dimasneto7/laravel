<?php

namespace App\Http\Controllers;

use App\Models\Aluno;

class Main extends Controller
{
    public function home()
    {
        $id = 2;
        $aluno = Aluno::find($id);
        $telefone = Aluno::find($id)->telefone;
        echo $aluno->nome .' - '.$telefone->numero;
    }


}
