<div class="top-left">
    <div class="navbar-header">
        <a class="navbar-brand" href="./"><img src="{{asset('template/img/logo.png')}}" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="{{asset('admin/images/logo2.png')}}" alt="Logo"></a>
        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
    </div>
</div>
<div class="top-right">
    <div class="header-menu">
   
        <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img class="user-avatar rounded-circle" src="{{asset('admin/images/admin.jpg')}}" alt="User Avatar">
            </a>

            <div class="user-menu dropdown-menu">
                {{-- <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span
                        class="count">13</span></a>

                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a> --}}

                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 <i class="fa fa-power -off"></i>Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

    </div>
</div>