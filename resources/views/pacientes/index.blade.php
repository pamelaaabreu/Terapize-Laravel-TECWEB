@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="fw-bold mb-4">
        <i class="bi bi-heart-pulse-fill me-2"></i> Pacientes
    </h2>

    <a href="{{ route('pacientes.create') }}" class="btn btn-primary mb-3 shadow-sm">
        <i class="bi bi-plus-circle me-1"></i> Novo Paciente
    </a>

    <table class="table table-hover table-striped align-middle shadow-sm tabela-clinica">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Pessoa</th>
                <th>Prontuário</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($pacientes as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->pessoa->nome }}</td>
                <td>{{ $p->numero_prontuario }}</td>
                <td class="text-center">


                    <a href="{{ route('pacientes.show', $p->id) }}"
                        class="btn btn-sm btn-outline-primary rounded-pill me-1">
                        <i class="bi bi-eye"></i>
                    </a>


                    <a href="{{ route('pacientes.edit', $p->id) }}"
                        class="btn btn-sm btn-outline-warning rounded-pill me-1">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <form action="{{ route('pacientes.destroy', $p->id) }}"
                        method="POST"
                        class="d-inline"
                        onsubmit="return confirm('Tem certeza que deseja excluir este paciente?')">

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
