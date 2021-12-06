<?php

namespace App\Http\Controllers;

use Illuminate\Htto\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function index()
    {
       // MIGRATIONS

       $res = DB::select("SELECT * FROM teste");
       echo "ok";
    }
}
