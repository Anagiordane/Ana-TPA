<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
</head>
<body>
    <h1>Disciplinas</h1>
    <a href="{{ route('disciplines.create') }}">Adicionar Disciplina</a>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($disciplines as $discipline)
            <li>
                {{ $discipline->title }}
                <a href="{{ route('disciplines.edit', $discipline) }}">Editar</a>
                <form action="{{ route('disciplines.destroy', $discipline) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
