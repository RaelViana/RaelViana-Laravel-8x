@extends('admin.layouts.app') <!-- Caminho do path de onde será extendido  -->

@section('title','Editar Produto')
    


@section('content')
    <h1>Editar Produto {{ $id }}</h1>    

    <!-- Cria um formulario   -->
    <form action="{{ route('products.update', $id) }}" method="post"> 

        @method('PUT') <!-- Cria uma requisição tipo PUT   -->
        
        @csrf          <!-- Cria um token de Validação de requisição   -->
        
        <input type="text" name="Nome" placeholder="Name">
        <input type="text" name="Descrição" placeholder="Description">
        <button type="submit">Enviar</button>       
    </form>
@endsection        
