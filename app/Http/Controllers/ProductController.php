<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // API fake de produtos blz...
        $products =  [
            ['id' => 1, 'name' => 'camiseta', 'valor' => 33.30, 'categoria' => 'vestuário', 'marca' => 'Nike', 'qtd_estoque' => 200],
            ['id' => 2, 'name' => 'camiseta rock', 'valor' => 55.25, 'categoria' => 'vestuário', 'marca' => 'gucci', 'qtd_estoque' => 200]
        ];

        // Array da lista dos produtos
        $productList = array_column($products, 'name');

        return view('ListaProdutos', compact('products', 'productList'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
