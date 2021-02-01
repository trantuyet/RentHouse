@extends('master')
@section('content')
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

                    <li><a href="#">Listings</a>

                    </li>

                    <li><a href="#">Features</a>

                    </li>

                    <li><a href="#">Pages</a>


                    <li>
                        <a href="#">Danh Sách Nhà</a>
                    </li>
                    <li>
                        <a href="#">Features</a>
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
                <a href="{{route('showFormRes')}}" class="sign-in">Đăng kí</a>
                <a href="{{route('login')}}" aria-label="Basic checkbox toggle button group" class="sign-in"><i class="btn btn-outline-primary" aria-label="Basic checkbox toggle button group"></i>Đăng nhập</a>
{{--                    <a href="{{route('showFormRes')}}" class="sign-in"><i class="fa fa-user"></i> Đăng ký</a>--}}
{{--                    <a href="{{route('login')}}" class="sign-in"><i class="fa fa-user"></i> Đăng nhập</a>--}}
                    <div class="user-menu">
                        <div class="user-name"><span><img  alt=""></span>
                        </div>
                        <ul>
                            <li><a href="{{route('myProfile')}}"><i class="sl sl-icon-user"></i> Thông tin cá nhân</a></li>
                            <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Danh sách nhà đã cho thuê</a></li>
                            <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Properties</a></li>
                            <li><a href="{{route('logout')}}"><i class="sl sl-icon-power"></i>Dăng xuất</a></li>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
