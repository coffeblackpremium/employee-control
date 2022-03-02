<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionario = Funcionario::all();
        $paginate = DB::table('funcionarios')->paginate(20);
        
        return view('funcionario.funcionarioIndex', ['funcionario'=>$funcionario, 'paginate'=>$paginate]);
    }

    public function create()
    {
        return view('funcionario.createFuncionario');
    }
}
