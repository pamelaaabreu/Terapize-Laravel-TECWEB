@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="fw-bold mb-4">
        <i class="bi bi-people-fill me-2"></i> Pessoas
    </h2>

    <a href="{{ route('pessoas.create') }}" class="btn btn-primary mb-3 shadow-sm">
        <i class="bi bi-plus-circle me-1"></i> Nova Pessoa
    </a>

    <table class="table table-hover table-striped align-middle shadow-sm tabela-clinica">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($pessoas as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nome }}</td>
                <td>{{ $p->cpf }}</td>
                <td class="text-center">

                    {{-- Ver --}}
                    <a href="{{ route('pessoas.show', $p->id) }}"
                        class="btn btn-sm btn-outline-primary rounded-pill me-1">
                        <i class="bi bi-eye"></i>
                    </a>

                    {{-- Editar --}}
                    <a href="{{ route('pessoas.edit', $p->id) }}"
                        class="btn btn-sm btn-outline-warning rounded-pill me-1">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    {{-- Excluir --}}
                    <form action="{{ route('pessoas.destroy', $p->id) }}"
                        method="POST"
                        class="d-inline"
                        onsubmit="return confirm('Tem certeza que deseja excluir esta pessoa?')">
                        @csrf @method('DELETE')

                        <button class="btn btn-sm btn-outline-danger rounded-pill">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

<style>
    .tabela-clinica {
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
    }

    .tabela-clinica thead th {
        font-size: 15px;
        letter-spacing: .5px;
    }

    .tabela-clinica tbody tr:hover {
        background-color: #f2f6fc !important;
        transition: background 0.2s ease-in-out;
    }

    .btn {
        transition: 0.2s ease-in-out;
    }

    .btn:hover {
        transform: translateY(-2px);
    }
</style>
@endsection
