<?php namespace ViewComposers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider {
	public function register()
	{
		$this->app->view->composer('pages.incollapsed', 'ViewComposers');
	}
	
}
