<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Admin page</title> <!-- A diretiva yield define um title padrão para todas as views extendidas  -->

    @stack('styles') <!-- A diretiva stack aplica stilos especificos em pág especificas  -->
</head>
<body>
    
    <!-- A diretiva yield define essa pagina como template,'content' será  o conteúdo inserido de outra view  -->
    @yield('content')  

    @stack('scripts') <!-- A diretiva stack define um padrão para todos scripts extendidos  -->
</head>
    
</body>
</html>