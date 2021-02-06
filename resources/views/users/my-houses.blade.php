@extends('master')
@section('content')
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Nhà tôi đã đăng </h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Trang chủ</a></li>
                            <li>Nhà tôi đã đăng</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row">


            <!-- Widget -->
            <div class="col-md-4">
                <div class="sidebar left">

                    <div class="my-account-nav-container">

                        <ul class="my-account-nav">
                            <li class="sub-nav-title">Quản lí tài khoản</li>
                            <li><a href="{{route('me.profile')}}" class="current"><i class="sl sl-icon-user"></i> Thông
                                    tin cá nhân</a></li>
                            <li><a href="{{ route('me.getListHouseOfUser') }}"><i class="sl sl-icon-star"></i> Danh sách nhà đã được
                                    thuê</a></li>
                        </ul>

                        <ul class="my-account-nav">
                            <li class="sub-nav-title">Quản lí danh sách</li>
                            <li><a href="{{ route('me.getListHouseOfUser') }}"><i class="sl sl-icon-docs"></i> Những ngôi nhà của tôi</a>
                            </li>
                            <li><a href="{{route('me.showAddHouse')}}"><i class="sl sl-icon-action-redo"></i> Thêm nhà mới</a></li>
                        </ul>
                        <ul class="my-account-nav">
                            <li><a href="{{route('changePassword')}}"><i class="sl sl-icon-lock"></i>Đổi mật khẩu </a></li>
                            <li><a href="{{ route('logout') }}"><i class="sl sl-icon-power"></i> Đăng xuât</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <table class="manage-table responsive-table">

                    <tr>
                        <th><i class="fa fa-file-text"></i> Nhà đã đăng </th>
                        <th class="expire-date"><i class="fa fa-calendar"></i>Ngày đăng </th>
                        <th></th>
                    </tr>

                    <!-- Item #1 -->
                    @foreach($houses as $house)
                    <tr>
                        <td class="title-container">
                            <div><img src=" {{ ($house->image) ? asset('storage/' . $house->image) : asset('images/blog-post-01.jpg')}}" alt=""></div>

                            <div class="title">
                                <h4><a href="{{route('houses.showDetail', $house->id)}}">{{ $house->name }}</a></h4>
                                <span>{{ $house->address }}</span>
                                <span class="table-property-price">{{ $house->pricePerDay }} /ngày</span>
                            </div>
                        </td>
                        <td class="expire-date">{{ $house->created_at }}</td>
                        <td class="action">
                            <a href="{{route('house.delete',$house->id )}}" class="delete"><i class="fa fa-remove"></i> Xóa</a>
                            <a href="#"><i class="fa fa-pencil"></i> Sửa</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Ẩn </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <a href="{{route('me.showAddHouse')}}" class="margin-top-40 button">Thêm nhà mới</a>
            </div>
        </div>
    </div>
@endsection

