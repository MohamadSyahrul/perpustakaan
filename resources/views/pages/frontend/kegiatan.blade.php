@extends('layout.frontend.masterFrontend')
@section('title')
    Kegiatan
@endsection
@section('content')
<section class="slider2">
    <div>
        <h4>Kegiatan</h4>
        <h5>Home / Kegiatan</h5>
    </div>
</section>
<section class="blog2">
    <div>
        <div class="col1">
            @foreach ($kgt as $item)
                
            <ul>
                <li>
                    <div class="image_holder"><img src="{{asset('img/'. $item->foto)}}"></div>
                    <div class="text_holder">
                        <div class="tag"><a href="javascript:;" title="Blog"><span>{{ date('d', strtotime($item->tanggal)) }}</span>{{ substr(date('F', strtotime($item->tanggal)),0,3) }}</a></div>
                        <div class="heading"><a href="single_blog.html" title="Blog">{{$item->title}}</a></div>
                        <p>
                            {!!$item->deskripsi!!}
                        </p>
                        
                    </div>
                </li>
            </ul>
            @endforeach
        </div>
        {{-- <div class="col2">
            <div class="search">
                <form>
                    <input type="text" placeholder="Search Keyword">
                    <a href="javascript:;" title="Search"><i class="fas fa-search"></i></a>
                </form>
                <a href="javascript:;" title="Search">Search</a>
            </div>
            <div class="category">
                <h4>Category</h4>
                <ul>
                    <li><a href="javascript:;" title="Food">Restaurant food (21)</a></li>
                    <li><a href="javascript:;" title="Travel">Travel news (17)</a></li>
                    <li><a href="javascript:;" title="Tech">Modern technology (8)</a></li>
                    <li><a href="javascript:;" title="Product">Product (29)</a></li>
                    <li><a href="javascript:;" title="Inspiration">Inspiration (37)</a></li>
                    <li><a href="javascript:;" title="Health">Health Care (19)</a></li>
                </ul>
            </div> --}}
            {{-- <div class="posts">
                <h4>Recent Post</h4>
                <ul>
                    <li>
                        <a href="single_blog.html" title="Post">
                            <div><img src="{{asset('template/img/post_1.png')}}"></div>
                            <div>
                                <h6>From life was you fish...</h6>
                                <p>January 12, 2019</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="single_blog.html" title="Post">
                            <div><img src="{{asset('template/img/post_2.png')}}"></div>
                            <div>
                                <h6>The Amazing Hubble</h6>
                                <p>A Week ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="single_blog.html" title="Post">
                            <div><img src="{{asset('template/img/post_3.png')}}"></div>
                            <div>
                                <h6>Astronomy Or Astrology</h6>
                                <p>2 days ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="single_blog.html" title="Post">
                            <div><img src="{{asset('template/img/post_4.png')}}"></div>
                            <div>
                                <h6>Asteroids telescope</h6>
                                <p>4 Hours ago</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div> --}}
            {{-- <div class="tags">
                <h4>Tag Clouds</h4>
                <a href="javascript:;" title="project">project</a>
                <a href="javascript:;" title="love">love</a>
                <a href="javascript:;" title="technology">technology</a>
                <a href="javascript:;" title="travel">travel</a>
                <a href="javascript:;" title="reastaurant">restaurant</a>
                <a href="javascript:;" title="lifestyle">lifestyle</a>
                <a href="javascript:;" title="design">design</a>
                <a href="javascript:;" title="illustration">illustration</a>
            </div> --}}
            {{-- <div class="instagram">
                <h4>Instagram Feeds</h4>
                <ul>
                    <li><a href="javascript:;" title="Post1"><img src="{{asset('template/img/post_5.png')}}"></a></li>
                    <li><a href="javascript:;" title="Post2"><img src="{{asset('template/img/post_6.png')}}"></a></li>
                    <li><a href="javascript:;" title="Post3"><img src="{{asset('template/img/post_7.png')}}"></a></li>
                    <li><a href="javascript:;" title="Post4"><img src="{{asset('template/img/post_8.png')}}"></a></li>
                    <li><a href="javascript:;" title="Post5"><img src="{{asset('template/img/post_9.png')}}"></a></li>
                    <li><a href="javascript:;" title="Post6"><img src="{{asset('template/img/post_10.png')}}"></a></li>
                </ul>
            </div> --}}
            {{-- <div class="subscribe">
                <form>
                    <input type="text" placeholder="Enter email">
                    <a href="javascript:;" title="Subscribe ">Subscribe</a>
                </form>
            </div> --}}
        </div>
    </div>
</section>
@endsection
