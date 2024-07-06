<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){

        $query = $request->input('search');
        $data = User::where('name', 'LIKE', "%{$query}%")
                    ->orWhere('email', 'LIKE', "%{$query}%")
                    ->orWhere('city', 'LIKE', "%{$query}%")
                    ->paginate(10);


        return view('crud.index', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'city' => 'required',
        ]);

        User::create($request->all());
        return redirect()->route('tugas')->with('success', 'Berhasil Menambahkan Tamu.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'city' => 'required',
        ]);

        User::where('id', $id)->update(['name' => $request->name, 'email' => $request->email, 'city' => $request->city]);
        return redirect()->route('tugas')->with('success', 'Berhasil Merubah Tamu.');
    }

    public function delete($id){
        User::destroy($id);
        return redirect()->route('tugas')->with('success', 'Berhasil Menhapus Tamu.');
    }
}
