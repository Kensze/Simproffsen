<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use View;
use Cart;

class ProductController extends Controller {


  public function __construct() {
    // parent::__construct();
    $this->beforeFilter('csrf', array('on'=>'post'));
    // $this->beforeFilter('auth', array('only'=>array('getIndex', 'postAdd')));
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function getIndex()
  {
    $results = DB::table('Produkter')->get();

    return View::make('pages.product')->with('results', $results);
  }

  public function getView($id) {



    $results = DB::table('Produkter')
      ->Select('Produkter.Produkt_ID', 'Produkter.Namn' , 'Produkter.ArtNr' , 'Produkter.Pris' , 'Produkter.Beskrivning' , 'Produkter.Bild' , 'Produkter.Vikt' , 'FinnsI.Antal' , 'Storlekar.Storlek' , 'Farger.Farg')
      ->join('FinnsI', 'FinnsI.Produkter_Produkt_ID', '=', 'Produkter.Produkt_ID')
      ->join('Storlekar', 'Storlekar.Storlek_ID', '=', 'FinnsI.Storlekar_Storlek_ID')
      ->join('Farger', 'Farger.Farg_ID', '=', 'FinnsI.Farger_Farg_ID')
      ->where('Produkter.Produkt_ID', '=' , $id)
      ->get();




    return View::make('pages.product')
                      ->with('results', $results);
  }

  public function postAdd(){

    $id = \Input::get('id');
    $newQuantity = \Input::get('quantity');
    $size = \Input::get('Storlek');
    $color = \Input::get('Farg');
    $productNamn = \Input::get('Namn');
    $productPris = \Input::get('Pris');
    $base = \Input::get('base');
    $img = DB::table('Produkter')->where('Produkt_ID', $id)->pluck('Bild');

    $results = DB::table('Produkter')
      ->Select('Produkter.Produkt_ID', 'Produkter.Namn' , 'Produkter.ArtNr' , 'Produkter.Pris' , 'Produkter.Beskrivning' , 'Produkter.Bild' , 'Produkter.Vikt' , 'FinnsI.Antal' , 'Storlekar.Storlek' , 'Farger.Farg')
      ->join('FinnsI', 'FinnsI.Produkter_Produkt_ID', '=', 'Produkter.Produkt_ID')
      ->join('Storlekar', 'Storlekar.Storlek_ID', '=', 'FinnsI.Storlekar_Storlek_ID')
      ->join('Farger', 'Farger.Farg_ID', '=', 'FinnsI.Farger_Farg_ID')
      ->where('Produkter.Produkt_ID', '=' , $id)
      ->get();

    $sizes = array_fetch($results, 'Storlek');
    $colors = array_fetch($results, 'Farg');

    Cart::add($id, $productNamn, $newQuantity, $productPris, array('size' => $size, 'sizes' => $sizes, 'color' => $color, 'colors' => $colors, 'img' => $img));


    if($base == 'product')
      return \Redirect::to('/product/view/' .  $id);
    
  }


}
