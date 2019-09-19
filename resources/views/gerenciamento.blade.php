@extends("template")

@section("content")
<title>Gerenciar</title>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <h4>Adicionar funcionarios</h4>
        <form action="<?php echo action('IndexController@adicionar'); ?>" method="POST">
            <div class="form-group">
                {{ csrf_field() }}
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome">
            </div>
            <div class="form-group">
                {{ csrf_field() }}
                <label for="salario">Salário</label>
                <input type="number" name="salario" class="form-control" id="salario">
            </div>
            <div class="form-group">
                {{ csrf_field() }}
                <label for="cargo">Cargo</label>
                <select class="form-control" name="cargo" id="cargo">
                    <option value="gerente">gerente</option>
                    <option value="diretor">diretor</option>
                    <option value="engenheiro">engenheiro</option>
                </select>
            </div>
            <div class="form-group">
                {{ csrf_field() }}
                <label for="bonificacao">Recebe bonificação?</label>
                <select class="form-control" name="bonificacao" id="bonificacao">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
    <div class="col-4"></div>
</div>


<h4>Gerenciar funcionarios</h4>
@if(!empty($funcionarios))
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Nome</th>
            <th scope="col">Cargo</th>
            <th scope="col">Salário(R$)</th>
            <th scope="col">Bonificação</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($funcionarios as $funcionario)
        <?php
        $bonificacao = "Não";
        if($funcionario->bonificacao == true){
            $bonificacao = "Sim";
        }
    ?>
        <tr>
            <td>{{ $funcionario->matricula }}</td>
            <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->cargo }}</td>
            <td>{{ $funcionario->salario }}</td>
            <td>{{ $bonificacao }}</td>
            <td><a href="/{{ $funcionario->matricula }}/editar"><i style="color:black" class="small material-icons">edit</i></a><a href="/{{ $funcionario->matricula }}/excluir"><i style="color:black" class="small material-icons">delete</i></a></td>
        </tr>
    </tbody>
    @endforeach
</table>
@else
<span>Não há funcionarios adicionados!</span>
@endif

@endsection
