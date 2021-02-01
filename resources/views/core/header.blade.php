<div id="header">
    <div class="container">

        <!-- Left Side Content -->
        <div class="left-side">

            <!-- Logo -->
            <div id="logo">
                <a href=""><img src="{{asset('images/logo.png')}}" alt=""></a>
            </div>


            <!-- Mobile Navigation -->
            <div class="mmenu-trigger">
                <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                </button>
            </div>


            <!-- Main Navigation -->
            <nav id="navigation" class="style-1">
                <ul id="responsive">

                    <li><a class="current" href="{{route('home')}}">Trang Chủ</a>

                    </li>

                    <li><a href="#">Listings</a>

                    </li>

                    <li><a href="#">Features</a>

                    </li>

                    <li><a href="#">Pages</a>

                    </li>

                </ul>
            </nav>
            <div class="clearfix"></div>
            <!-- Main Navigation / End -->

        </div>
        <!-- Left Side Content / End -->

        <!-- Right Side Content / End -->
        <div class="right-side">
            <!-- Header Widget -->
            <div class="header-widget">
                @if(!\Illuminate\Support\Facades\Session::has('login'))
                <a href="{{route('showFormRes')}}" class="sign-in">Đăng kí</a>
                <a href="{{route('login')}}" aria-label="Basic checkbox toggle button group" class="sign-in"><i class="btn btn-outline-primary" aria-label="Basic checkbox toggle button group"></i>Đăng nhập</a>
                @else
                    <div class="user-menu">
                        <div class="user-name"><span><img src="{{asset(\Illuminate\Support\Facades\Auth::user()->image)}}" alt="">{{auth()->user()->name}}</span></div>
                        <ul>
                            <li><a href="{{route('my-profile')}}"><i class="sl sl-icon-user"></i> Thông tin cá nhân</a></li>
                            <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Danh sách nhà đã cho thuê</a></li>
                            <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Properties</a></li>
                            <li><a href="{{route('logout')}}"><i class="sl sl-icon-power"></i>Dăng xuất</a></li>
                        </ul>
                    </div>
                @endif
            </div>
            <!-- Header Widget / End -->
        </div>
        <!-- Right Side Content / End -->

    </div>
</div>
