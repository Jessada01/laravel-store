<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        if($products = Product::all()){
            return view('products.index')->with('productsView', $products);  ////////////
            
           
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prepareProduct = [
            'name' => $request->name,
            'price' => $request->price,
            'number' => $request->number, 
            'user_id' => Auth::id()
        ];

        $product = Product::create($prepareProduct);

        return redirect()->route('products.index'); ////////////////////
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $prepareProduct = [
            'name' => $request->name,
            'price' => $request->price,
            'number' => $request->number, 
            'user_id' => Auth::id()
        ];

        $productInst = Product::find($product->id);
        $productInst->update($prepareProduct);

        return redirect()->route('products.index'); ///////////////////
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {


        return 'ลบยัง';
        /*$productInst = Product::find($product->id);
        $productInst->delete();
        return view('products.index');
        ///return redirect()->route('products.index'); /////////////////*/
    }


    public function deletepro($id){

       

        $products = product::find($id);
        $products->delete();

        return redirect()->route('products.index');

    }

}
