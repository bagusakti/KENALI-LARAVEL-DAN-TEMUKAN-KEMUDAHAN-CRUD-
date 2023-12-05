<?php

namespace App\Http\Controllers;

use App\Models\tabel;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        return view('index', [
            'tabel' => tabel::All(),
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "nama" => "required",
            "kelas" => "required",
            "aksi" => "required",
        ]);

        tabel::create($validated);
        return redirect()->route('home');
    } 

    public function edit($id) {
        return view('edit', [
            'user' => tabel::find($id),
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'aksi' => 'required',
        ]);

        tabel::where('id', $id)->update([
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'aksi' => $request->input('aksi'),
        ]);

        return redirect('index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id) {
        tabel::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
