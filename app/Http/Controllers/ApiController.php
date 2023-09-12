<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function index()
    {
        $products = Product::get();
            return response()->json([
            "products" => $products
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string",
            "price" => "required|numeric",

        ]);
        $products = Product::create($data);
        return response()->json([
            "message" => "product has been added"
        ]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "price" => "required|numeric",
            "name" => "required|string"
        ]);
        $product = Product::findorFail($id)
            ->update($data);
        return response()->json([
            "message" => "product has been updated"
        ]);
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id)->delete();
        return response()->json([
            "message" => "product has been deleted"
        ]);
    }
}
