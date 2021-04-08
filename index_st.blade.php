@extends('admin.layouts.app')  <!-- Caminho do path de onde será extendido  -->

@section('title', 'Admin')
    


@section('content')     <!-- sessão com conteúdo a ser aplicado no template -->
    <h1>Exibindo os Produtos</h1>

    @include('admin.alerts.alerts', ['content'=>'Alerta de preço dos Produtos'])  

    <hr>

    @component('admin.components.card')
        @slot('title')
            <h1>Titulo Card</h1>
        @endslot
        Card de Exemplo
    @endcomponent
 
    
    
@endsection

<!-- Define um style especifico para a pág-->
@push('styles')
    <style>
        .last{background: #CCC;}
    </style>
@endpush

<!-- Define um script especifico para a pág-->
@push('scripts')
    <script>
        document.body.style.background = '#999'
    </script>
    
@endpush
