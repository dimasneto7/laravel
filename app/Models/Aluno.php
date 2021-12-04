<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function telefone(){
        return $this->hasOne('App\Models\Telefone');
    }
}
