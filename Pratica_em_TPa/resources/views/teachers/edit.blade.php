<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Professor</title>
</head>
<body>
    <h1>Editar Professor</h1>
    <form action="{{ route('teachers.update', $teacher) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $teacher->name }}" required>
        <input type="text" name="subject" value="{{ $teacher->subject }}" required>
        <button type="submit">Atualizar</button>
    </form>
    <a href="{{ route('teachers.index') }}">Voltar</a>
</body>
</html>
