<?php

use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\Storage;

function dateFormat($tanggal){
    $date = strtotime($tanggal);
    $date_format = date('Y-m-d',$date);

    return $date_format;
}