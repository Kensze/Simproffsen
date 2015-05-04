<?php namespace Vendor\Cart\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class CartComposer {

  View::creator('app', function($view)
  {
      $view->with('cart', Cart::content() );
  });

}