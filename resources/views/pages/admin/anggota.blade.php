@extends('layout.admin.master')
@section('title')
Management Anggota
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
@endpush
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if (session()->get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    @if (session()->get('update'))
                    <div class="alert alert-warning" role="alert">
                        {{ session()->get('update') }}
                    </div>
                    @endif
                    <strong class="card-title">Data Anggota</strong>
                    <button type="button" class="btn btn-success mb-1 float-right" data-toggle="modal"
                        data-target="#mediumModal">
                        Tambah
                    </button>

                    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog"
                        aria-labelledby="mediumModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">Tambah Anggota</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <form action="{{route('management-anggota.store')}}" method="post">
                                            @csrf
                                            <div class="card-body card-block">

                                                <div class="form-group"><label for="nf-username"
                                                        class=" form-control-label">Username</label><input type="text"
                                                        id="nf-username" name="name" placeholder="Enter Username.."
                                                        class="form-control"></div>
                                                <div class="form-group"><label for="nf-email"
                                                        class=" form-control-label">Email</label><input type="email"
                                                        id="nf-email" name="email" placeholder="Enter Email.."
                                                        class="form-control"></div>
                                                <div class="form-group"><label for="nf-password"
                                                        class=" form-control-label">Password</label><input
                                                        type="password" id="nf-password" name="password"
                                                        placeholder="Enter Password.." class="form-control"></div>
                                                <div class="form-group"><label for="nf-confirm"
                                                        class=" form-control-label">Password Confirm</label><input
                                                        type="password" id="nf-confirm" name="password_confirmation"
                                                        placeholder="Enter Password Confirm.." class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="selectSm" class=" form-control-label">Role</label>

                                                    <select name="role" id="selectSm"
                                                        class="form-control-sm form-control">
                                                        <option>Please select</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="siswa">Siswa</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">Submit</button><br>
                                                <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usr as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->role}}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#editModal{{$item->id}}"><i class="fa fa-edit"></i>&nbsp;
                                            Edit</button>

                                        <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="mediumModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="mediumModalLabel">Edit Anggota</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card">
                                                            <form
                                                                action="{{route('management-anggota.update', $item->id)}}"
                                                                method="post">
                                                                @method('put')
                                                                @csrf
                                                                <div class="card-body card-block">

                                                                    <div class="form-group"><label for="nf-username"
                                                                            class=" form-control-label">Username</label><input
                                                                            type="text" id="nf-username" name="name"
                                                                            value="{{$item->name}}"
                                                                            class="form-control"></div>
                                                                    <div class="form-group"><label for="nf-email"
                                                                            class=" form-control-label">Email</label><input
                                                                            type="email" id="nf-email" name="email"
                                                                            placeholder="{{$item->email}}"
                                                                            class="form-control"></div>
                                                                    <div class="form-group"><label for="nf-password"
                                                                            class=" form-control-label">Password</label><input
                                                                            type="password" id="nf-password"
                                                                            name="password"
                                                                            placeholder="Enter Password.."
                                                                            class="form-control"></div>
                                                                    <div class="form-group"><label for="nf-confirm"
                                                                            class=" form-control-label">Password
                                                                            Confirm</label><input type="password"
                                                                            id="nf-confirm" name="password_confirmation"
                                                                            placeholder="Enter Password Confirm.."
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="selectSm"
                                                                            class=" form-control-label">Role</label>

                                                                        <select name="role" id="selectSm"
                                                                            class="form-control-sm form-control">
                                                                            <option>Please select</option>
                                                                            <option value="admin">Admin</option>
                                                                            <option value="siswa">Siswa</option>
                                                                        </select>

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
                                        <form action="{{route('management-anggota.destroy', $item->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>&nbsp;
                                                Hapus</button>
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
    </div><!-- .animated -->
    @endsection
    @push('script')
    <script src="{{asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/init/datatables-init.js')}}"></script>

    @endpush
