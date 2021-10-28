<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Http\Controllers\Controller;
use App\Kategori;
use App\Rak;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ktg = Kategori::all();
        $rak = Rak::all();
        $bk = Book::all();
        return view('pages.admin.buku.buku', [
            'ktg' => $ktg,
            'rak' => $rak,
            'bk' => $bk,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dox = new Book();
        $dox->isbn = $request->isbn;
        $dox->judul = $request->judul;
        $dox->nama_pengarang = $request->nama_pengarang;
        $dox->penerbit = $request->penerbit;
        $dox->tahun = $request->tahun;
        $dox->jumlah = $request->jumlah;

        $dox->sampul = $request->sampul; //file jpg

        $dox->keterangan = $request->keterangan;
        $dox->id_kategori = $request->id_kategori;
        $dox->id_raks = $request->id_raks;



        
        if ($request->hasFile('sampul')) {
            $nm = $request->sampul;
            $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
            $dox->sampul = $namaFile;
            $nm->move(public_path() . '/img', $namaFile);
        }else{
            $dox->sampul = 'default.pdf';
        }

        $dox->save();

        return redirect()->route('data-buku.index');
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
        $save =  Book::findorfail($id);;
        $save->isbn = $request->isbn;
        $save->judul = $request->judul;
        $save->nama_pengarang = $request->nama_pengarang;
        $save->penerbit = $request->penerbit;
        $save->tahun = $request->tahun;
        $save->jumlah = $request->jumlah;

        $save->sampul = $request->sampul; //file jpg

        $save->keterangan = $request->keterangan;
        $save->id_kategori = $request->id_kategori;
        $save->id_raks = $request->id_raks;


        if ($request->hasFile('sampul')) {
            $nm = $request->sampul;
            $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
            $save->sampul = $namaFile;
            $nm->move(public_path() . '/img', $namaFile);
        }else{
            $save->sampul = 'default.png';
        }
// dd($save);
        $save->update();
        return redirect()->route('data-buku.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Book::findOrFail($id);

        $file = public_path('/img/').$delete->sampul;
        //cek jika ada gambar
        if (file_exists($file)){
            //maka delete file diforder public/img
            @unlink($file);
        }
        //delete data didatabase
        $delete->delete();
        // dd($delete);

        return redirect()->route('data-buku.index');
    }
}
