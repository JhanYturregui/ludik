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
        <div class="row">
          <div class="col-lg-8 offset-2">
            <div class="card">
              <!-- Card header -->
              <div class="card-header border-0">
                <div class="row">
                  <h4 class="mb-0">Editar Producto</h4>
                </div>
              </div>
              <div class="card-body">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" id="idDato" value="{{ $data->id }}">
                <div class="mb-3 row">
                  <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name"  value="{{ $data->name }}">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="description" class="col-sm-2 col-form-label">Descripción</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="description" value="{{ $data->description }}">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="price" class="col-sm-2 col-form-label">Precio</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="price" value="{{ $data->price }}">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="stock" class="col-sm-2 col-form-label">Cantidad</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="stock" value="{{ $data->stock }}">
                  </div>
                </div>
                <div class="mt-5 text-end">
                  <button class="btn btn-primary" onclick="update()">Actualizar</button>
                </div>
              </div>
          </div>
        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="{{ asset('js/product.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <body>
</html>