<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookRequest;
use App\Book;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Book::with(['kategori'])->get();

        return view('pages.admin.Book.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('pages.admin.book.create', [
            'kategoris' => $kategoris
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        // mengambil semua data dari form
        $data = $request->all();
        $data['materi'] = $request->file('materi')->store(
            'assets/file',
            'public'
        );

        // insert data ke database
        Book::create($data);

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Book::findOrFail($id);
        $status = Book::all();

        $kategoris = Kategori::all();
        return view('pages.admin.book.edit', [
            'item' => $item,
            'kategoris' => $kategoris,
            'status' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        // mengambil semua data dari form
        $data = $request->all();
        // membuat id berdasarkan nama
        $data['slug'] = Str::slug($request->slug);
        // simpan gambar ke dalam folder
        $data['materi'] = $request->file('materi')->store(
            'assets/file',
            'public'
        );
        $item = Book::findOrFail($id);

        // update data di database
        $item->update($data);

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Book::findOrfail($id);

        $item->delete();

        return redirect()->route('book.index');
    }
}
