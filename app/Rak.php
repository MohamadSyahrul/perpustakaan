<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $table = "raks";
    protected $fillable =[
        'nama'
    ];

    public function books() {
        return $this->hasMany(Book::class, 'id_raks');
    }
}
