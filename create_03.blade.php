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
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">    
        
        @csrf          
        
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">  <!-- O 'old' mantém o campo do formulário preenchido -->
        <input type="text" name="description" placeholder="Descrição:" value="{{ old('description') }}">
        <input type="file" name="photo">          <!-- Cria um input de arquivo  -->
        <button type="submit">Enviar</button>       
    </form>
@endsection