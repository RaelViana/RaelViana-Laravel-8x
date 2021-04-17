
     @include('admin.alerts.alerts')

        @csrf          
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Nome" value="{{ $product->name ?? old('name') }}">  <!-- O 'old' mantém o campo do formulário preenchido -->
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="price" placeholder="Preço" value="{{ $product->price ?? old('price') }}">  <!-- O 'old' mantém o campo do formulário preenchido -->
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="description" placeholder="Descrição:" value="{{ $product->description ?? old('description') }}">
        </div>

        <div class="form-group">
            <input class="form-control" type="file" name="image">          <!-- Cria um input de inserção de arquivos  -->
        </div>
        
        <div class="form-group">
            <button class="btn btn-success" type="submit">Enviar</button>     
        </div>
        