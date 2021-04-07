@extends('admin.layouts.app')  <!-- Caminho do path de onde será extendido  -->

@section('title', 'Admin')
    


@section('content')     <!-- sessão com conteúdo a ser aplicado no template -->
    <h1>Exibindo os Produtos</h1>

    @include('admin.alerts.alerts', ['content'=>'Alerta de preço dos Produtos'])  <!-- Include , inclui conteudos especificos -->

    <hr>

    @component('admin.components.card')
        @slot('title')
            <h1>Titulo Card</h1>
        @endslot
        Card de Exemplo
    @endcomponent
 
    
    
@endsection
