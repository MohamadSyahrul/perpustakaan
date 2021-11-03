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
                    <strong class="card-title">Data Kategori</strong>
                    <a href="{{route('peminjaman.create')}}" class="btn btn-primary mb-1 float-right">
                        Tambah
                    </a>


                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No Pinjam</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Pinjam</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pinjam as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->pinjam }}</td>
                                    <td>{{ $item->anggota->name }}</td>
                                    <td>{{ $item->tgl_pinjam }}</td>
                                    <td class="text-success">{{ $item->status }}</td>
                                    <td></td>
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
