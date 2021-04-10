@extends('admin.layouts.app') <!-- Caminho do path de onde será extendido  -->

@section('title','Cadastrar Novo Produto')
    


@section('content')
    <h1>Cadastrar Novo Produto</h1>    

    <!-- Cria um formulario   --> 
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">    <!-- o enctype é necessário para upload de arquivo  -->
        
        @csrf          
        
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="description" placeholder="Descrição">
        <input type="file" name="photo">          <!-- Cria um input de arquivo  -->
        <button type="submit">Enviar</button>       
    </form>
@endsection