@extends('templates/main',
    [
        'titulo'=>"Sistema Aula",
        'cabecalho' => 'Alterar Curso',
        'rota' => 'curso.index',
        'relatorio' => '',
    ]
)

@section('conteudo')

<form action="{{ route('curso.update', $curso->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="nome"
                    placeholder="Nome do Curso"
                    value="{{ $curso->nome }}"
                />
                <label for="nome">Nome do Curso</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input
                    type="number"
                    class="form-control"
                    name="duracao"
                    placeholder="Duração"
                    value="{{ $curso->duracao }}"
                    required
                />
                <label for="duracao">Duração</label>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col">
            <a href="{{ route('curso.index') }}" class="btn btn-secondary">
                Voltar
            </a>
            <button type="submit" class="btn btn-success">
                Confirmar
            </button>
        </div>
    </div>
</form>

@endsection
