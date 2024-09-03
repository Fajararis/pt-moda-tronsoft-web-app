<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Produk;
use App\Models\Galeri;
use App\Models\Kategori;

class UserController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        $produks = Produk::all();
        $galeris = Galeri::all();
        return view('index', compact('banner', 'produks', 'galeris'));
    }

    public function product(Request $request)
    {
        $keyword = $request->input('keyword');

        $produks = Produk::when($request->kategori, function ($query) use ($request) {
            return $query->where('id_kategori', $request->kategori);
        })
            ->when($keyword, function ($query) use ($keyword) {
                return $query->where('nama', 'like', '%' . $keyword . '%');
            })
            ->get();

        $kategoris = Kategori::all();

        return view('product', compact('produks', 'kategoris'));
    }

    public function about()
    {
        $banner = Banner::first();
        $produks = Produk::all();
        $galeris = Galeri::all();
        return view('about', compact('banner', 'produks', 'galeris'));
    }

}
