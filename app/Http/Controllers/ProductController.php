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

	public function postAdd(){

     $id = \Input::get('id');
     $newQuantity = \Input::get('quantity');
     $newSize = \Input::get('Storlek');
     $productNamn = \Input::get('Namn');
     $productPris = \Input::get('Pris');

     Cart::add($id, $productNamn, $newQuantity, $productPris, array('size' => $newSize));

     

     // return \Redirect::to('/product');
  }


}
