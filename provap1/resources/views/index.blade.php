<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!--Aponta para a pasta public-->
    <title>Listagem de Bicicletas</title>
</head>
<body>
    <h1>Listagem de Bicicletas</h1>
    <a href="{{ route('bicicleta.create') }}" class="btn-acao">Cadastrar nova bicicleta</a>
    <!--Sessão de sucesso, informa se a ação foi bem sucedida-->
    <div> 
        @if (session()->has('success'))
            <div>
                {{ session('success' )}} <!--Inclui a messagem de sucesso passada por parametro-->
            </div>
        @endif
    </div>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Código</th>
                <th>Modelo</th>
                <th>Fabricante</th>
                <th>Opcionais</th>
                <th>Cor</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bicicletas as $bicicleta) <!--acessando dados passado pelo Controller--->
                <tr>
                    <td>{{ $bicicleta->bic_cod }}</td>
                    <td>{{ $bicicleta->bic_modelo }}</td>
                    <td>{{ $bicicleta->bic_fabricante }}</td>
                    <td>{{ $bicicleta->bic_opcionais }}</td>
                    <td>{{ $bicicleta->bic_cor }}</td>
                    <td>
                        <a href="{{ route('bicicleta.edit', ['bicicleta' => $bicicleta->bic_cod]) }}">Editar</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('bicicleta.delete', ['bicicleta' => $bicicleta->bic_cod]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Excluir"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>