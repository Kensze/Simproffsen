<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Cart;
use View;
use DB;

class CartController extends Controller {

  public function __construct() {
    // parent::__construct();
    $this->beforeFilter('csrf', array('on'=>'post'));
    // $this->beforeFilter('auth', array('only'=>array('getIndex', 'postUpdate')));
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function getIndex()
  {
    // Cart::add('192ao12', 'Product 1', 1, 9.99);
    // Cart::add('1239ad0', 'Product 2', 2, 5.95, array('size' => 'large'));

    //  $cart = Cart::content();


    //  return View::make('app')->with('cart', $cart);

    $cart = Cart::content();
    // $cart = \Session::get('cart');



    // return View::make('app')->with('cart', $cart);
    return View::make('app', array('cart' => $cart));
  }


  public function postUpdate(){
    $id = \Input::get('id');
    $newQuantity = \Input::get('quantity');


    Cart::update($id, $newQuantity);

    return \Redirect::to('/');
  }

  public function postDelete(){
    $id = \Input::get('id');

    Cart::remove($id);

    return \Redirect::to('/cart');
  }

  public function getDestroy(){
    Cart::destroy();

    return \Redirect::to('/cart');
  }
}
