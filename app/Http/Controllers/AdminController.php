<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Produk;
use App\Models\Galeri;
class AdminController extends Controller
{

    public function dashboard()
    {
        $totalProduk = Produk::count();
        $totalGaleri = Galeri::count();
        $totalBanner = Banner::count();
        return view('admin.index', compact('totalProduk', 'totalGaleri', 'totalBanner'));
    }
    public function uploadBanner(Request $request)
    {
        // Validasi input
        $request->validate([
            'foto1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ukuran maksimum 2MB
            'foto2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ukuran maksimum 2MB
        ]);
    
        // Mengunggah foto1 baru
        $file1 = $request->file('foto1');
        $filename1 = time() . '_1.' . $file1->getClientOriginalExtension();
        $file1->move('uploads/banner/', $filename1);
    
        // Mengunggah foto2 baru
        $file2 = $request->file('foto2');
        $filename2 = time() . '_2.' . $file2->getClientOriginalExtension();
        $file2->move('uploads/banner/', $filename2);
    
        // Menghapus foto1 dan foto2 lama (jika ada)
        $banner = Banner::first();
        if ($banner) {
            if (file_exists(public_path('uploads/banner/' . $banner->foto1))) {
                unlink(public_path('uploads/banner/' . $banner->foto1));
            }
            if (file_exists(public_path('uploads/banner/' . $banner->foto2))) {
                unlink(public_path('uploads/banner/' . $banner->foto2));
            }
        }
    
        // Membuat dan menyimpan banner baru
        if (!$banner) {
            $banner = new Banner();
        }
        $banner->foto1 = $filename1;
        $banner->foto2 = $filename2;
        $banner->save();
    
        return redirect(route('Dashboard'))->with('success', 'Banner berhasil diupload.');
    }
    

}
