@extends('admin.layouts.app') <!-- Caminho do path de onde será extendido  -->

@section('title',"Detalhes do Produto {$product->name}")
    


@section('content')
   
<h1>Produto {{ $product->name }} <a href="{{ route('products.index') }}"><<</a></h1>


<ul>
    <li><strong>Nome: </strong>{{ $product->name }}</li>
    <li><strong>Preço: </strong>{{ $product->price }}</li>
    <li><strong>Descrição: </strong>{{ $product->description }}</li>
</ul>
@endsection        







