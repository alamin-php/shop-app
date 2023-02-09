<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::latest()->get();
        return view('backend.user.index', compact('users'));
    }
    public function create(){
        return view('backend.user.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->to(route('user'));
    }
    public function edit($id){
        $user = User::find($id);
        return view('backend.user.edit', compact('user'));
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();
        return redirect()->to(route('user'));
    }
    public function delete($id){
        User::destroy($id);
        return redirect()->back();
    }
}
