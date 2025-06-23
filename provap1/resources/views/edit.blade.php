<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylecadastro.css') }}">
    <title>Cadastro de Bicicleta</title>
</head>
<body>
    <h1>Editar Bicicleta</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <section class="container">
        <form action="{{ route('bicicleta.update', ['bicicleta' => $bicicleta]) }}" method="POST">
            @csrf <!--insere automaticamente um token de segurança, protege formulários POST-->
            @method('put')

            <label for="bic_modelo">Modelo:</label>
            <input type="text" id="bic_modelo" name="bic_modelo" value="{{ $bicicleta->bic_modelo }}" required><br><br>

            <label for="bic_fabricante">Fabricante:</label>
            <input type="text" id="bic_fabricante" name="bic_fabricante" value="{{ $bicicleta->bic_fabricante }}" required><br><br>

            <label for="bic_opcionais">Opcionais:</label>
            <input type="text" id="bic_opcionais" name="bic_opcionais" value="{{ $bicicleta->bic_opcionais }}"><br><br>

            <label for="bic_cor">Cor:</label>
            <input type="text" id="bic_cor" name="bic_cor" value="{{ $bicicleta->bic_cor }}" required><br><br>

            <button type="submit">Salvar</button>
        </form>
    </section>
</body>
</html>