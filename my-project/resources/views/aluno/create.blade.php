<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('aluno.store')}}" method="POST">
        @csrf
        <h1>Novo Aluno</h1>
        <label>Nome:</label>
        <input type="text" name="nome">
        <br>
        <label>Curso:</label>
        <input type="text" name="curso">
        <br>
        <label>Ano:</label>
        <input type="integer" name="ano">
        <br>
        <input type="submit" value="Salvar" >
    </form>
</body>
</html>