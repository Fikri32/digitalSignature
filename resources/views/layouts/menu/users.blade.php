@role('admin')
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="" href="" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
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
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-truck mr-5"></i>GetPass</a>
            <ul>
                <li>
                    <a class="" href="{{route('gatepass.index')}}">Index GetPass</a>
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
            <a class="" href="" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
        </li>
        <li class="">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-truck mr-5"></i>GetPass</a>
            <ul>
                <li>
                    <a class="" href="{{route('gatepass.index')}}">Index GetPass</a>
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
            <a class="" href="" class=""><i class="si si-compass"></i><span class="sidebar-mini-hide">Beranda</span></a>
        </li>
        <li class="">
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-truck mr-5"></i>GetPass</a>
            <ul>
                <li>
                    <a class="" href="{{route('gatepass.index')}}">Index GetPass</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
@endrole

