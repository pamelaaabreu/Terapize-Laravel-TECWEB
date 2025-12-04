@extends('layouts.app')

@section('content')
<div class="container">

    <h3 class="fw-bold mb-3">
        <i class="bi bi-person-lines-fill me-2"></i> Editar Pessoa
    </h3>

    <div class="card shadow-lg formulario-card mb-1">
        <div class="card-body">

            <form method="POST" action="{{ route('pessoas.update', $pessoa->id) }}">
                @csrf
                @method('PUT')

                @include('pessoas.form')

                <div class="mt-2 text-end">
                    <button class="btn btn-primary btn-sm px-4">
                        <i class="bi bi-check-circle-fill me-1"></i> Atualizar
                    </button>
                    <a href="{{ route('pessoas.index') }}" class="btn btn-secondary btn-sm px-4 ms-2">
                        <i class="bi bi-arrow-left-circle me-1"></i> Voltar
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

<style>
    .formulario-card {
        border-radius: 15px;
        padding: 5px;
        background: #ffffff;
    }


    .form-control-custom {
        border-radius: 10px;
        border: 1px solid #ced4da;
        padding: 5px 10px;
        transition: all 0.2s ease;
        background: #fff;
    }

    .form-control-custom:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 8px rgba(13, 110, 253, .3);
    }

    .form-label {
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }

    .form-group i {
        color: #0d6efd;
    }

    input::placeholder,
    textarea::placeholder {
        color: #999;
        font-size: 0.9rem;
    }


    .btn {
        transition: .2s ease-in-out;
        border-radius: 8px;
    }

    .btn:hover {
        transform: translateY(-2px);
    }
</style>

@endsection
