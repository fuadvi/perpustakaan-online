<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id_books', 'id_users', 'status'
    ];

    protected $hiden = [];

    public function user()
    {
        return $this->hasMany(User::class, 'id_users', 'id');
    }

    public function book()
    {
        return $this->hasMany(Book::class, 'id_books', 'id');
    }
}
