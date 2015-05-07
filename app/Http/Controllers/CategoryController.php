<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use View;
use Cart;

class CategoryController extends Controller {

  

	public function getSimkladerd() {

    $results = DB::table('Produkter')->where('Kategori_id', 1)->get();

    return View::make('pages.category')->with('results', $results);


  }

  public function getSimtraningd() {

    $results = DB::table('Produkter')->where('Kategori_id', 2)->get();

    return View::make('pages.category')->with('results', $results);


  }

  public function getSimutrustningd() {

    $results = DB::table('Produkter')->where('Kategori_id', 3)->get();

    return View::make('pages.category')->with('results', $results);


  }

  public function getVatdrakterd() {

    $results = DB::table('Produkter')->where('Kategori_id', 4)->get();

    return View::make('pages.category')->with('results', $results);


  }

  public function getTriathlonkladerd() {

    $results = DB::table('Produkter')->where('Kategori_id', 5)->get();

    return View::make('pages.category')->with('results', $results);


  }

  public function getSimkladerh() {

    $results = DB::table('Produkter')->where('Kategori_id', 6)->get();

    return View::make('pages.category')->with('results', $results);


  }

  public function getSimtraningh() {

    $results = DB::table('Produkter')->where('Kategori_id', 7)->get();

    return View::make('pages.category')->with('results', $results);


  }

  public function getSimutrustningh() {

    $results = DB::table('Produkter')->where('Kategori_id', 8)->get();

    return View::make('pages.category')->with('results', $results);


  }

  public function getVatdrakterh() {

    $results = DB::table('Produkter')->where('Kategori_id', 9)->get();

    return View::make('pages.category')->with('results', $results);


  }

  public function getTriathlonkladerh() {

    $results = DB::table('Produkter')->where('Kategori_id', 10)->get();

    return View::make('pages.category')->with('results', $results);


  }

  public function getStorlekorca() {

    return View::make('pages.sizeTable');


  }

   public function getStorleksailfish() {

    return View::make('pages.sizeTable');


  }

   public function getStorlekovrigt() {

    return View::make('pages.sizeTable');


  }

}
