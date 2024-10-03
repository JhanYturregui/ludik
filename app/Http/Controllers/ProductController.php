<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Product;

class ProductController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    date_default_timezone_set('America/Lima');
  }

  /**
   * Función para validar datos para registro o actualización
   * 
   * @param Array $data
   * @param int $id (null ? registrar : actualizar )
   * @return \Illuminate\Http\Response
   */
  public function validateData($data, $id) {
    $response = array();

    if ($id) {
      if (!Product::find($id)) {
        $response = ['status' => false, 'message' => 'El registro no existe.'];
        return $response;
      }
    }

    $rules = ['name' => 'bail|required|max:150', 'description' => 'bail|required|max:256'];

    $messages = [
      'name.required'  => 'El campo NOMBRE es obligatorio.',
      'name.max'       => 'El campo NOMBRE puede tener máximo 150 caracteres.',
      'description.required'  => 'El campo DESCRIPCIÓN es obligatorio.',
      'description.max'       => 'El campo DESCRIPCIÓN puede tener máximo 256 caracteres.',
    ];

    $validator = Validator::make($data, $rules, $messages);  
    if ($validator->fails()) {
      $response = ['status' => false, 'message' => $validator->messages()->first()];
    } else {
      $response = ['status' => true];
    }

    return $response;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    $products = Product::all();

    return view('products.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    return view('products.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    $data = array();
    $data['name'] = mb_strtoupper($request->input('name'));
    $data['description'] = mb_strtoupper($request->input('description'));
    $data['price'] = $request->input('price');
    $data['stock'] = $request->input('stock');

    $response = $this->validateData($data, null);
    if (!$response['status']) return json_encode($response);

    try {
      Product::create($data);

      $response = [
        'status' => true,
        'message' => 'Registro correcto.'
      ];

    } catch (Exception $e) {
      $response = ['status' => false, 'message' => $e->getMessage()];
    }

    return json_encode($response);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  id
   * @return \Illuminate\Http\Response
   */
  public function edit($id) {
    $data = Product::find($id);
    return view('products.edit', compact('data'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request){
    $id = intval($request->input('id'));
    $data = array();
    $data['name'] = mb_strtoupper($request->input('name'));
    $data['description'] = mb_strtoupper($request->input('description'));
    $data['price'] = $request->input('price');
    $data['stock'] = $request->input('stock');

    $response = $this->validateData($data, $id);
    if (!$response['status']) return json_encode($response);

    try {
      $dato = Product::find($id);
      $dato->update($data);
      $response = ['status' => true, 'message' => 'Actualización correcta.'];

    } catch (Exception $e) {
      $response = ['status' => false, 'message' => $e->getMessage()];
    }

    return json_encode($response);
  }

  /**
  * Remove the specified resource
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function delete(Request $request) {
    $id = $request->input('id');
    $response = array();

    try {
      $dato = Product::findOrFail($id);
      $dato->delete();

      $response = ['status' => true, 'message' => 'Eliminación correcta.'];

    } catch (Exception $e) {
      $response = ['status' => false, 'message' => $e->getMessage()];
    }
    return json_encode($response);
  }
}
