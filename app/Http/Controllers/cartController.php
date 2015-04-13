<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Cart;
use View;

class cartController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    Cart::add('192ao12', 'Product 1', 1, 9.99);
    Cart::add('1239ad0', 'Product 2', 2, 5.95, array('size' => 'large'));

    $cart = Cart::content();


    return view('cart');
  }
}