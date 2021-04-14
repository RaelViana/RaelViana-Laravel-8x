@extends('admin.layouts.app')  <!-- Caminho do path de onde será extendido  -->

@section('title', 'Admin')
    

<!-- Cria uma tabela de exibição Nome/Preço/Ações -->

@section('content')     
    <h1>Exibindo os Produtos</h1>
    <a href="{{ route('products.create') }}">Cadastrar</a>

    <hr>

    <table border="1">
       
        <thead>
            <tr>
                <th>Nome </th>
                <th>Preço</th>
                <th>Ações</th>  
            </tr>                     
        </thead> 
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>       
   
    </table>

   

@endsection    