<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('admin.kategori', compact('kategoris'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Kategori berhasil ditambahkan.',
                'kategori' => $kategori,
                'redirect' => route('kategori')
            ]);
        }

        return redirect(route('kategori'))->with('success', 'Kategori berhasil ditambahkan.');
    }
    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);

        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Kategori berhasil diupdate.',
                'kategori' => $kategori,
                'redirect' => route('kategori')
            ]);
        }

        return redirect(route('kategori'))->with('success', 'Kategori berhasil diupdate.');
    }
    public function delete($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect(route('kategori'))->with('success', 'Kategori berhasil dihapus.');
    }

}
