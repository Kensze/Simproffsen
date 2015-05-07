<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use View;

class PageController extends Controller {

  public function home()
  {

    return View::make('pages.home');
  }


  public function getProduct()
  {
    return view('pages.product');
  }


  public function checkout()
  {
    return view('pages.checkout');
  }

  public function confirm()
  {
    return view('pages.confirm');
  }

  public function footer()
  {
    return view('footer');
  }

    
}
