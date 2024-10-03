<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

      <div class="container text-center p-5">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="row">
          <div class="col">
            <div class="card">
              <!-- Card header -->
              <div class="card-header border-0">
                <div class="row">
                  <h3 class="mb-0 col-8">{{ __('Listado de Productos') }}</h3>
                  <div class="col-4 text-right">
                    <a href="{{ route('products_create') }}" class="btn btn-primary botones-expand">
                      <i class="fas fa-plus mr-2"></i>{{ 'Agregar' }}</a>
                  </div>
                </div>
              </div>
      
              <div class="table-responsive p-4">
                <table id="tablaPrincipal" class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col" class="sort" data-sort="name">ID</th>
                      <th scope="col" class="sort" data-sort="name">Nombre</th>
                      <th scope="col" class="sort" data-sort="name">Descripción</th>
                      <th scope="col" class="sort" data-sort="name">Precio</th>
                      <th scope="col" class="sort" data-sort="name">Stock</th>
                      <th scope="col" class="sort" data-sort="name">Fecha creación</th>
                      <th scope="col" class="sort" data-sort="name">Fecha actualización</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    @forelse ($products as $product)
                    <tr>
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->description }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->stock }}</td>
                      <td>{{ $product->created_at }}</td>
                      <td>{{ $product->updated_at }}</td>
                      <td><a class="btn btn-sm btn-success" href="{{ route('products_edit', $product->id) }}">Editar</a></td>
                      <td><button class="btn btn-sm btn-danger" onclick="remove({{ $product->id }})">Eliminar</button></td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="7" style="color: red">No hay datos</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="{{ asset('js/product.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>

  