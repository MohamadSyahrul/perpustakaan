<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $kgt = Kegiatan::all();    
    return view('pages.admin.kegiatan', compact('kgt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('pages.admin.createKegiatan');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save = new Kegiatan;
        $save->title = $request->title;
        $save->deskripsi = $request->deskripsi;
        $save->foto = $request->foto;
        $save['tanggal'] = dateFormat($request->tanggal);

        if ($request->hasFile('foto')) {
            $nm = $request->foto;
            $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
            $save->foto = $namaFile;
            $nm->move(public_path() . '/img', $namaFile);
        }else{
            $save->foto = 'default.png';
        }
// dd($save);
        $save->save();
        return redirect()->route('management-kegiatan.index');
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
        $save =  Kegiatan::findorfail($id);;
        $save->title = $request->title;
        $save->deskripsi = $request->deskripsi;
        $save['tanggal'] = dateFormat($request->tanggal);

        if ($request->hasFile('foto')) {
            $nm = $request->foto;
            $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
            $save->foto = $namaFile;
            $nm->move(public_path() . '/img', $namaFile);
        }else{
            $save->foto = 'default.png';
        }
// dd($save);
        $save->update();
        return redirect()->route('management-kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Kegiatan::findOrFail($id);

        $file = public_path('/img/').$delete->foto;
        //cek jika ada gambar
        if (file_exists($file)){
            //maka delete file diforder public/img
            @unlink($file);
        }
        //delete data didatabase
        $delete->delete();
        return back();
    }
}
