<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Cadastro</title>
</head>
<body>
    @if (session('success'))
        <p style="color: green">
            {{ session('success') }}
        </p>
    @endif

    @if (session('error'))
        <p style="color: red">
            {{ session('error') }}
        </p>
    @endif
    <h1>Cadastrar Usuário</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input placeholder="Nome completo" type="text" id="name" name="name" value="{{ old('name') }}" required>
        <br>

        <label for="email">Email:</label>
        <input placeholder="Email" type="email" id="email" name="email" value="{{ old('email') }}" required>
        <br>

        <label for="password">Senha:</label>
        <input placeholder="Senha" type="password" id="password" name="password" required>
        <br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>