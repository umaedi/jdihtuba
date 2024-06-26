<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data['title'] = "Berita JDIH Tulang Bawang";
        $data['posts'] = Cache::remember('posts', 360, function () {
            return DB::table('berita')->where('status',1)->latest()->paginate(8);
        }); 
        return view('berita.index', $data);
    }

    public function show($id)
    {
        $data['title'] = "Detail berita";
        $data['berita'] = DB::table('berita')->where('status', 1)->where('id', $id)->first();
        $data['postsShow'] = Cache::remember('postsShow', 360, function () {
            return DB::table('berita')->where('status',1)->latest()->take(4)->get();
        }); 
        return view('berita.show', $data);
    }
}
