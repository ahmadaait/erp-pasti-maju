<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = new Product();
        $products = $products->get();
        return view("pages.product.index", ['products' => $products]);
    }

    public function create()
    {
        return view("pages.product.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);

        $product = new Product();
        $product->code = $request->code;
        $product->name = $request->name;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('product.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages.product.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'code' => 'required',
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);

        $product = Product::find($id);
        $product->code = isset($request->code) ? $request->code : $product->code;
        $product->name = isset($request->name) ? $request->name : $product->name;
        $product->qty = isset($request->qty) ? $request->qty : $product->qty;
        $product->price = isset($request->price) ? $request->price : $product->price;
        $product->save();
        return redirect()->route('product.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Data berhasil dihapus');
    }
}