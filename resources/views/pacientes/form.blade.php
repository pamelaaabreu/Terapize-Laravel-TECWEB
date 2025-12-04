<div class="form-group mb-3">
    <label class="form-label fw-bold">
        <i class="bi bi-person-lines-fill me-1"></i> Pessoa
    </label>
    <select name="pessoa_id" class="form-control form-control-custom">
        @foreach($pessoas as $p)
        <option value="{{ $p->id }}"
            @selected(old('pessoa_id', $paciente->pessoa_id ?? '') == $p->id)>
            {{ $p->nome }} ({{ $p->cpf }})
        </option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label class="form-label fw-bold">
        <i class="bi bi-hash me-1"></i> Nº Prontuário
    </label>
    <input type="text"
        name="numero_prontuario"
        class="form-control form-control-custom"
        placeholder="Ex: 2025-00123"
        value="{{ old('numero_prontuario', $paciente->numero_prontuario ?? '') }}">
</div>

<div class="form-group mb-3">
    <label class="form-label fw-bold">
        <i class="bi bi-journal-text me-1"></i> Observações
    </label>
    <textarea name="observacoes" class="form-control form-control-custom" rows="4"
        placeholder="Anotações gerais sobre o paciente...">{{ old('observacoes', $paciente->observacoes ?? '') }}</textarea>
</div>

<style>
    .form-control-custom {
        border-radius: 10px;
        border: 1px solid #ced4da;
        padding: 10px 12px;
        transition: all 0.2s ease;
    }

    .form-control-custom:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 8px rgba(13, 110, 253, .3);
    }

    .form-label {
        font-size: 14px;
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
</style>
