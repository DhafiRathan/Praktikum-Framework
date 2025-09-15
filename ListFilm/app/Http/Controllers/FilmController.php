<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $film = Film::all();
        return view('film', compact('film'));
    }

    public function create(){
        return view('tambah-film');
    }

    public function store(Request $request){
        $validasiData = $request->validate([
            'judul' => 'required|max:255',
            'sutradara' => 'required|max:255',
            'genre' => 'required|max:255',
            'tahun_rilis' => 'required|integer|min:1900|max:2030',
            'status' => 'required|in:watched,planning,watching',
        ]);

        Film::create($validasiData);
        return redirect('film');
    }
}