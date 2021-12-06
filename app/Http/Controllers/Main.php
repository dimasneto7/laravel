<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Disciplina;

class Main extends Controller
{
    public function home()
    {
        $id = 2;

        $aluno = Aluno::with('disciplinas')->find($id);

        echo '<h3>'.$aluno->nome.'</h3>';
        foreach($aluno->disciplinas as $disciplina){
            echo $disciplina->disciplina.'<br>';
        }

        echo '<hr>';

        $disciplina = Disciplina::with('alunos')->find(1);
        echo '<h3>'.$disciplina->disciplina.'</h3>';
        foreach($disciplina->alunos as $aluno){
            echo $aluno->nome.'<br>';
        }

    }
}
