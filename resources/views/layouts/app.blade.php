<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Meu App Laravel')</title>
</head>
<body>
    <header style="background: #222; color: #fff; padding: 1rem;">
        <h1>Minha Aplicação</h1>
    </header>

    <main style="padding: 2rem;">
        @yield('content')
    </main>

    <footer style="background: #eee; padding: 1rem;">
        <p>Rodapé fixo aqui</p>
    </footer>
</body>
</html>
