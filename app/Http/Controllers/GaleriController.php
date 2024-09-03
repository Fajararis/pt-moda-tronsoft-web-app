<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();

        return view('admin.galeri', compact('galeris'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ukuran maksimum 2MB
        ]);

        $file = $request->file('foto');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/galeri/', $filename);

        $galeri = new Galeri();
        $galeri->foto = $filename;
        $galeri->save();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Galeri Berhasil Ditambahkan',
                'galeri' => $galeri,
                'redirect' => route('galeri')
            ]);
        }

        return redirect(route('galeri'))->with('success', 'Galeri Berhasil Ditambahkan');
    }

    public function delete($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

        return redirect((route('galeri')))->with('success', 'Galeri Berhasil Dihapus');
    }
}
