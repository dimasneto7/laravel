<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Disciplina;

class Main extends Controller
{
    public function home()
    {
        $aluno = Aluno::find(3);
        echo 'Aluno: ' . $aluno->nome . '<br>';

        foreach($aluno->disciplinas as $disciplina) {
            echo $disciplina->disciplina . '<br>';
        }

        echo '<hr>';
        $disciplina = Disciplina::find(1);
        echo 'Disciplina: '. $disciplina->disciplina .'<br>';

        foreach($disciplina->alunos as $aluno) {
            echo $aluno->nome . '<br>';
        }
    }
}
