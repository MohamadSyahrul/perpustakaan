@extends('layout.admin.master')
@section('title')
Data Buku
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
                    <strong class="card-title">Data Data Buku</strong>

                    <button type="button" class="btn btn-primary mb-1 float-right" data-toggle="modal"
                        data-target="#mediumModal">
                        Tambah Buku
                    </button>

                    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog"
                        aria-labelledby="mediumModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">Tambah Data Buku</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('data-buku.store')}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <p>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="selectSm"
                                                        class=" form-control-label">Kategori</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id_kategori" id="selectSm"
                                                        class="form-control-sm form-control">
                                                        <option value="0">Please select</option>
                                                        @foreach ($ktg as $item)
                                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="selectSm"
                                                        class=" form-control-label">Rak / Lokasi</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id_raks" id="selectSm"
                                                        class="form-control-sm form-control">
                                                        <option value="0">Please select</option>
                                                        @foreach ($rak as $item)
                                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input"
                                                        class=" form-control-label">ISBN</label></div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="isbn"
                                                        placeholder="Contoh ISBN : 978-602-322-21-3"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input"
                                                        class=" form-control-label">Judul Buku</label></div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="judul"
                                                        placeholder="Contoh : Cara Ngopi" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input"
                                                        class=" form-control-label">Nama Pengarang</label></div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama_pengarang"
                                                        placeholder="Nama Pengarang" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input"
                                                        class=" form-control-label">Penerbit</label></div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="penerbit"
                                                        placeholder="Nama Penerbit" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input"
                                                        class=" form-control-label">Tahun Buku</label></div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="tahun"
                                                        placeholder="Contoh : 2021" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input"
                                                        class=" form-control-label">Jumlah Buku</label></div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="jumlah"
                                                        placeholder="Jumlah Buku : 12" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="file-input"
                                                        class=" form-control-label">Sampul</label></div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="sampul"
                                                        class="form-control-file">
                                                    <small class="form-text text-muted">Format JPG/JPEG</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="textarea-input"
                                                        class=" form-control-label">Keterangan</label></div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="keterangan" id="textarea-input" rows="9"
                                                        placeholder="Masukan Keterangan" class="form-control"
                                                        required></textarea>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Sampul</th>
                                <th scope="col">ISBN</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bk as $item) {{-- ini digunakan untuk melooping data dari database --}}
                            <tr>
                                <td>{{$item->iteration}}</td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <img class="rounded-circle" src="{{asset('img/'. $item->sampul)}}" alt=""
                                            width="100">
                                    </div>
                                </td>
                                <td>{{ $item->isbn }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->penerbit }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->jumlah }}</td>

                                {{-- aksi --}}
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#editModal{{$item->id}}"><i class="fa fa-edit"></i>&nbsp;
                                        Update</button>

                                    <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="mediumModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="mediumModalLabel">Update Buku</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <form action="{{route('data-buku.update', $item->id)}}"
                                                            method="post" enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf
                                                            <div class="card-body card-block">
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="selectSm"
                                                                            class=" form-control-label">Kategori</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <select name="id_kategori" id="selectSm"
                                                                            class="form-control-sm form-control">
                                                                            <option value="0">Please select</option>
                                                                            @foreach ($ktg as $item)
                                                                            <option value="{{$item->id}}">
                                                                                {{$item->nama}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="selectSm"
                                                                            class=" form-control-label">Rak /
                                                                            Lokasi</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <select name="id_raks" id="selectSm"
                                                                            class="form-control-sm form-control">
                                                                            <option value="0">Please select</option>
                                                                            @foreach ($rak as $item)
                                                                            <option value="{{$item->id}}">
                                                                                {{$item->nama}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input"
                                                                            class=" form-control-label">ISBN</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="text" id="text-input" name="isbn"
                                                                            value="{{ $item->isbn }}"
                                                                            class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input"
                                                                            class=" form-control-label">Judul
                                                                            Buku</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="text" id="text-input" name="judul"
                                                                            value="{{ $item->judul }}"
                                                                            class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input"
                                                                            class=" form-control-label">Nama
                                                                            Pengarang</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="text" id="text-input"
                                                                            name="nama_pengarang"
                                                                            value="{{ $item->nama_pengarang }}"
                                                                            class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input"
                                                                            class=" form-control-label">Penerbit</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="text" id="text-input"
                                                                            name="penerbit"
                                                                            value="{{ $item->penerbit }}"
                                                                            class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input"
                                                                            class=" form-control-label">Tahun
                                                                            Buku</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="text" id="text-input" name="tahun"
                                                                            value="{{ $item->tahun }}"
                                                                            class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input"
                                                                            class=" form-control-label">Jumlah
                                                                            Buku</label></div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="text" id="text-input" name="jumlah"
                                                                            value="{{ $item->jumlah }}"
                                                                            class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="file-input"
                                                                            class=" form-control-label">Sampul</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <input type="file" id="file-input" name="sampul"
                                                                            class="form-control-file">
                                                                        <small class="form-text text-muted">Format
                                                                            JPG/JPEG</small>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label
                                                                            for="textarea-input"
                                                                            class=" form-control-label">Keterangan</label>
                                                                    </div>
                                                                    <div class="col-12 col-md-9">
                                                                        <textarea name="keterangan" id="textarea-input"
                                                                            rows="9"
                                                                            placeholder="{{ $item->keterangan}}"
                                                                            class="form-control" required></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary btn-sm">Submit</button><br>
                                                                <button type="reset"
                                                                    class="btn btn-danger btn-sm">Reset</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </td>
                                <td>
                                    
                                    <form style="display: inline;" action="{{route('data-buku.destroy', $item->id)}}" method="post" onsubmit="return confirm('Yakin hapus data ?')" >
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;
                                        Delete</button>
                                    </form>
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
