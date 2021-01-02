<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id_kategoris', 'slug', 'pengarang', 'penerbit', 'konten_digital', 'status', 'materi'
    ];

    protected $hiden = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategoris', 'id');
    }
}
