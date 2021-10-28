@extends('layout.admin.master')
@section('title')
Kegiatan
@endsection
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    @if (session()->get('update'))
                    <div class="alert alert-warning" role="alert">
                        {{ session()->get('update') }}
                    </div>
                    @endif
                    <strong class="card-title">Data Kegiatan</strong>
                    <a href="{{route('management-kegiatan.create')}}" class="btn btn-primary float-right">Tambah
                        Data</a>
                </div>
                <div class="table-stats order-table ov-h">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Foto</th>
                                <th>Deskripsi</th>
                                <th>Tangga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kgt as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <img class="rounded-circle" src="{{asset('img/'. $item->foto)}}" alt="">
                                    </div>
                                </td>
                                <td>{!! $item->deskripsi !!}</td>
                                <td>{!! $item->tanggal !!}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#editModal{{$item->id}}"><i class="fa fa-edit"></i>&nbsp;
                                        Update</button>

                                    <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" role="dialog"
                                        aria-labelledby="mediumModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="mediumModalLabel">Update</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <form action="{{route('management-kegiatan.update',$item->id)}}"
                                                            method="post" enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf
                                                            <div class="card-body card-block">

                                                                <div class="form-group"><label for="nf-username"
                                                                        class=" form-control-label">Title</label><input
                                                                        type="text" id="nf-username" name="title"
                                                                        value="{{$item->title}}" class="form-control">
                                                                </div>
                                                                <div class="form-group"><label for="foto"
                                                                        class=" form-control-label">Foto</label><input
                                                                        type="file" id="foto" name="foto"
                                                                        value="{{$item->foto}}" class="form-control">
                                                                </div>
                                                                <div class="form-group"><label for="textarea-input"
                                                                        class=" form-control-label">Deskripsi</label>
                                                                    <textarea name="deskripsi" id="textarea-input"
                                                                        rows="9" placeholder="{{$item->deskripsi}}"
                                                                        class="form-control"></textarea>

                                                                </div>
                                                                <div class="form-group"><label for="tanggal"
                                                                        class=" form-control-label">Tanggal</label><input
                                                                        type="date" id="tanggal" name="tanggal"
                                                                        value="{{$item->tanggal}}" class="form-control">
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

                                    <form style="display: inline;" action="{{ route('management-kegiatan.destroy', $item->id) }}" method="post" onsubmit="return confirm('Yakin hapus data ?')" >
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
