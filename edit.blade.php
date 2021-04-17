@extends('admin.layouts.app') <!-- Caminho do path de onde será extendido  -->

@section('title',"Editar Produto {$product->name}")
    


@section('content')
    <h1>Editar Produto {{ $product->name }}</h1>    

    <!-- Cria um formulario   -->
    <form action="{{ route('products.update', $product->id) }}" method="post"> 

        @method('PUT') <!-- Cria uma requisição tipo PUT   -->
        
        @include('admin.pages.products._partials.form')  

    </form>
@endsection        
