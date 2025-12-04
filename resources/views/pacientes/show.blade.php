@extends('layouts.app')

@section('title', 'Detalhes do Paciente')

@section('content')
<div class="container">

    <h2 class="fw-bold mb-4">
        <i class="bi bi-file-medical-fill me-2"></i> Detalhes do Paciente
    </h2>

    <div class="card shadow-lg detalhe-card mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center mb-4">
                <div class="icon-circle bg-success text-white me-3">
                    <i class="bi bi-person-heart"></i>
                </div>

                <div>
                    <h4 class="fw-bold mb-0">{{ $paciente->pessoa->nome }}</h4>
                    <small class="text-muted">Prontuário #{{ $paciente->numero_prontuario }}</small>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="fw-bold"><i class="bi bi-person-badge me-1"></i>Nome:</label>
                    <div>{{ $paciente->pessoa->nome }}</div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold"><i class="bi bi-card-text me-1"></i>CPF:</label>
                    <div>{{ $paciente->pessoa->cpf }}</div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold"><i class="bi bi-envelope me-1"></i>Email:</label>
                    <div>{{ $paciente->pessoa->email ?? '—' }}</div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold"><i class="bi bi-telephone me-1"></i>Telefone:</label>
                    <div>{{ $paciente->pessoa->telefone ?? '—' }}</div>
                </div>

                <div class="col-12 mb-3">
                    <label class="fw-bold"><i class="bi bi-journal-text me-1"></i>Observações:</label>
                    <div class="obs-box">
                        {{ $paciente->observacoes ?? 'Sem observações.' }}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="d-flex gap-2">
        <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left-circle me-1"></i> Voltar
        </a>
    </div>

</div>


<style>
    .detalhe-card {
        border-radius: 14px;
        background: #ffffff;
        padding: 10px;
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

    .obs-box {
        background: #f7f9fc;
        padding: 12px 15px;
        border-radius: 10px;
        border: 1px solid #e2e6ea;
        min-height: 70px;
        white-space: pre-line;
    }

    .btn {
        transition: 0.2s ease-in-out;
    }

    .btn:hover {
        transform: translateY(-2px);
    }
</style>
@endsection
