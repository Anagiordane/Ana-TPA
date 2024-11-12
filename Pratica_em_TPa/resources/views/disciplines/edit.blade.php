<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Disciplina</title>
</head>
<body>
    <h1>Editar Disciplina</h1>
    <form action="{{ route('disciplines.update', $discipline) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $discipline->title }}" required>
        <button type="submit">Atualizar</button>
    </form>
    <a href="{{ route('disciplines.index') }}">Voltar</a>
</body>
</html>
