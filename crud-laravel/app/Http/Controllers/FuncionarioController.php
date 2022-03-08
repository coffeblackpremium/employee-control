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
        
        return view('funcionario.indexFuncionario', ['funcionario'=>$funcionario, 'paginate'=>$paginate]);
    }

    public function create()
    {
        $options = Funcionario::pluck('setor', 'id');
        return view('funcionario.createFuncionario', ['option'=>$options]);
    }

    public function store(Request $request)
    {
        $funcionario = new Funcionario;

        $funcionario->nome = $request->nome;
        $funcionario->email = $request->email;
        $funcionario->cpf = $request->cpf;
        $funcionario->dataNascimento = $request->dataNascimento;
        $funcionario->setor = $request->setor;

        $funcionario->save();
        return redirect('funcionario.indexFuncionario')->with('msg', 'Funcionario Cadastrado com Sucesso');

    }
}
