<div id="main-menu" class="main-menu collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="{{ Request::is('home') ? 'active' : '' }}">
            <a href="{{url('home')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
        </li>
        @if (Auth::user()->role == 'admin')

        <li class="menu-title">Tampilan Depan</li><!-- /.menu-title -->
        <li class="{{ Request::is('management-tentang') ? 'active' : '' }}">
            <a href="{{route('management-tentang.index')}}"> <i class="menu-icon ti-bag"></i>Tentang </a>
        </li>
        <li class="{{ Request::is('management-kegiatan') ? 'active' : '' }}">
            <a href="{{route('management-kegiatan.index')}}"> <i class="menu-icon ti-agenda"></i>Kegiatan </a>
        </li>

        <li class="menu-title">Buku</li><!-- /.menu-title -->
        <li>
            <a href="{{route('data-buku.index')}}"> <i class="menu-icon ti-agenda"></i>Data Buku</a>
        </li>
        <li>
            <a href="{{route('kategori.index')}}"> <i class="menu-icon  ti-ink-pen"></i>Kategori</a>
        </li>
        <li>
            <a href="{{route('rak.index')}}"> <i class="menu-icon ti-view-list"></i>Rak</a>
        </li>

        <li class="menu-title">Transaksi</li><!-- /.menu-title -->
        <li>
            <a href="{{route('peminjaman.index')}}"> <i class="menu-icon ti-book"></i>Peminjaman Buku </a>
        </li>
        <li>
            <a href="{{route('pengembalian.index')}}"> <i class="menu-icon ti-bookmark-alt"></i>Pengembalian Buku </a>
        </li>

        <li class="menu-title">Anggota</li><!-- /.menu-title -->
        <li class="{{ Request::is('management-anggota') ? 'active' : '' }}">
            <a href="{{route('management-anggota.index')}}"> <i class="menu-icon ti-face-smile"></i>Management
                Anggota</a>
        </li>

        @elseif (Auth::user()->role == 'siswa')
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
        @endif
    </ul>
</div><!-- /.navbar-collapse -->
