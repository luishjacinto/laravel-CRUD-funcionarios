<?php

namespace App\Http\Controllers;

use App\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    //
    public function inicio()
    {
        $funcionarios = Funcionario::all();

        $gerentes = array();
        $diretores = array();
        $engenheiros = array();

        foreach($funcionarios as $funcionario){
            if($funcionario->cargo == 'gerente'){
                array_push($gerentes, $funcionario);
            }
            if($funcionario->cargo == 'diretor'){
                array_push($diretores, $funcionario);
            }
            if($funcionario->cargo == 'engenheiro'){
                array_push($engenheiros, $funcionario);
            }
            
        }

        return view('inicio', ['gerentes' => $gerentes, 'diretores' => $diretores, 'engenheiros' => $engenheiros]);
    }

    public function gerenciar()
    {
        $funcionarios = Funcionario::all();

        return view('gerenciamento', ['funcionarios' => $funcionarios]);
    }

    public function busca(Request $request)
    {
        $resultados = Funcionario::busca($request->pesquisa);
        $busca = $request->pesquisa;
        if($busca == ''){
            $busca = "Todos";
        }

        return view('buscar', ['resultados' => $resultados, 'busca' => $busca]);
    }

    public function adicionar(Request $request)
    {
        $bonus = false;
        if($request->bonificacao == "1"){
            $bonus = true;
        }
        $funcionario = Funcionario::create(['nome' => $request->nome, 'salario' => $request->salario, 'cargo' => $request->cargo, 'bonificacao' => $bonus]);

        return redirect("/gerenciar");
    }

    public function excluir($matricula)
    {
        $funcionario = Funcionario::where('matricula', $matricula);
        $funcionario->delete();

        return redirect('/gerenciar');
    }

  
    public function editar($matricula)
    {
        $funcionario = Funcionario::where('matricula', $matricula)->first();
        
        return view('editar', ['funcionario' => $funcionario]);
    }

    public function alterar(Request $request)
    {
        $bonus = false;
        if($request->bonificacao == "1"){
            $bonus = true;
        }
        $funcionario = Funcionario::where('matricula', $request->matricula)->update(['nome' => $request->nome, 'salario' => $request->salario, 'cargo' => $request->cargo, 'bonificacao' => $bonus]);
        
        return redirect('/gerenciar');
    }
}
