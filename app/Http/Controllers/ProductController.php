<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Renderable
    {
        $categories = Category::all();
        return view('manager.products', compact('categories'));
    }


    public function productDetails($id): Renderable
    {
        $product = Product::findOrFail($id);
        return view('user.product-details', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
        ]);

        // Create a new product instance
        $product = new Product();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->quantity = $validatedData['quantity'];
        $product->category_id = $validatedData['category_id'];

        // Handle the cover image upload
        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image');
            $imageName = $coverImage->getClientOriginalName(); // Get the original image name
            $imagePath = $coverImage->storeAs('public/cover_images', $imageName); // Store the image with the original name
            $product->cover_image = $imageName; // Save only the image name in the database
        }

        // Save the product
        $product->save();

        // Redirect or perform any other actions as needed
        return redirect()->back()->with('success', 'Product added.');
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


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('manager.edit-product', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
        ]);

        // Fetch & Update selected product
        $product = Product::findOrFail($id);
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->quantity = $validatedData['quantity'];
        $product->category_id = $validatedData['category_id'];

        // Handle the cover image upload
        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image');
            $imageName = $coverImage->getClientOriginalName(); // Get the original image name
            $imagePath = $coverImage->storeAs('public/cover_images', $imageName); // Store the image with the original name

            // Delete the previous cover image if it exists
            if ($product->cover_image) {
                Storage::delete('public/cover_images/' . $product->cover_image);
            }

            $product->cover_image = $imageName; // Save only the image name in the database
        }

        // Save the product
        $product->save();

        // Redirect or perform any other actions as needed
        return redirect()->back()->with('success', 'Product updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Product deleted.');
    }
}