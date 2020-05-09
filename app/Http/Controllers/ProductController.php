<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
  
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
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
        $request->validate([
            'brand' => 'required',
            'category' => 'required',
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'image' => 'required|file|image|max:1999',
        ]);

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }

        $product = new Product();
        $product->brand = $request->input('brand');
        $product->category = $request->input('category');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->image = $fileNameToStore;
        $product->save();
        
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id){

        $request->validate([
            'brand' => 'required',
            'category' => 'required',
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'image' => 'file|image|max:1999',
        ]);

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }

        $product = Product::find($id);
        $product->brand = $request->input('brand');
        $product->category = $request->input('category');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        if($request->hasFile('image')){
            $product->image = $fileNameToStore;
        }
        $product->save(); 

        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        if($product->image != 'noimage.jpg'){
            Storage::delete('public/images/'.$product->image);
        }
  
        return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}
