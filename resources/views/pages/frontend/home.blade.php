@extends('layout.frontend.masterFrontend') {{-- Extend digunakan untuk memberitahukan tempat dari yield  --}}
@section('title') {{-- Section digunakan untuk memanggil yield dengan value/nilai title --}}
    Home Perpustakaan
@endsection
@section('content') {{-- Section digunakan untuk memanggil yield dengan value/nilai content --}}
<section class="banner">
    <div class="shape">
        <svg>
            <path
                d="M 0 100 Q 0 200 150 200 Q 200 200 250 250 Q 300 350 350 350 Q 450 350 500 400 Q 550 500 700 500 L 800 500 L 800 100 L 0 100">
        </svg>
    </div>
    <div>
        <div class="image_holder"><img src="{{asset('template/img/banner_img.png')}}"></div>
        <div class="text_holder">
            <h5>Pinjam dan Baca Buku di</h5>
            <h1>Perpustakaan SMA Negeri 1 Tegaldlimo</h1>
            <p>Nikmati beberapa fitur yang disediakan pada website ini. mulailah dengan login terlebih dahulu 👋</p>
            <div class="buttons">
                <a class="button1" href="{{route('login')}}" title="Login">Login</a>
                <a class="button2" href="{{route('register')}}" title="Register">Register</a>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div>
        <div class="image_holder"><img src="{{asset('template/img/learning_img.png')}}"></div>
        <div>
            @foreach ($about as $item)
            <h5>Tentang</h5>
            <h2>{{$item->title}}</h2>
            <p>{{$item->deskripsi}}</p>
            @endforeach
            <a class="button1" href="{{url('tentang')}}" title="Read more">Read more</a>
        </div>
    </div>
</section>
<section class="info">
    <div>
        <ul>
            <li>
                <h4>1024</h4>
                <p>Total Buku</p>
            </li>
            <li>
                <h4>960</h4>
                <p>Total Siswa</p>
            </li>
            <li>
                <h4>1019</h4>
                <p>Buku Yang Dipinjam</p>
            </li>
            <li>
                <h4>819</h4>
                <p>Buku Yang Dikembalikan</p>
            </li>
        </ul>
    </div>
</section>

<section class="blog">
    <div>
        <h4>Kegiatan</h4>
        <div class="container">
            @foreach ($kgt as $item)
            <div>
                <div class="image_holder"><img src="{{asset('img/'. $item->foto)}}"></div>
                <div class="text_holder">
                    <div class="heading">
                        <a href="course_details.html" title="Design">{{$item->tanggal}}</a>
                    </div>
                    <div class="description">
                        <a href="course_details.html" title="Dry Beginning Sea Over Tree">{{$item->title}}</a>
                        <p>{!!$item->deskripsi!!}</p>
                    </div>
                   
                </div>
            </div>
            @endforeach
            {{-- <div>
                <div class="image_holder"><img src="{{asset('template/img/blog_2.png')}}"></div>
                <div class="text_holder">
                    <div class="heading">
                        <a href="course_details.html" title="Developing">Developing</a>
                    </div>
                    <div class="description">
                        <a href="course_details.html" title="All Beginning Air Two Likeness">All Beginning Air Two
                            Likeness</a>
                        <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                    </div>
                 
                </div>
            </div>
            <div>
                <div class="image_holder"><img src="{{asset('template/img/blog_3.png')}}"></div>
                <div class="text_holder">
                    <div class="heading">
                        <a href="course_details.html" title="Design">Design</a>
                    </div>
                    <div class="description">
                        <a href="course_details.html" title="Form Day Seasons Sea Hand">Form Day Seasons Sea
                            Hand</a>
                        <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection