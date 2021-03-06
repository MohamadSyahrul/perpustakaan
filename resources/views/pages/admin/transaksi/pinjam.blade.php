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

                    <script type="text/javascript">     
                        function PrintDiv() {    
                        var divToPrint = document.getElementById('divToPrint');
                        var popupWin = window.open('', '_blank');
                        popupWin.document.open();
                        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
                            popupWin.document.close();
                                }
                    </script>

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
                    <input type="button" class="btn btn-warning btn-sm mr-2 float-right" value="Print" onclick="PrintDiv();" />


                </div>
                <div id="divToPrint" class="card-body">
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
                                    @if ($item->status == "Dipinjam")
                                    <td class="text-success">{{ $item->status }}</td>    
                                    @else
                                    <td class="text-danger">{{ $item->status }}</td>    
                                        
                                    @endif
                                    <td>
                                        @if ($item->status == "Dipinjam")
                                            <a href="ubah_status/{{$item->id}}" class="btn btn-success btn-sm"><i class="fa fa-angle-double-right"></i>&nbsp; Kembalikan</a>
                                        @else
                                            <a href="{{route('peminjaman.index')}}" class="btn btn-danger btn-sm"><i class="fa fa-angle-double-right"></i>&nbsp; Sudah Kembali</a>
                                        @endif

                                        <a href="hapus_peminjaman/{{$item->id}}" id="tombol-hapus" type="submit" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-trash"></i>&nbsp; Hapus
                                        </a>
                                    </td>
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
