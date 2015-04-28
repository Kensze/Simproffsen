<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use View;

class PageController extends Controller {

  public function home()
  {
    $results = DB::table('Produkter')->get();

    return View::make('pages.home')->with('results', $results);
  }


  public function product()
  {
    return view('pages.product');
  }
}
