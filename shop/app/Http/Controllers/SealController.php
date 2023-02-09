<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Quality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SealController extends Controller
{
    public function index(){
        $product = Product::latest()->get();
        // dd($product);
        return view('backend.sales.index', compact('product'));
    }
    public function create(){
        $quality = Quality::latest()->get();
        return view('backend.sales.create', compact('quality'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $product = new Product();
        $product->quality_id = $request->quality_id;
        $product->name = $request->name;
        $product->qty = $request->qty;
        $product->size = $request->size;
        $product->price = $request->price;
        $product->total_price = $request->price * $request->qty;
        $product->created_by = Auth::user()->id;
        $product->save();
        return redirect()->to(route('product'));
    }
    public function edit($id){
        $quality = Quality::latest()->get();
        $product = Product::find($id);
        return view('backend.sales.edit', compact('product','quality'));
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $product = Product::find($id);
        $product->quality_id = $request->quality_id;
        $product->name = $request->name;
        $product->qty = $request->qty;
        $product->size = $request->size;
        $product->price = $request->price;
        $product->total_price = $request->price * $request->qty;
        $product->updated_by = Auth::user()->id;
        $product->save();
        return redirect()->to(route('product'));
    }
    public function delete($id){
        Product::destroy($id);
        return redirect()->back();
    }
}
