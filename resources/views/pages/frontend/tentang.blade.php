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
@endsection
