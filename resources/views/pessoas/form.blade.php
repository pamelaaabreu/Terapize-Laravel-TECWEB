<div class="form-group mb-3">
    <label class="form-label fw-bold">
        <i class="bi bi-person-fill me-1"></i> Nome
    </label>
    <input type="text" name="nome" class="form-control form-control-custom"
        placeholder="Digite o nome completo"
        value="{{ old('nome', $pessoa->nome ?? '') }}">
</div>

<div class="form-group mb-3">
    <label class="form-label fw-bold">
        <i class="bi bi-card-text me-1"></i> CPF
    </label>
    <input type="text" name="cpf" class="form-control form-control-custom"
        placeholder="000.000.000-00"
        value="{{ old('cpf', $pessoa->cpf ?? '') }}">
</div>

<div class="form-group mb-3">
    <label class="form-label fw-bold">
        <i class="bi bi-envelope-fill me-1"></i> Email
    </label>
    <input type="email" name="email" class="form-control form-control-custom"
        placeholder="email@exemplo.com"
        value="{{ old('email', $pessoa->email ?? '') }}">
</div>

<div class="form-group mb-3">
    <label class="form-label fw-bold">
        <i class="bi bi-telephone-fill me-1"></i> Telefone
    </label>
    <input type="text" name="telefone" class="form-control form-control-custom"
        placeholder="(00) 00000-0000"
        value="{{ old('telefone', $pessoa->telefone ?? '') }}">
</div>
