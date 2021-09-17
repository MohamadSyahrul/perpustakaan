<div>
    <div class="mobile_menu">
        <div class="image_holder"><a href="{{url('/')}}" title="Etrain"><img src="{{asset('template/img/logo.png')}}"></a></div>
        <div><a href="javascript:;" class="bars"><i class="fas fa-bars"></i></a></div>
    </div>
    <nav class="nav">
        <ul>
            <li>
                <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}" title="Home">Home</a>
            </li>
            <li>
                <a class="{{ Request::is('tentang') ? 'active' : '' }}" href="{{url('/tentang')}}" title="About">Tentang</a>
            </li>
            <li>
                <a class="{{ Request::is('kegiatan') ? 'active' : '' }}" href="{{url('/kegiatan')}}" title="Courses">Kegiatan</a>
            </li>
        </ul>
        <div>
            <a href="{{route('login')}}" title="Login">Login</a>
        </div>
    </nav>
</div>