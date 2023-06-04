<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSale;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : Renderable
    {
        $productsOnSale = Product::has('productSale')->count();
        return view('manager.sales', compact('productsOnSale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required',
            'sale_price' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
    
        $productSale = ProductSale::where('product_id', $validatedData['product_id'])->first();
    
        if ($productSale) {
            $productSale->delete();
        }
    
        ProductSale::create([
            'product_id' => $validatedData['product_id'],
            'sale_price' => $validatedData['sale_price'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
        ]);
    
        return redirect()->back()->with('success', 'Sale added to product.');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        ProductSale::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Sale deleted.');
    }
}
