<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class DaftarbukController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Book::with(['kategori'])
            ->latest()
            ->get();

        return view('pages.book', [
            'items' => $items
        ]);
    }
}
