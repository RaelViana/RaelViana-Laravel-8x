@extends('admin.layouts.app') <!-- Caminho do path de onde será extendido  -->

@section('title','Cadastrar Novo Produto')
    


@section('content')
    <h1>Cadastrar Novo Produto</h1>    

     <!-- Se houver erros -listar todos  --> 
    @if ($errors->any())
        @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
        @endforeach
    @endif

    <!-- Cria um formulario   --> 
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">    <!-- o enctype é necessário para upload de arquivo  -->
        
        @csrf          
        
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="description" placeholder="Descrição">
        <input type="file" name="photo">          <!-- Cria um input de arquivo  -->
        <button type="submit">Enviar</button>       
    </form>
@endsection