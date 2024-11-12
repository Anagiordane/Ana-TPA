<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Professor</title>
</head>
<body>
    <h1>Adicionar Professor</h1>
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome" required>
        <input type="text" name="subject" placeholder="Disciplina" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('teachers.index') }}">Voltar</a>
</body>
</html>
