<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'jenis_kategoris'
    ];

    protected $hiden = [];

    public function books()
    {
        return $this->hasMany(Book::class, 'id_kategoris', 'id');
    }
}
