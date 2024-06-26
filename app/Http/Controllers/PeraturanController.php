<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class PeraturanController extends Controller
{
    public function index()
    {
        $data['title'] = 'Peraturan';
        $data['peraturan_terbaru'] = DB::table('document')->where('tipe_dokumen', 1)->where('is_publish', 1)->latest()->paginate(10);
        $data['tipe_dokumen'] = Cache::remember('tipe_dokumen', 360, function () {
            return DB::table('document_type')
            ->select('id', 'second_id', 'parent_id', 'name', 'singkatan', 'status', 'integrasi')
            ->get();
        }); 
        
        return view('peraturan.index', $data);
    }

    public function show($id)
    {
        $data['title'] = "Detail peraturan";
        $data['peraturan'] = DB::table('document')
        ->where('document.id', $id)
        ->where('document.is_publish', 1)
        ->leftJoin('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->leftJoin('data_subyek', 'document.id', '=', 'data_subyek.id_dokumen')
        ->select('document.*', 'data_lampiran.*', 'data_subyek.*')
        ->first();
    
        $data['doktahun'] = DB::table('document')->selectRaw('tahun_terbit, COUNT(*) as document_count')
        ->groupBy('tahun_terbit')
        ->orderBy('tahun_terbit')
        ->get();
        return view('peraturan.show', $data);
    }
}
