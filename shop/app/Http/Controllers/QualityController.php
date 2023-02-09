<?php

namespace App\Http\Controllers;

use App\Models\Quality;
use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function index(){
        $quality = Quality::latest()->get();
        return view('backend.quality.index', compact('quality'));
    }
    public function create(){
        return view('backend.quality.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:qualities|max:255',
        ]);
        $quality = new Quality();
        $quality->name = $request->name;
        $quality->save();
        return redirect()->to(route('quality'));
    }
    public function edit($id){
        $quality = Quality::find($id);
        return view('backend.quality.edit', compact('quality'));
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $quality = Quality::find($id);
        $quality->name = $request->name;
        $quality->status = $request->status;
        $quality->save();
        return redirect()->to(route('quality'));
    }
    public function delete($id){
        Quality::destroy($id);
        return redirect()->back();
    }
}
