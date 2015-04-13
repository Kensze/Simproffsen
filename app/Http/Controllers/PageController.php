<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	public function home()
	{

		return view('pages.home');
	}
	public function product()
	{
		return view('pages.product');
	}
}
