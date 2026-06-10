<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
        $search = request('search');

        $beritas = Berita::when($search, function ($query) use ($search) {

            $query->where('judul', 'like', "%{$search}%");

        })->latest()->paginate(6);

        return view('home', compact('beritas'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        return view('detail', compact('berita'));
    }
}