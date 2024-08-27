<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('created_at', 'desc')->get();
        // dd($movies);

        $title = 'Hapus Movie!';
        $text = "Apakah Anda Yakin Ingin Menghapus Movie Ini?";

        confirmDelete($title, $text);

        return view('dashboard.index', compact('movies'));
    }


    public function create()
    {
        return view('dashboard.create');
    }

    public function edit(Movie $movie)
    {
        // dd($movie);
        return view('dashboard.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $validate = $request->validate([
            'judul' => '',
            'genre' => '',
            'gambar' => 'image|file',
            'actor' => '',
            'sutradara' => '',
            'tahun' => '',
            'link_trailer' => '',
            'link_movie' => '',
            'rating' => '',
            'durasi' => '',
            'deskripsi' => '',
        ]);

        $gambar = $movie->gambar;

        if ($request->hasFile('gambar')) {
            if ($request->oldImage) {
                Storage::disk('public')->delete($request->oldImage);
            }
            $file = $request->file('gambar');
            $name = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/banner_film', $name); // menggunakan disk 'public'
            $gambar = 'banner_film/' . $name; // mengubah path untuk disimpan ke database
        }

        $validate['gambar'] = $gambar;

        $movie->update($validate);

        return redirect('/dashboard/movie')->with('toast_success', "Data Film Berhasil Di Update!");
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => '',
            'genre' => '',
            'gambar' => 'file',
            'actor' => '',
            'sutradara' => '',
            'tahun' => '',
            'link_trailer' => '',
            'link_movie' => '',
            'rating' => '',
            'durasi' => '',
            'deskripsi' => '',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $name = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/banner_film', $name); // menggunakan disk 'public'
            $gambar = 'banner_film/' . $name; // mengubah path untuk disimpan ke database
        }

        $validate['gambar'] = $gambar;

        // dd($validate);

        Movie::create($validate);

        return redirect('/dashboard/movie')->with('toast_success', "Data Film Berhasil Di Tambahkan!");;
    }

    public function destroy(Movie $movie)
    {

        $data = $movie->id;

        if ($movie->gambar) {
            Storage::disk('public')->delete($movie->gambar);
        }
        Movie::destroy($data);

        return redirect('/dashboard/movie')->with('toast_success', "Data Film Berhasil Di Hapus!");
    }
}
