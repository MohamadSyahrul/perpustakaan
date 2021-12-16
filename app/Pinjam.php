<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table = "pinjam";
    protected $fillable =[
        'pinjam',
        'id_user',
        'buku',
        'status',
        'tgl_pinjam',
        'lama_pinjam'
    ];

    public function anggota()
    {
        return $this->belongsTo( User::class, 'id_user', 'id' );
    }
    public function books()
    {
        return $this->belongsTo( Book::class, 'buku', 'id' );
    }
}
