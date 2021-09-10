@extends('layout.masterFrontend')
@section('title')
    Home Perpustakaan
@endsection
@section('content')
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
            <h1>Perpustakaan SMA Negeri 1 Banyuwangi</h1>
            <p>Nikmati beberapa fitur yang disediakan pada website ini. mulailah dengan login terlebih dahulu 👋</p>
            <div class="buttons">
                <a class="button1" href="courses.html" title="Login">Login</a>
                <a class="button2" href="javascript:;" title="Register">Register</a>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div>
        <div class="text_holder">
            <h2>Awesome<br>Feature</h2>
            <p>Set have great you male grass yielding an yielding first their you're have called the abundantly
                fruit were man</p>
            <a class="button1" href="javascript:;" title="Read more">read more</a>
        </div>
        <div class="list">
            <div><i class="far fa-check-square"></i></div>
            <h3>Better Future</h3>
            <p>Set have great you male grasses yielding yielding first their to called deep abundantly Set have
                great you male</p>
        </div>
        <div class="list">
            <div><i class="fas fa-user-tie"></i></div>
            <h3>Qualified Trainers</h3>
            <p>Set have great you male grasses yielding yielding first their to called deep abundantly Set have
                great you male</p>
        </div>
        <div class="list">
            <div><i class="far fa-lightbulb"></i></div>
            <h3>Job Oppurtunity</h3>
            <p>Set have great you male grasses yielding yielding first their to called deep abundantly Set have
                great you male</p>
        </div>
    </div>
</section>
<section class="about">
    <div>
        <div class="image_holder"><img src="{{asset('template/img/learning_img.png')}}"></div>
        <div>
            <h5>About us</h5>
            <h2>Learning with Love and Laughter</h2>
            <p>Fifth saying upon divide divide rule for deep their female all hath brind Days and beast greater
                grass signs abundantly have greater also days years under brought moveth.</p>
            <div><i class="far fa-edit"></i>
                <p>Him lights given i heaven second yielding seas gathered wear.</p>
            </div>
            <div><i class="fas fa-pencil-ruler"></i>
                <p>Fly female them whales fly them day deep given night.</p>
            </div>
            <a class="button1" href="javascript:;" title="Read more">read more</a>
        </div>
    </div>
</section>
<section class="info">
    <div>
        <ul>
            <li>
                <h4>1024</h4>
                <p>All Teachers</p>
            </li>
            <li>
                <h4>960</h4>
                <p>All Students</p>
            </li>
            <li>
                <h4>1019</h4>
                <p>Online Students</p>
            </li>
            <li>
                <h4>819</h4>
                <p>Offline Students</p>
            </li>
        </ul>
    </div>
</section>
<section class="courses">
    <div>
        <h5>popular courses</h5>
        <h4>Special Courses</h4>
        <div class="container">
            <div>
                <div class="image_holder"><img src="{{asset('template/img/special_cource_1.png')}}"></div>
                <div class="text_holder">
                    <div class="heading">
                        <a href="course_details.html" title="Web Development">Web development</a>
                        <div>$130.00</div>
                    </div>
                    <div class="description">
                        <a href="course_details.html" title="Web Development">Web Development</a>
                        <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>]
                    </div>
                    <div class="author">
                        <div class="image_holder2"><img src="{{asset('template/img/author_1.png')}}"></div>
                        <div class="details">
                            <div>Conduct by:<a href="javascript:;" title="J. Well">James Well</a></div>
                            <div class="rating">
                                <div><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i></div>
                                <div>3.8 Ratings</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="image_holder"><img src="{{asset('template/img/special_cource_2.png')}}"></div>
                <div class="text_holder">
                    <div class="heading">
                        <a href="course_details.html" title="Design">Design</a>
                        <div>$160.00</div>
                    </div>
                    <div class="description">
                        <a href="course_details.html" title="Web UX/UI Design">Web UX/UI Design</a>
                        <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                    </div>
                    <div class="author">
                        <div class="image_holder2"><img src="{{asset('template/img/author_2.png')}}"></div>
                        <div class="details">
                            <div>Conduct by:<a href="javascript:;" title="J. Well">James Well</a></div>
                            <div class="rating">
                                <div><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i></div>
                                <div>3.8 Ratings</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="image_holder"><img src="{{asset('template/img/special_cource_3.png')}}"></div>
                <div class="text_holder">
                    <div class="heading">
                        <a href="course_details.html" title="Wordpress">Wordpress</a>
                        <div>$140.00</div>
                    </div>
                    <div class="description">
                        <a href="course_details.html" title="Wordpress Development">Wordpress Development</a>
                        <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                    </div>
                    <div class="author">
                        <div class="image_holder2"><img src="{{asset('template/img/author_3.png')}}"></div>
                        <div class="details">
                            <div>Conduct by:<a href="javascript:;" title="J. Well">James Well</a></div>
                            <div class="rating">
                                <div><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i></div>
                                <div>3.8 Ratings</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="advanced">
    <div>
        <div class="text_holder">
            <div>
                <h5>ADVANCED FEATURE</h5>
                <h2>Our Advanced Educator Learning System</h2>
                <p>Fifth saying upon divide divide rule for deep their female all hath brind mid Days and beast
                    greater grass signs abundantly have greater also use over face earth days years under brought
                    moveth she star</p>
            </div>
            <div class="container">
                <div>
                    <div class="edit"><i class="far fa-edit"></i></div>
                    <h4>Learn Anywhere</h4>
                    <p>There earth face earth behold she star so made void two given and also our</p>
                </div>
                <div>
                    <div class="teacher"><i class="fas fa-user-tie"></i></div>
                    <h4>Expert Teacher</h4>
                    <p>There earth face earth behold she star so made void two given and also our</p>
                </div>
            </div>
        </div>
        <div class="image_holder">
            <img src="{{asset('template/img/advance_feature_img.png')}}">
        </div>
    </div>
</section>
<section class="testimonials">
    <div>
        <h5>TESIMONIALS</h5>
        <h4>Happy Students</h4>
        <div class="container">
            <div class="student">
                <div class="text_holder">
                    <p>Behold place was a multiply creeping creature his domin to thiren open void hath herb divided
                        divide creepeth living shall i call beginning third sea itself set</p>
                    <h5>Michael Hashale</h5>
                    <h6>Sr Web designer</h6>
                </div>
                <div class="image_holder">
                    <img src="{{asset('template/img/testimonial_img_1.png')}}">
                </div>
            </div>
            <div class="student">
                <div class="text_holder">
                    <p>Behold place was a multiply creeping creature his domin to thiren open void hath herb divided
                        divide creepeth living shall i call beginning third sea itself set</p>
                    <h5>Michael Hashale</h5>
                    <h6>Sr Web designer</h6>
                </div>
                <div class="image_holder">
                    <img src="{{asset('template/img/testimonial_img_2.png')}}">
                </div>
            </div>
            <div class="student">
                <div class="text_holder">
                    <p>Behold place was a multiply creeping creature his domin to thiren open void hath herb divided
                        divide creepeth living shall i call beginning third sea itself set</p>
                    <h5>Michael Hashale</h5>
                    <h6>Sr Web designer</h6>
                </div>
                <div class="image_holder">
                    <img src="{{asset('template/img/testimonial_img_3.png')}}">
                </div>
            </div>
        </div>
        <div class="btn_container">
            <div><a href="javascript:;" class="prevBtn"><i class="fas fa-angle-double-left"></i></a></div>
            <div><a href="javascript:;" class="nextBtn"><i class="fas fa-angle-double-right"></i></a></div>
        </div>
    </div>
</section>
<section class="blog">
    <div>
        <h5>our blog</h5>
        <h4>Students Blog</h4>
        <div class="container">
            <div>
                <div class="image_holder"><img src="{{asset('template/img/blog_1.png')}}"></div>
                <div class="text_holder">
                    <div class="heading">
                        <a href="course_details.html" title="Design">Design</a>
                    </div>
                    <div class="description">
                        <a href="course_details.html" title="Dry Beginning Sea Over Tree">Dry Beginning Sea Over
                            Tree</a>
                        <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                    </div>
                    <div class="reactions">
                        <div>
                            <div><i class="far fa-comment-alt"></div></i>2 Comments
                        </div>
                        <div>
                            <div><i class="far fa-heart"></div></i>2k Like
                        </div>
                    </div>
                </div>
            </div>
            <div>
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
                    <div class="reactions">
                        <div>
                            <div><i class="far fa-comment-alt"></div></i>2 Comments
                        </div>
                        <div>
                            <div><i class="far fa-heart"></div></i>2k Like
                        </div>
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
                    <div class="reactions">
                        <div>
                            <div><i class="far fa-comment-alt"></div></i>2 Comments
                        </div>
                        <div>
                            <div><i class="far fa-heart"></div></i>2k Like
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection