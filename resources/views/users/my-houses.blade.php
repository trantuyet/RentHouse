@extends('master')
@section('content')
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>My Profile</h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>My Profile</li>
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
                            <li class="sub-nav-title">Manage Account</li>
                            <li><a href="{{route('me.profile')}}" class="current"><i class="sl sl-icon-user"></i> Thông
                                    tin cá nhân</a></li>
                            <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Danh sách nhà đã được
                                    thuê</a></li>
                        </ul>

                        <ul class="my-account-nav">
                            <li class="sub-nav-title">Manage Listings</li>
                            <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> Những ngôi nhà của tôi</a>
                            </li>
                            <li><a href="submit-property.html"><i class="sl sl-icon-action-redo"></i> Submit New
                                    Property</a></li>
                        </ul>

                        <ul class="my-account-nav">
                            <li><a href="{{route('changePassword')}}"><i class="sl sl-icon-lock"></i> Change
                                    Password</a></li>
                            <li><a href="{{ route('logout') }}"><i class="sl sl-icon-power"></i> Log Out</a></li>
                        </ul>

                    </div>

                </div>
            </div>

            <div class="col-md-8">
                <table class="manage-table responsive-table">

                    <tr>
                        <th><i class="fa fa-file-text"></i> Property</th>
                        <th class="expire-date"><i class="fa fa-calendar"></i> Expiration Date</th>
                        <th></th>
                    </tr>

                    <!-- Item #1 -->
                    @foreach($houses as $house)
                    <tr>
                        <td class="title-container">
                            <img src="images/listing-02.jpg" alt="">
                            <div class="title">
                                <h4><a href="#">{{ $house->name }}</a></h4>
                                <span>{{ $house->address }}</span>
                                <span class="table-property-price">{{ $house->pricePerDay }} / ngay</span>
                            </div>
                        </td>
                        <td class="expire-date">{{ $house->created_at }}</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <a href="submit-property.html" class="margin-top-40 button">Submit New Property</a>
            </div>

        </div>
    </div>

@endsection

