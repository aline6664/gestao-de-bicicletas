<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo(a) ao sistema de gestão!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap -->
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="text-center bg-white p-5 rounded shadow" style="max-width: 500px; width: 100%;">
        <h1 class="mb-4">Bem-vindo(a)!</h1>
        <p class="mb-4">Selecione um módulo para gerenciar:</p>
        <div class="d-grid gap-3">
            <a href="{{ route('bicicleta.index') }}" class="btn btn-primary">Gestão de Bicicletas</a>
            <a href="#" class="btn btn-dark">Gestão de Patins</a>
            <a href="#" class="btn btn-dark">Gestão de Capacetes</a>
            <a href="#" class="btn btn-dark">Gestão de Pneus</a>
        </div>
    </div>
</body>
</html>
