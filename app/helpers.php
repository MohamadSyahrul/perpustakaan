<?php

use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\Storage;

function dateFormat($tanggal){
    $date = strtotime($tanggal);
    $date_format = date('Y-m-d',$date);

    return $date_format;
}

function generateKode($tgl_pinjam)
{
    $date = strtotime($tgl_pinjam);
    $date_format = date('Y-m-d',$date);
    $tgl_pinjam = substr($date_format,8,2);
    $bulan = substr($date_format,5,2);
    $nama_buku = strtoupper("PJ");
    return $kode = $nama_buku . '.' . $tgl_pinjam . '.' . $bulan;

}