<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    public function proprietario(){
        return $this->belongsTo('App\Models\Aluno', 'aluno_id', 'id');
    }
}
