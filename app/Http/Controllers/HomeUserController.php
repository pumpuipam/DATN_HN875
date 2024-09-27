<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        // Lấy tối đa 10 sản phẩm từ bảng products
        $products = Product::latest()->take(10)->get();


        // Trả về view và truyền danh sách sản phẩm
        return view('clients.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $products = Product::findOrFail($id);

        return view('clients.single_product', compact('products'));
    }

    /**
     * Display the specified resource.
     */

    //  Chi tiết sản phẩm

    public function show(string $id)
    {
        $products = Product::findOrFail($id);

        return view('clients.single_product', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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