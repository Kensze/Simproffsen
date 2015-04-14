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
    // Cart::add('192ao12', 'Product 1', 1, 9.99);
    // Cart::add('1239ad0', 'Product 2', 2, 5.95, array('size' => 'large'));

    $cart = Cart::content();


    return View::make('app')->with('cart', $cart);
  }


  public function update() {

    $id = \Input::get('id');


    /*
    if (Input::has('size')) {
      $newSize = Input::get('Size');
      Cart::update($idProduct, array('size'=>$newSize));
    }

    if (Input::has('quantity')) {
      $newQuantity = Input::get('quantity');
      Cart::update($idProduct, array('quantity'=>$newQuantity));
    }
     */

    $newQuantity = \Input::get('quantity');
    $newSize = \Input::get('size');
    cart::update($id, array('size' => $newSize, 'qty' => $newQuantity));

    return \Redirect::to('/');
  }
}
