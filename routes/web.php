<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Method untuk menampilkan halaman index
    public function index()
    {
        // Ambil semua data posts dari database
        $posts = Post::all();

        // Tampilkan halaman index.blade.php dan lewatkan data posts ke dalam view
        return view('posts.index', compact('posts'));
    }

    // Metode lain seperti store(), create(), edit(), update(), dan destroy() tetap tidak berubah
}
