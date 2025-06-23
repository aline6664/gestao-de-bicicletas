<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylecadastro.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!--Bootstrap-->
    <title>Cadastro de Bicicleta</title>
</head>
<body class="container py-5 color">
    <h1 class="mb-4">Cadastrar Bicicleta</h1>

        <!--Mensagem de erro-->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form action="{{ route('bicicleta.store') }}" method="POST" class="bg-white p-4 shadow rounded w-50 mx-auto">
        @csrf <!--insere automaticamente um token de segurança, protege formulários POST-->
        @method('post')

        <div class="mb-3">
            <label for="bic_modelo" class="form-label">Modelo:</label>
            <input type="text" id="bic_modelo" name="bic_modelo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="bic_fabricante" class="form-label">Fabricante:</label>
            <input type="text" id="bic_fabricante" name="bic_fabricante" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="bic_opcionais" class="form-label">Opcionais:</label>
            <input type="text" id="bic_opcionais" name="bic_opcionais" class="form-control">
        </div>

        <div class="mb-3">
            <label for="bic_cor" class="form-label">Cor:</label>
            <input type="text" id="bic_cor" name="bic_cor" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('bicicleta.index') }}" class="btn btn-danger">Cancelar</a>
    </form>

</body>
</html>