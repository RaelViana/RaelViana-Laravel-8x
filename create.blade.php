@extends('admin.layouts.app') <!-- Caminho do path de onde será extendido  -->

@section('title','Cadastrar Novo Produto')
    


@section('content')
    <h1>Cadastrar Novo Produto</h1>    

    <!-- Cria um formulario   -->
    <form action="{{ route('products.store') }}" method="post">
        
        @csrf          <!-- Cria um token de Validação de requisição   -->
        
        <input type="text" name="Nome" placeholder="Name">
        <input type="text" name="Descrição" placeholder="Description">
        <button type="submit">Enviar</button>       
    </form>
@endsection