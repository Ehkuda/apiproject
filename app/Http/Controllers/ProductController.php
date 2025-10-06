<?php
 
namespace App\Http\Controllers;
 
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'status' => 'true',
            'products' => $products,
 
        ]);
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->all());
 
        return response()->json([ 'status' => true,
        'message' => "Product Created succesfully!", 'product' => $product], 200);
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
 