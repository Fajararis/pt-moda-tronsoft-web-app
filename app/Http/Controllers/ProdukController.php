<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $produks = Produk::query();

        if ($keyword) {
            $produks->where('nama', 'like', "%$keyword%");
        }

        $produks = $produks->get();
        $kategori = Kategori::all();

        return view('admin.produk', ['produks' => $produks], ['kategoris' => $kategori]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'id_kategori' => 'required|exists:kategori,id'
        ]);

        $file = $request->file('foto');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/produk/', $filename);

        $produk = new Produk();
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->foto = $filename;
        $produk->id_kategori = $request->id_kategori;
        $produk->save();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'produk' => $produk,
                'message' => 'Produk berhasil ditambahkan.',
                'redirect' => route('produk')
            ]);
        }

        return redirect(route('produk'))->with('success', 'Produk berhasil ditambahkan.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'id_kategori' => 'required|exists:kategori,id'
        ]);

        $produk = Produk::findOrFail($id);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/produk/', $filename);
            $produk->foto = $filename;
        }

        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->id_kategori = $request->id_kategori;
        $produk->save();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'produk' => $produk,
                'message' => 'Produk berhasil diupdate.',
                'redirect' => route('produk')
            ]);
        }

        return redirect(route('produk'))->with('success', 'Produk berhasil diupdate.');
    }

    public function delete($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect(route('produk'))->with('success', 'Produk berhasil dihapus.');
    }
}
