@role('admin')
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="" href="{{route('home')}}" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
        </li>
        <li class="">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-social-dropbox mr-5"></i>Barang</a>
            <ul>
                <li>
                    <a class="" href="{{route('barang.index')}}">Index Barang</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-truck mr-5"></i>Gatepass</a>
            <ul>
                <li>
                    <a class="" href="{{route('gatepass.index')}}">Index Gatepass</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
@endrole

@role('spv')
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="" href="{{route('home')}}" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
        </li>
        <li class="">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-truck mr-5"></i>Gatepass</a>
            <ul>
                <li>
                    <a class="" href="{{route('gatepass.index')}}">Gatepass Masuk</a>
                </li>
                <li>
                    <a class="" href="{{route('gatepass.masuk')}}">Gatepass Index </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
@endrole

@role('manager')
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="" href="{{route('home')}}" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
        </li>
        <li class="">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-truck mr-5"></i>Gatepass</a>
            <ul>
                <li>
                    <a class="" href="{{route('gatepass.index')}}">Gatepass Masuk</a>
                </li>
                <li>
                    <a class="" href="{{route('gatepass.masuk')}}">Gatepass Index</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
@endrole

@role('authorized_manager')
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="" href="{{route('home')}}" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
        </li>
        <li class="">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-truck mr-5"></i>Gatepass</a>
            <ul>
                <li>
                    <a class="" href="{{route('gatepass.index')}}">Gatepass Masuk</a>
                </li>
                <li>
                    <a class="" href="{{route('gatepass.masuk')}}">Gatepass Index</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
@endrole

@role('security')
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="" href="{{route('home')}}" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
        </li>
        <li class="">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-truck mr-5"></i>Gatepass</a>
            <ul>
                <li>
                    <a class="" href="{{route('gatepass.index')}}">Gatepass Masuk</a>
                </li>
                <li>
                    <a class="" href="{{route('gatepass.masuk')}}">Gatepass Index</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
@endrole

