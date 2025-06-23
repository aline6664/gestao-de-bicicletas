<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylelista.css') }}"> <!--Aponta para a pasta public-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!--Bootstrap-->
    <title>Listagem de Bicicletas</title>
</head>
<body class="container py-5">
    <h1 class="mb-4">Listagem de Bicicletas</h1>
    <a href="{{ route('bicicleta.create') }}" class="btn btn-success mb-3">Cadastrar nova bicicleta</a>

    <!--Sessão de sucesso, informa se a ação foi bem sucedida-->
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success' )}} <!--Inclui a messagem de sucesso passada por parametro-->
        </div>
    @endif

    <table class="table table-striped table-bordered mx-auto">
        <thead class="table-dark">
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
                        <a href="{{ route('bicicleta.edit', ['bicicleta' => $bicicleta->bic_cod]) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('bicicleta.delete', ['bicicleta' => $bicicleta->bic_cod]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Excluir" class="btn btn-danger btn-sm"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>