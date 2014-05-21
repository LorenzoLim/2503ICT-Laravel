<?php

class ProductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    $products = Product::all();
    return View::make('products.index', compact('products'));
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
     $input = Input::all();
     $v = Validator::make($input, Product::$rules);
     if ($v->passes())
     {
       $product = new Product;
       $product->name = $input['name'];
       $product->price = $input['price'];
       $product->save();
       return Redirect::action('ProductController@show',array($product->id));
     }
     else
     {
       return Redirect::action('ProductController@create')->withErrors($v);
     }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
    $product = Product::find($id);
     return View::make('products.show', compact('product'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::find($id);
     return View::make('products.edit', compact('product'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$product = Product::find($id);
    $input = Input::all();
    $v = Validator::make($input, Product::$rules);
    if($v->passes())
    {
      $product->name = $input['name'];
      $product->price = $input['price'];
      $product->save();
      return Redirect::route('product.show', $product->id);
    }
    else
    {
      return Redirect::action('ProductController@edit')->withErrors($v);  
    }
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
