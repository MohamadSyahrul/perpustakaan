@extends('layout.admin.master')
@section('title')
Kategori
@endsection

@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    @if (session()->get('update'))
                    {{-- ini berfungsi untuk memberitahu bahwa data berhasil di update --}}
                    <div class="alert alert-warning" role="alert">
                        {{ session()->get('update') }}
                    </div>
                    @endif
                    <strong class="card-title">Data Peminjaman</strong>
                    <strong class="card-title float-right text-primary">({{Auth::user()->name}})</strong>                    
                </div>
                <div id="divToPrint" class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No Pinjam</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Buku</th>
                                <th scope="col">Pinjam</th>
                                <th scope="col">Status</th>
                                <th scope="col">Lama Pinjam</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pinjam as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->pinjam }}</td>
                                    <td>{{ $item->anggota->name }}</td>
                                    <td>{{ $item->books->judul }}</td>
                                    <td>{{ $item->tgl_pinjam }}</td>
                                    @if ($item->status == "Dipinjam")
                                    <td class="text-success">{{ $item->status }}</td>    
                                    @else
                                    <td class="text-danger">{{ $item->status }}</td>      
                                    @endif                               
                                    <td>{{ $item->lama_pinjam }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
