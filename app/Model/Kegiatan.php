<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $primaryKey = "id";
    protected $table = "kegiatans";
    protected $fillable = [
        'foto', 'title','deskripsi','tanggal'
    ];
}
