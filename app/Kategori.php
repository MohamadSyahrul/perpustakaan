<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategoris";
    protected $fillable =[
        'nama'
    ];

    public function book() {
        return $this->hasMany(Book::class, 'id_kategori');
    }
}
