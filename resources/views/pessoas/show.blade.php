@extends('layouts.app')

@section('title', 'Detalhes da Pessoa')

@section('content')
<div class="container">

    <h2 class="fw-bold mb-4">
        <i class="bi bi-person-badge-fill me-2"></i> Detalhes da Pessoa
    </h2>

    <div class="card shadow-lg detalhe-card mb-4">
        <div class="card-body">

            {{-- HEADER DO CARD --}}
            <div class="d-flex align-items-center mb-4">
                <div class="icon-circle bg-primary text-white me-3">
                    <i class="bi bi-person-fill"></i>
                </div>

                <div>
                    <h4 class="fw-bold mb-0">{{ $pessoa->nome }}</h4>
                    <small class="text-muted">ID #{{ $pessoa->id }}</small>
                </div>
            </div>

            {{-- GRID DE DADOS --}}
            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold"><i class="bi bi-person-lines-fill me-1"></i>CPF:</label>
                    <div>{{ $pessoa->cpf }}</div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold"><i class="bi bi-envelope me-1"></i>Email:</label>
                    <div>{{ $pessoa->email ?? '—' }}</div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold"><i class="bi bi-telephone me-1"></i>Telefone:</label>
                    <div>{{ $pessoa->telefone ?? '—' }}</div>
                </div>

                @if($pessoa->paciente)
                <div class="col-md-6 mb-3">
                    <label class="fw-bold text-success">
                        <i class="bi bi-heart-pulse-fill me-1"></i>Paciente:
                    </label>
                    <div>
                        <a href="{{ route('pacientes.show', $pessoa->paciente->id) }}"
                            class="btn btn-sm btn-outline-success rounded-pill mt-1">
                            <i class="bi bi-journal-medical me-1"></i> Ver Prontuário
                        </a>
                    </div>
                </div>
                @endif

            </div>

        </div>
    </div>


    <div class="d-flex gap-2">
        <a href="{{ route('pessoas.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left-circle me-1"></i> Voltar
        </a>
    </div>

</div>

<style>
    .detalhe-card {
        border-radius: 14px;
        background: #ffffff;
        padding: 25px;
    }

    .icon-circle {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 35px;
    }

    .btn {
        transition: .2s ease-in-out;
    }

    .btn:hover {
        transform: translateY(-2px);
    }
</style>
@endsection
