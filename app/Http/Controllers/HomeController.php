<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Book::with(['kategori'])->where('status', 'Tersedia')
            ->latest()
            ->limit(5)
            ->get();

        return view('pages.homepage', [
            'items' => $items
        ]);
    }
}
