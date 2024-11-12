<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Disciplina</title>
</head>
<body>
    <h1>Adicionar Disciplina</h1>
    <form action="{{ route('disciplines.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Título da Disciplina" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('disciplines.index') }}">Voltar</a>
</body>
</html>
