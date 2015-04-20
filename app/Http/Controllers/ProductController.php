<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use View;
use Cart;

class ProductController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $results = DB::select('select * from Produkter where id=?', array(1));

    return View::make('pages.product')->with('results', $results);
  }

  public function add(){

     $id = \Input::get('id');
    // $newQuantity = \Input::get('quantity');
    // $newSize = \Input::get('Storlek');
    // $productNamn = \Input::get('Namn');
    // $productPris = \Input::get('Pris');






    // Cart::add(array($id, $productNamn, $newQuantity, $productPris, array('size' => $newSize));

    //Cart::add(array('id' => '1', 'name' => '1337 Byxor', 'qty' => 1, 'price' => 15, 'options' => array('size' => 'S')));

    Cart::add(array('id' => $id, 'name' => '1337 Byxor', 'qty' => 1, 'price' => 15, 'options' => array('size' => 'S')));

//    return \Redirect::to('/');
  }


}
