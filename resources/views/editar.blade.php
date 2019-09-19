@extends("template")

@section("content")
<title>Editar funcionario</title>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <h4>Editar funcionario</h4>
        <form action="/alterar" method="POST">
            <input type="hidden" name="matricula" value="{{ $funcionario->matricula }}">
            <div class="form-group">
                {{ csrf_field() }}
                <label for="nome">Nome</label>
                <input type="text" name="nome" value="{{ $funcionario->nome }}" class="form-control" id="nome">
            </div>
            <div class="form-group">
                {{ csrf_field() }}
                <label for="salario">Salário</label>
                <input type="number"  value="{{ $funcionario->salario}}" name="salario" class="form-control" id="salario">
            </div>
            <div class="form-group">
                {{ csrf_field() }}
                <label for="cargo">Cargo</label>
                <select class="form-control" name="cargo" id="cargo">
                    <option checked="<?php if($funcionario->cargo == 'gerente'){ echo 'true'; } ?>" value="gerente">gerente</option>
                    <option checked="<?php if($funcionario->cargo == 'diretor'){ echo 'true'; } ?>" value="diretor">diretor</option>
                    <option checked="<?php if($funcionario->cargo == 'engenheiro'){ echo 'true'; } ?>" value="engenheiro">engenheiro</option>
                </select>
            </div>
            <div class="form-group">
                {{ csrf_field() }}
                <label for="bonificacao">Recebe bonificação?</label>
                <select class="form-control" name="bonificacao" id="bonificacao">
                    <option checked="<?php if($funcionario->bonificacao == 0){ echo 'true'; } ?>" value="0">Não</option>
                    <option checked="<?php if($funcionario->bonificacao == 1){ echo 'true'; } ?>" value="1">Sim</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
    <div class="col-4"></div>
</div>
@endsection