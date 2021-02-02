<div id="header">
    <div class="container">
        <div class="left-side">
            <div id="logo">
                <a href="">
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
                        <a href="{{route('house.showAddHouse')}}">Thêm nhà</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </div>
        <div class="right-side">
            <div class="header-widget">
                @if(!\Illuminate\Support\Facades\Session::has('login'))
                    <a href="{{route('showFormRes')}}" class="sign-in"><i class="fa fa-user"></i> Đăng ký</a>
                    <a href="{{route('login')}}" class="sign-in"><i class="fa fa-user"></i> Đăng nhập</a>
                @else
                    <div class="user-menu">
                        <div class="user-name"><span><img src="{{asset(\Illuminate\Support\Facades\Auth::user()->image)}}" alt="">{{auth()->user()->name}}</span>
                        </div>
                        <ul>
                            <li><a href="{{route('myProfile')}}"><i class="sl sl-icon-user"></i> Thông tin cá nhân</a>
                            </li>
                            <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Danh sách nhà đã cho
                                    thuê</a></li>
                            <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> Danh sách bạn đã đăng</a>
                            </li>
                            <li><a href="{{route('logout')}}"><i class="sl sl-icon-power"></i>Đăng xuất</a></li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
