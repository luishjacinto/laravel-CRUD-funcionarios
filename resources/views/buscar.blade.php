@extends("template")

@section("content")
<title>Busca por: {{ $busca }}</title>
<h4>Resultados por: {{ $busca }}</h4>
@if(!empty($resultados))
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
        @foreach($resultados as $funcionario)
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
<span>Não há resultados para a busca!</span>
@endif
@endsection
