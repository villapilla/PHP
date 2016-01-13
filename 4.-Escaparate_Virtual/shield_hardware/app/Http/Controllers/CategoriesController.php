<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Contracts\Auth\Guard;
use Symfony\Component\HttpFoundation\Response;
use View;

class CategoriesController extends Controller {

    
    
        public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $category = Category::findOrFail($id);
            $products = Product::where('category_id', '=', $id)->get();
            if( ! $this->auth->guest()) {
               foreach($products as $product) {
                    $product->discountPrice();
                }
            } else {
                $products = $products->filter(function($products)
                {
                    return ! $products->isOffer();
                });

            }
            return View::make('category.product', array('products' => $products, 'actualCategory' => $category));
            
	}

        public function sort($id, Request $request) {
            $order = $request->order;
            $category = Category::findOrFail($id);
            $products = Product::where('category_id', '=', $id);
            switch ($order) {
                case "1": $products = $products->orderByName()->get(); break;
                case "2": $products = $products->orderByName("DESC")->get(); break;
                case "3": $products = $products->orderByPrice('DESC')->get(); break;
                case "4": $products = $products->orderByPrice()->get(); break;
                default: $products = $products->get(); break;
            }
            if( ! $this->auth->guest()) {
               foreach($products as $product) {
                    $product->discountPrice();
                }
            } else {
                $products = $products->filter(function($products)
                {
                    return ! $products->isOffer();
                });
            }
            return View::make('category.product', array('products' => $products, 'actualCategory' => $category, 'selected' => $order));
        }
        
        
        public function search(Request $request) {
            $products = Product::where('name', 'like', '%' . $request->search . '%');
            if( ! $this->auth->guest()) {
               $products = $products
                        ->orderBy('offer', 'DESC')
                        ->take(15)
                        ->get();
               foreach($products as $product) {
                    $product->discountPrice();
                }
            } else {
                $products = $products
                        ->orderBy('offer', 'ASC')
                        ->take(15)
                        ->get()
                        ->filter(function($products)
                        {
                            return ! $products->isOffer();
                        });
            }
            return View::make('category.search', array('products' => $products));
        }
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
