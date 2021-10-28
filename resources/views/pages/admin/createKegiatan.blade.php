@extends('layout.admin.master')
@section('title')
Create Kegiatan
@endsection
@section('content')
<div class="animated fadeIn">


    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Tambah</strong> Kegiatan
                </div>
                <form action="{{route('management-kegiatan.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="card-body card-block">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="title" class=" form-control-label">Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="title" name="title"
                                    placeholder="Enter Title..." class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="foto" class=" form-control-label">Foto</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="foto" name="foto" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="deskripsi" class=" form-control-label">Deskripsi</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="deskripsi" id="deskripsi" rows="9" placeholder="Deskripsi..." class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="tanggal" name="tanggal"
                                    placeholder="Enter Email..." class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>


    </div>


</div><!-- .animated -->
@endsection
