@extends('layout.frontend.masterFrontend')
@section('title')
    Tentang
@endsection
@section('content')
<section class="slider2">
    <div>
        <h4>Tentang</h4>
        <h5>Home / Tentang</h5>
    </div>
</section>
<section class="about">
    <div>
        <div class="image_holder"><img src="{{asset('template/img/learning_img.png')}}"></div>
        <div>
            @foreach ($about as $item)
            <h5>Tentang</h5>
            <h2>{{ $item->title }}</h2>
            <p>{!! $item->deskripsi !!}</p>
            @endforeach
        </div>
    </div>
</section>

@endsection
