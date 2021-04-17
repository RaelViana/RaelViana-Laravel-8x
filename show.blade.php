@extends('admin.layouts.app') <!-- Caminho do path de onde será extendido  -->

@section('title',"Detalhes do Produto {$product->name}")
    


@section('content')
   
<h1>Produto {{ $product->name }} <a href="{{ route('products.index') }}"><<</a></h1>


<ul>
    <li><strong>Nome: </strong>{{ $product->name }}</li>
    <li><strong>Preço: </strong>{{ $product->price }}</li>
    <li><strong>Descrição: </strong>{{ $product->description }}</li>
</ul>

<!-- formulario para exclusão do produto  -->
<form action="{{ route('products.destroy', $product->id) }}" method="POST">
    @csrf   <!-- diretiva para validação de requisição  -->
    @method('DELETE') <!-- diretiva especifica o tipo de validação de requisição htpp -->
    <button type="submit" class="btn btn-danger">Deletar o produto: {{ $product->name }}</button>
</form>

@endsection        







