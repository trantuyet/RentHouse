<div id="header">
    <div class="container">
        <div class="left-side">
            <div id="logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <div class="mmenu-trigger">
                <button class="hamburger hamburger--collapse" type="button">
                  <span class="hamburger-box">
                     <span class="hamburger-inner"></span>
                  </span>
                </button>
            </div>
            <nav id="navigation" class="style-1">
                <ul id="responsive">
                    <li>
                        <a class="current" href="{{route('home')}}">Trang Chủ</a>
                    </li>
                    <li>
                        <a href="{{route('listHouse')}}">Danh Sách Nhà</a>
                    </li>
                    <li>
                        <a href="{{route('houses.search')}}">Tìm Kiếm Nhà</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </div>
        <div class="right-side">

            <div class="header-widget">
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <a href="{{route('showFormRes')}}" class="sign-in"><i class="fa fa-user"></i> Đăng ký</a>
                    <a href="{{route('login')}}" class="sign-in"><i class="fa fa-user"></i> Đăng nhập</a>
                @else
                    <div class="header-widget">

                        <!-- User Menu -->
                        <div class="user-menu">
                            <div class="user-name"><span><img src="" alt=""></span>Xin chào, {{ \Illuminate\Support\Facades\Auth::user()->name }}!</div>
                            <ul>
                                <li><a href="{{ route('me.profile') }}"><i class="sl sl-icon-user"></i> Cập nhật thông tin</a></li>
                                <li><a href="{{ route('me.getListHouseOfUser') }}"><i class="sl sl-icon-star"></i> Đã xem</a></li>
                                <li><a href="{{ route('me.getListHouseOfUser') }}"><i class="sl sl-icon-docs"></i> Nhà tôi đã đăng</a></li>
                                <li><a href="{{ route('logout') }}"><i class="sl sl-icon-power"></i> Đăng xuât</a></li>
                            </ul>
                        </div>
                        <a href="{{ route('me.showAddHouse') }}" class="button border">Thêm nhà mới</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
