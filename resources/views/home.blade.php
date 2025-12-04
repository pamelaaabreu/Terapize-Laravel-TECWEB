@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">

    <h2 class="mb-4 fw-bold">Dashboard</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <a href="{{ route('pessoas.index') }}" class="text-decoration-none">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body text-center">
                        <div class="icon-circle bg-primary text-white mb-3">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h4 class="card-title fw-bold text-dark">Pessoas</h4>
                        <p class="text-muted">Gerenciar pessoas cadastradas</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('pacientes.index') }}" class="text-decoration-none">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body text-center">
                        <div class="icon-circle bg-success text-white mb-3">
                            <i class="bi bi-heart-pulse-fill"></i>
                        </div>
                        <h4 class="card-title fw-bold text-dark">Pacientes</h4>
                        <p class="text-muted">Cadastro e prontuários</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body text-center">
                        <div class="icon-circle bg-warning text-white mb-3">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                        <h4 class="card-title fw-bold text-dark">Usuários</h4>
                        <p class="text-muted">Controle de acesso (em breve)</p>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>


<style>
    .dashboard-card {
        border-radius: 12px;
        transition: all 0.25s ease-in-out;
        border: none;
    }

    .dashboard-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .icon-circle {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 32px;
        margin: 0 auto;
    }
</style>

@endsection
