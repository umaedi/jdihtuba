<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function sejarah()
    {
        $data['title'] = 'Sejarah Singkat';
        return view('pages.sejarah', $data);
    }

    public function dasarhukum()
    {
        $data['title'] = 'Dasar Hukum';
        return view('pages.dasarhukum', $data);
    }

    public function visi()
    {
        $data['title'] = 'Visi Misi';
        return view('pages.visi', $data);
    }

    public function ikm()
    {
        $data['title'] = 'Indek Kepuasan Masyarakat';
        return view('pages.ikm', $data);
    }
}
