@extends('admin.layouts.app')  <!-- Caminho do path de onde será extendido  -->

@section('title', 'Admin')
    


@section('content')     <!-- sessão com conteúdo a ser aplicado no template -->
    <h1>Exibindo os Produtos</h1>

    @if ($teste === '123')  <!-- Estrutura condicional verifica o valor  e o tipo da váriavel e retorna verdadeiro ou falso -->
        É igual
    @else
        É diferente   
    @endif

    @unless ($teste === '123') <!-- Estrutura só imprime o valor se o retorno da váriavel for falso  -->
       <p>print</p>
    @endunless

    @empty($teste2)  <!-- Estrutura só imprime o valor se o retorno da váriavel for vazio  -->
        <p>Vazio...</p>    
    @endempty

    @auth  <!-- Estrutura de autenticação -->
       <p>Autenticado</p>                
    @else
       <p>Não Autenticado</p>       
    @endauth

    @guest <!-- Eata estrutura só acessa sem autenticação -->
       <p>Não Autenticado</p>       
    @endguest

    @switch($teste)  <!-- Eata estrutura verifica cada caso  -->
        @case(1)
            Igaul 1
            @break
        @case(2)
            Igual 2
            @break
        @case(123)
            Igual 123
            @break    
        @default
            Default
    @endswitch

    
@endsection
