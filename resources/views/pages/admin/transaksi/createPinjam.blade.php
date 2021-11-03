@extends('layout.admin.master')
@section('title')
Tambah Peminjaman Buku
@endsection
@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
<link rel="stylesheet" href="{{asset('admin/assets/css/cs-skin-elastic.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/lib/chosen/chosen.min.css')}}">
@endpush
@section('content')
<div class="animated fadeIn">


    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Tambah</strong> Peminjaman
                </div>
                <form action="{{route('peminjaman.store')}}" method="post" class="form-horizontal"
                    enctype="multipart/form-data">
                    <div class="card-body card-block">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="Kode Pinjam" class=" form-control-label">Kode
                                    Pinjam</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="Kode Pinjam" name="pinjam" readonly
                                    placeholder="Generate Kode Otomatis" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="tgl_pinjam" class=" form-control-label">Tanggal
                                    Pinjam</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="tgl_pinjam" name="tgl_pinjam"
                                    placeholder="Generate Kode Otomatis" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class="form-control-label">Anggota</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="id_user" data-placeholder="Choose a Country..." class="standardSelect form-control" tabindex="1">
                                    <option>Pilih Anggota...</option>
                                    @foreach ($anggota as $item)
                                    <option value="{{$item->id}}">{{ $item->name }}</option>                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="lama_pinjam" class=" form-control-label">Lama
                                    Pinjam</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="lama_pinjam" name="lama_pinjam"
                                    placeholder="contoh : 2 Hari" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class="form-control-label">Buku</label>
                            </div>
                            <div class="col-12 col-md-9">

                                <select name="buku" data-placeholder="Choose a Country..." class="standardSelect form-control" tabindex="1">
                                    <option>Pilih Buku...</option>
                                    @foreach ($buku as $item)
                                    <option value="{{$item->id}}">{{ $item->judul }}</option>                                        
                                    @endforeach
                                </select>
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
@push('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/lib/chosen/chosen.jquery.min.js')}}"></script>
<script>
    jQuery(document).ready(function () {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });

</script>
@endpush
