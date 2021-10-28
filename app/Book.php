<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    protected $fillable =[
        'isbn',
        'judul',
        'nama_pengarang',
        'penerbit',
        'tahun',
        'jumlah',
        'sampul',
        'keterangan',
        'id_kategori',
        'id_raks'
    ];

    public function kategori() {
        return $this->hasOne(Kategori::class, 'id');
    }
    public function Rak() {
        return $this->hasOne(Rak::class, 'id');
    }
}
