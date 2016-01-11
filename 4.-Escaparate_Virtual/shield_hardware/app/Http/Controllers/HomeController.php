<?php namespace App\Http\Controllers;

use App\Product;
use Symfony\Component\HttpFoundation\Response;
use View;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
                $this->middleware('auth');
		$this->middleware('confirmed');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
                $products = Product::where('offer', '=', '1')->paginate(9);
                foreach($products as $product) {
                    $product->discountPrice();
                }
                return View::make('home', array('products' => $products));
	}

}
