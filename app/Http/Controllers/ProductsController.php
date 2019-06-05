<?php

namespace App\Http\Controllers;

use App\products;
use App\categories;
use App\subsidiaries;
use App\companies;
use Illuminate\Http\Request;
use Validator;
use Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $products = Products::Search($request->product_name)->get();

        $products->each(function($products){
            $products ->category;
            $products ->subsidiary;
        });

        $controller = new Controller;

        $error = $controller->hasInput($products);

        if ($error){
            return view('results', array('product_search' => $products))->with('error', $error);
        }
        else{
            return view('results')->with('error', $error);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_index = $request->category_id - 1;

        $categories = categories::all();

        $id = $categories[$category_index]->id;

        $request['category_id'] = $id;

        $subsidiary_index = $request->subsidiary_id - 1;

        $company = new companies;

        $subsidiaries = $company->getSubsidiaries();

        $id = $subsidiaries[$subsidiary_index]->id;

        $request['subsidiary_id'] = $id;

        $products = new products($request->all());

        $products->save();

        return redirect()->route('my_products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        $user = Auth::user();

        $products = products::select('products.*')
        ->join('subsidiaries', 'subsidiaries.id', '=', 'products.subsidiary_id')
        ->join('companies', 'companies.id', '=', 'subsidiaries.company_id')
        ->join('users', 'users.id', '=', 'companies.user_id')
        ->where('users.id', $user['id'])
        ->get();

        $products->each(function($products){
            $products ->category;
            $products ->subsidiary;
        });

        $controller = new Controller;

        $error = $controller->hasInput($products);

        if ($error){
            return view('show_products', array('products' => $products))->with('error', $error);
        }
        else{
            return view('show_products')->with('error', $error);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }

    public function selected(Request $request)
    {
        $product= products::where('id', $request->product_id)->get()->first();

        $product ->category;
        $product ->subsidiary;

        return view ('product_selected', array('product' => $product));
    }

    public function new(){
        $company = new companies;

        $subsidiaries = $company->getSubsidiaries();

        $categories = categories::all();

        return view ('new_product', array('subsidiaries' => $subsidiaries), array('categories' => $categories));
    }
}
