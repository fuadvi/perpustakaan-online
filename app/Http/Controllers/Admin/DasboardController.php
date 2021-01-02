<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Http\Controllers\Controller;
use App\Kategori;
use App\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dasboard', [
            'kategori' => Kategori::count(),
            'books' => Book::count(),
            'users' => User::count()
        ]);
    }
}
