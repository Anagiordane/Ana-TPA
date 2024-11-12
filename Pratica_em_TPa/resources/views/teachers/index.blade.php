<!DOCTYPE html>
<html>
<head>
    <title>Professores</title>
</head>
<body>
    <h1>Professores</h1>
    <a href="{{ route('teachers.create') }}">Adicionar Professor</a>
    <ul>
        @foreach($teachers as $teacher)
            <li>{{ $teacher->name }} - {{ $teacher->subject }}
                <a href="{{ route('teachers.edit', $teacher) }}">Editar</a>
                <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
