@extends("template")

@section("content")
<title>Início</title>
<h4>Gerentes</h4>
@if(!empty($gerentes))
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Nome</th>
            <th scope="col">Salário bruto(R$)</th>
            <th scope="col">Salário liquido(R$)</th>
            <th scope="col">Inss(R$)</th>
            <th scope="col">Irrf(R$)</th>
            <th scope="col">Bonificação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($gerentes as $funcionario)
        <?php
        $inss = $funcionario->salario*0.11;
        $irrf = $funcionario->salario*0.16;
        $salarioLiq = $funcionario->salario - $inss - $irrf;
        $bonificacao = "Não";
        if($funcionario->bonificacao == true){
            $bonificacao = "Sim";
            $salarioLiq = $salarioLiq * 1.15;
        }
    ?>
        <tr>
            <td>{{ $funcionario->matricula }}</td>
            <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->salario }}</td>
            <td>{{ $salarioLiq }}</td>
            <td>{{ $inss }}</td>
            <td>{{ $irrf }}</td>
            <td>{{ $bonificacao }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
@else
<span>Não há gerentes!</span>
@endif

<h4>Diretores</h4>
@if(!empty($diretores))
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Nome</th>
            <th scope="col">Salário bruto(R$)</th>
            <th scope="col">Salário liquido(R$)</th>
            <th scope="col">Inss(R$)</th>
            <th scope="col">Irrf(R$)</th>
            <th scope="col">Bonificação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($diretores as $funcionario)
        <?php
        $inss = $funcionario->salario*0.11;
        $irrf = $funcionario->salario*0.16;
        $salarioLiq = $funcionario->salario - $inss - $irrf;
        $bonificacao = "Não";
        if($funcionario->bonificacao == true){
            $bonificacao = "Sim";
            $salarioLiq = $salarioLiq * 1.1;
        }
    ?>
        <tr>
            <td>{{ $funcionario->matricula }}</td>
            <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->salario }}</td>
            <td>{{ $salarioLiq }}</td>
            <td>{{ $inss }}</td>
            <td>{{ $irrf }}</td>
            <td>{{ $bonificacao }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
@else
<span>Não há diretores!</span>
@endif


<h4>Engenheiros</h4>
@if(!empty($engenheiros))
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Nome</th>
            <th scope="col">Salário bruto(R$)</th>
            <th scope="col">Salário liquido(R$)</th>
            <th scope="col">Inss(R$)</th>
            <th scope="col">Irrf(R$)</th>
            <th scope="col">Bonificação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($engenheiros as $funcionario)
        <?php
        $inss = $funcionario->salario*0.11;
        $irrf = $funcionario->salario*0.16;
        $salarioLiq = $funcionario->salario - $inss - $irrf;
        $bonificacao = "Não";
        if($funcionario->bonificacao == true){
            $bonificacao = "Sim";
            $salarioLiq = $salarioLiq * 1.2;
        }
    ?>
        <tr>
            <td>{{ $funcionario->matricula }}</td>
            <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->salario }}</td>
            <td>{{ $salarioLiq }}</td>
            <td>{{ $inss }}</td>
            <td>{{ $irrf }}</td>
            <td>{{ $bonificacao }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
@else
<span>Não há engenheiros!</span>
@endif
@endsection
