<?php

namespace App\Http\Controllers;
use App\Models\Buah;
use App\Models\Pemesanan;
use App\Models\Pengiriman;
use App\Models\Outlet;
use App\Models\JadwalPengiriman;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{
    $pemesanan = Pemesanan::count();
    $jadwal = JadwalPengiriman::count();
    $outlet = Outlet::count();
    $totalPengiriman = Pengiriman::count();

    // Menghitung jumlah pengiriman yang berhasil (status_pengiriman = 'Berhasil')
    $pengirimanBerhasil = Pengiriman::where('status_pengiriman', 'Berhasil')->count();

    // Menghitung jumlah pengiriman yang gagal (status_pengiriman = 'Gagal')
    $pengirimanGagal = Pengiriman::where('status_pengiriman', 'Gagal')->count();

    $buah = Buah::count();

    return view('home', compact('buah','jadwal', 'outlet', 'pemesanan', 'totalPengiriman', 'pengirimanBerhasil', 'pengirimanGagal'));
}

}
