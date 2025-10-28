<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listagem de alunos</h1>
    <a href="{{route('aluno.create')}}">Novo Aluno</a>
    <table style = "border: 1px solid black">
        <thead>
            <th>Nome</th>
            <th>Turma</th>
            <th>Ano</th>
            <th>Ações</th>
        </thead>
        <tbody>
    @foreach ($alunos as $item)
    <tr>
        <td>{{ $item->nome }}</td>
        <td>{{ $item->curso }}</td>
        <td>{{ $item->ano }}</td>
        <td>
            <a href="{{route('aluno.edit', $item->id)}}">Alterar</a>
            <form action = "{{route('aluno.destroy', $item->id)}}" method="POST"style="display: inline;">
                @csrf
                @method('delete')
                <input type="submit" value="remover">
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</body>
</html>