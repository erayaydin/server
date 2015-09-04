@extends("layout.main")

@section("main")
<div class="all-wrapper fixed-header left-menu">
    <div class="page-header">
        <div class="header-links hidden-xs">
            <div class="dropdown hidden-sm hidden-xs">
                <!-- .alert-animated -->
                <a href="#" data-toggle="dropdown" class="header-link"><i class="fa fa-bolt"></i> Bildirimler <span class="badge">5</span></a>

                <ul class="dropdown-menu dropdown-inbar dropdown-wide">
                    <li><a href="#"><span class="label label-warning">1 min</span> <i class="fa fa-bell"></i> Yeni Destek Maili</a></li>
                    <li><a href="#"><span class="label label-warning">4 min</span> <i class="fa fa-fire"></i> Sunucu Kapalı</a></li>
                    <li><a href="#"><span class="label label-warning">12 min</span> <i class="fa fa-flag-o"></i> Site 403</a></li>
                    <li><a href="#"><span class="label label-warning">15 min</span> <i class="fa fa-smile-o"></i> Yeni Kullanıcı</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <a href="#" class="header-link clearfix" data-toggle="dropdown">
                    <div class="avatar">
                        <img src="assets/images/avatar-small.jpg" alt="">
                    </div>
                    <div class="user-name-w">
                        Eray Aydın <i class="fa fa-caret-down"></i>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-inbar">
                    <li><a href="#"><span class="label label-warning">2</span> <i class="fa fa-envelope"></i> Mesaj</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> Hesap Ayarları</a></li>
                    <li><a href="#"><i class="fa fa-power-off"></i> Çıkış</a></li>
                </ul>
            </div>
        </div>
        <a class="current logo hidden-xs" href="index.html"><i class="fa fa-laptop"></i></a>
        <a class="menu-toggler" href="#"><i class="fa fa-bars"></i></a>
        <h1>Pano</h1>
    </div>
    <div class="side">
        <div class="sidebar-wrapper">
            <ul>
                <li class='current'>
                    <a class='current' href="index.html" data-toggle="tooltip" data-placement="right" title="" data-original-title="Pano">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sub-sidebar-wrapper">
            <ul class="nav">
                <li><a href="#widget_real_time">Gerçek Zamanlı</a></li>
                <li><a href="#widget_last_activites">Son Aktiviteler</a></li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        @yield("content")
    </div>
    <div class="page-footer">
        © 2015 Server Management.
    </div>
</div>
@stop