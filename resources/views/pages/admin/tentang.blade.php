@extends('layout.admin.master')
@section('title')
Tentang
@endsection
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    @if (session()->get('update')) {{-- ini berfungsi untuk memberitahu bahwa data berhasil di update --}}
                    <div class="alert alert-warning" role="alert">
                        {{ session()->get('update') }}
                    </div>
                    @endif
                    <strong class="card-title">Data Tentang</strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($about as $item) {{-- ini digunakan untuk melooping data dari database --}}
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>{!! $item->deskripsi !!}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                    data-target="#editModal{{$item->id}}"><i class="fa fa-edit"></i>&nbsp;
                                    Update</button>

                                <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="mediumModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="mediumModalLabel">Update Tentang</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <form
                                                        action="{{route('management-tentang.update', $item->id)}}"
                                                        method="post">
                                                        @method('put')
                                                        @csrf
                                                        <div class="card-body card-block">

                                                            <div class="form-group"><label for="nf-username"
                                                                    class=" form-control-label">Title</label><input
                                                                    type="text" id="nf-username" name="title"
                                                                    value="{{$item->title}}"
                                                                    class="form-control"></div>
                                                            <div class="form-group"><label for="nf-username"
                                                                        class=" form-control-label">Deskripsi</label>
                                                                <textarea name="deskripsi" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                            
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
