<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        if($request->ajax()) {
            //
        }
        $data['title'] = 'JDIH Kabupaten Tulang Bawang';
        $data['peraturan'] = Cache::remember('peraturan', 360, function () {
            return DB::table('document')->where('tipe_dokumen', 1)->where('is_publish', 1)->count();
        });
        // $data['berita'] = DB::table('berita')->where('status', 1)->count();
        $data['berita'] = Cache::remember('berita', 360, function () {
            return DB::table('berita')->where('status', 1)->count();
        });
        $data['peraturan_terbaru'] = Cache::remember('peraturan_terbaru', 360, function () {
            return DB::table('document')
                ->where('tipe_dokumen', 1)
                ->where('is_publish', 1)
                ->latest()
                ->take(6)
                ->get();
        });
        $data['peraturan_populer'] = Cache::remember('peraturan_populer', 360, function () {
            return DB::table('document')->where('tipe_dokumen', 1)->where('is_publish', 1)->inRandomOrder()->latest()->take(6)->get();
        }); 
        $data['news'] = Cache::remember('news', 360, function () {
            return DB::table('berita')->where('status',1)->latest()->take(4)->get();
        }); 
        
        $doktahun = DB::table('document')->selectRaw('tahun_terbit, COUNT(*) as document_count')
        ->groupBy('tahun_terbit')
        ->orderBy('tahun_terbit')
        ->get();

        // Ubah data ke format yang diinginkan untuk chart
        $chartData = $doktahun->map(function ($item) {
            return [
                'x' => $item->tahun_terbit,
                'y' => $item->document_count,
            ];
        });

        $data['chartData'] = $chartData;
        return view('home', $data);
    }
}
