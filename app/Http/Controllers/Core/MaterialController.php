<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $materials = new Material();
        $materials = $materials->get();
        return view("pages.material.index", ['materials' => $materials]);
    }

    public function create()
    {
        return view("pages.material.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);

        $material = new Material();
        $material->code = $request->code;
        $material->name = $request->name;
        $material->qty = $request->qty;
        $material->price = $request->price;
        $material->save();
        return redirect()->route('material.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $material = Material::find($id);
        return view('pages.material.edit', ['material' => $material]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'code' => 'required',
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);

        $material = Material::find($id);
        $material->code = isset($request->code) ? $request->code : $material->code;
        $material->name = isset($request->name) ? $request->name : $material->name;
        $material->qty = isset($request->qty) ? $request->qty : $material->qty;
        $material->price = isset($request->price) ? $request->price : $material->price;
        $material->save();
        return redirect()->route('material.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $material = Material::find($id);
        $material->delete();
        return redirect()->route('material.index')->with('message', 'Data berhasil dihapus');
    }
}