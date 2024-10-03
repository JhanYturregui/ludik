let origin = '';
const RUTA_MODULO = 'products';

window.onload = function() {
  origin = window.location.origin;
}

function register() {
  const name = $('#name').val();
  const description = $('#description').val();
  const price = $('#price').val();
  const stock = $('#stock').val();
  
  if (price <= 0) {
    Swal.fire('Error!', 'Ingrese un número positivo', 'error');
    return;
  }
  if (stock <= 0) {
    Swal.fire('Error!', 'Ingrese un número positivo', 'error');
    return;
  }

  const data = {
    name,
    description,
    price,
    stock,
    _token: $('input[name=_token]').val(),
  };

  $.ajax({
    type: 'post',
    url: `register`,
    dataType: 'json',
    data,
    success: function(a){
      if (a.status) {
        Swal.fire({
          icon: "success",
          title: "Registro correcto",
          showConfirmButton: false,
        });
        location.replace(`${origin}/${RUTA_MODULO}`);

      } else {
        Swal.fire('Error!', a.message, 'error');
      }
    },
    error: function(e) {
      Swal.fire('Error!', e.message, 'error');
    },
  });
}

function update() {
  const id = $('#idDato').val();
  const name = $('#name').val();
  const description = $('#description').val();
  const price = $('#price').val();
  const stock = $('#stock').val();

  if (price <= 0) {
    Swal.fire('Error!', 'Ingrese un número positivo', 'error');
    return;
  }
  if (stock <= 0) {
    Swal.fire('Error!', 'Ingrese un número positivo', 'error');
    return;
  }

  const data = {
    id,
    name,
    description,
    price,
    stock,
    _token: $('input[name=_token]').val()
  };

  $.ajax({
    type: 'put',
    url: `../update`,
    dataType: 'json',
    data,
    success: function(a){
      if (a.status) {
        location.replace(origin + `/${RUTA_MODULO}`);

      }else {
        Swal.fire('Error!', a.message, 'error');
      }
    },
    error: function(e) {
      Swal.fire('Error!', e.message, 'error');
    }
  });
}

/* function modDelete(id) {
  $('#idDataDelete').val(id);
  $('#modalDelete').modal();
} */

function remove(id) {
  const data = {
    id,
    _token: $('input[name=_token]').val(),
  }
  $.ajax({
    type: 'delete',
    url: `../${RUTA_MODULO}/delete`,
    dataType: 'json',
    data,
    success: function(a){
      if (a.status) {
        location.reload();
      }
    },
    error: function(e) {
      Swal.fire('Error!', e.message, 'error');
    }
  })
}