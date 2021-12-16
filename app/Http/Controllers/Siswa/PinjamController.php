<?php

namespace App\Http\Controllers\Siswa;

use App\Pinjam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pinjam = Pinjam::where('status', 'Dipinjam')->with(['books'],['anggota' => function($user) use ($request){
            $user->where('role', 'siswa');
        }])->where('id_user', Auth::user()->id)->get();
        
        return view('pages.siswa.peminjaman', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pengembalian = Pinjam::where('status', 'Sudah Dikembalikan')->with(['books'],['anggota' => function($user) use ($request){
            $user->where('role', 'siswa');
        }])->where('id_user', Auth::user()->id)->get();
        
        return view('pages.siswa.pengembalian', compact('pengembalian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laporan = Pinjam::with(['books'],['anggota' => function($user) use ($request){
            $user->where('role', 'siswa');
        }])->where('id_user', Auth::user()->id)->get();
        
        return view('pages.siswa.laporan', compact('laporan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
