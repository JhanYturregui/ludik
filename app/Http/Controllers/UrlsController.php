<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlsController extends Controller
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
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return view('urls');
  }
}
