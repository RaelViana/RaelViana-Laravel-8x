@extends('admin.layouts.app') <!-- Caminho do path de onde será extendido  -->

@section('title','Cadastrar Novo Produto')
    


@section('content')
    <h1>Cadastrar Novo Produto</h1>    

    @include('admin.alerts.alerts')

    <!-- Cria um formulario   --> 
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form">    
        
        @csrf          
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Nome" value="{{ old('name') }}">  <!-- O 'old' mantém o campo do formulário preenchido -->
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="price" placeholder="Preço" value="{{ old('price') }}">  <!-- O 'old' mantém o campo do formulário preenchido -->
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="description" placeholder="Descrição:" value="{{ old('description') }}">
        </div>

        <div class="form-group">
            <input class="form-control" type="file" name="image">          <!-- Cria um input de inserção de arquivos  -->
        </div>
        
        <div class="form-group">
            <button class="btn btn-success" type="submit">Enviar</button>     
        </div>
        
         
    </form>
@endsection