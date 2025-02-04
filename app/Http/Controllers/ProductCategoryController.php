<?php

namespace App\Http\Controllers;

use App\Models\product_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_categories = product_category::all();
        return view('dashboard',['product_categories'=>$product_categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addProductForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'category_title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif|max:2048'
        ]);

        if($validator->fails()){
             return response()->json($validator->errors(), 422);
        }

        $image = $request->file('image');
        $path = 'images/' . $image->getClientOriginalName();
        $image->move(public_path('images'), $image->getClientOriginalName());

        $validatedData = $validator->validated();
        $validatedData['image'] = $path;

        product_category::create($validatedData);
        return redirect()->route('product-category.create')->with('success',"Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(product_category $product_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product_category $product_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product_category $product_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product_category $product_category)
    {
        //
    }
}
