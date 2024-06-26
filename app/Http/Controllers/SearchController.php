<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if($request->jenis) {
            $data['documents'] = DB::table('document')->where('tipe_dokumen', $request->jenis)->where('is_publish', 1)->paginate();
        }elseif($request->tahun) {
            $data['documents'] = DB::table('document')->where('tahun_terbit', $request->tahun)->where('is_publish', 1)->paginate();
        }else {
        $data['documents'] = DB::table('document')
        ->where(function($query) use ($request) {
            $query->where('judul', 'like', '%' . $request->judul . '%')
                ->orWhere('nomor_peraturan', $request->nomor_peraturan)
                ->orWhere('tahun_terbit', $request->tahun_terbit);
        })
        ->where('tipe_dokumen', $request->tipe_dokumen ?? 1)
        ->where('status', $request->status ?? 'Berlaku')
        ->where('is_publish', 1)
        ->paginate();
        }

        $data['tipe_dokumen'] = Cache::remember('tipe_dokumen', 360, function () {
            return DB::table('document_type')
            ->select('id', 'second_id', 'parent_id', 'name', 'singkatan', 'status', 'integrasi')
            ->get();
        }); 

        $data['title'] = "Hasil pencarian";
        return view('search.index', $data);
    }
}
