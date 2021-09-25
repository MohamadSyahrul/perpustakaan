<div id="main-menu" class="main-menu collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="{{ Request::is('home') ? 'active' : '' }}">
            <a href="{{route('home')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
        </li>
        <li class="menu-title">Tampilan Depan</li><!-- /.menu-title -->
        <li class="{{ Request::is('management-tentang') ? 'active' : '' }}">
            <a href="{{route('management-tentang.index')}}"> <i class="menu-icon ti-bag"></i>Tentang </a>
        </li>
        <li>
            <a href="widgets.html"> <i class="menu-icon ti-agenda"></i>Kegiatan </a>
        </li>
       
        <li class="menu-title">Buku</li><!-- /.menu-title -->
        <li>
            <a href="widgets.html"> <i class="menu-icon ti-book"></i>Peminjaman Buku </a>
        </li>
        <li>
            <a href="widgets.html"> <i class="menu-icon ti-bookmark-alt"></i>Pengembalian Buku </a>
        </li>
        <li>
            <a href="widgets.html"> <i class="menu-icon ti-clipboard"></i>Laporan Peminjaman </a>
        </li>

        <li class="menu-title">Anggota</li><!-- /.menu-title -->
        <li class="{{ Request::is('management-anggota') ? 'active' : '' }}">
            <a href="{{route('management-anggota.index')}}"> <i class="menu-icon ti-face-smile"></i>Management Anggota</a>
        </li>
    </ul>
</div><!-- /.navbar-collapse -->