<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Bicicletas</title>
</head>
<body>
    <h1>Listagem de Bicicletas</h1>

    <a href="{{ route('bicicleta.create') }}">Cadastrar nova bicicleta</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Código</th>
                <th>Modelo</th>
                <th>Fabricante</th>
                <th>Opcionais</th>
                <th>Cor</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>