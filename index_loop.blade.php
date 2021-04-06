@extends('admin.layouts.app')  <!-- Caminho do path de onde será extendido  -->

@section('title', 'Admin')
    


@section('content')     <!-- sessão com conteúdo a ser aplicado no template -->
    <h1>Exibindo os Produtos</h1>

    @if (isset($teste1)) <!-- Estrutura de repetição verifica se existe o valor  e o tipo da váriavel -->
        @foreach ($products as $product)
            <p>{{$product}}</p>            
        @endforeach
    @endif

    <hr>
    @forelse ($products as $product)
    <p>{{$product}}</p> 
    @empty
        <p>Não existem produltos cadastrados</p>
    @endforelse
        
    
 
    
    
@endsection
