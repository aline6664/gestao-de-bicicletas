<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bicicleta</title>
</head>
<body>
    <h1>Cadastrar Bicicleta</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action="{{ route('bicicleta.store') }}" method="POST">
        @csrf <!--insere automaticamente um token de segurança, protege formulários POST-->
        @method('post')

        <label for="bic_modelo">Modelo:</label>
        <input type="text" id="bic_modelo" name="bic_modelo" required><br><br>

        <label for="bic_fabricante">Fabricante:</label>
        <input type="text" id="bic_fabricante" name="bic_fabricante" required><br><br>

        <label for="bic_opcionais">Opcionais:</label>
        <input type="text" id="bic_opcionais" name="bic_opcionais"><br><br>

        <label for="bic_cor">Cor:</label>
        <input type="text" id="bic_cor" name="bic_cor" required><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>