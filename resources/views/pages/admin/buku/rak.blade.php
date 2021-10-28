@extends('layout.admin.master')
@section('title')
Rak Buku
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
                    <strong class="card-title">Data Rak Buku</strong>
                    <button type="button" class="btn btn-primary mb-1 float-right" data-toggle="modal"
                        data-target="#mediumModal">
                        tambah
                    </button>

                    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog"
                        aria-labelledby="mediumModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">Tambah Data Rak</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('rak.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <p>
                                            <div class="has-success form-group"><label for="inputIsValid"
                                                    class=" form-control-label">Nama Rak</label>
                                                <input type="text" name="nama" placeholder="contoh : Rak Buku 1"
                                                    id="inputIsValid"
                                                    class="is-valid form-control-success form-control">
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
                                <th scope="col">Nama Rak Buku</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ktg as $item) {{-- ini digunakan untuk melooping data dari database --}}
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{!! $item->nama !!}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#editModal{{$item->id}}"><i class="fa fa-edit"></i>&nbsp;
                                        Update</button>

                                    <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="mediumModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="mediumModalLabel">Update Rak</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <form action="{{route('rak.update', $item->id)}}"
                                                            method="post">
                                                            @method('put')
                                                            @csrf
                                                            <div class="card-body card-block">

                                                                <div class="form-group"><label for="nf-username"
                                                                        class=" form-control-label">Nama Rak</label><input
                                                                        type="text" id="nf-username" name="nama"
                                                                        value="{{$item->nama}}" class="form-control">
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


                                    <form action="{{route('rak.destroy',$item->id)}}" method="post" style="display: inline;" onsubmit="return confirm('Yakin hapus data ?')">
                                        @csrf
                                        @method('DELETE')
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
