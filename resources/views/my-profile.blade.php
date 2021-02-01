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
                            <li><a href="{{route('myProfile')}}" class="current"><i class="sl sl-icon-user"></i> Thông tin cá nhân</a></li>
                            <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Danh sách nhà đã được thuê</a></li>
                        </ul>

                        <ul class="my-account-nav">
                            <li class="sub-nav-title">Manage Listings</li>
                            <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> Những ngôi nhà của tôi</a></li>
                            <li><a href="submit-property.html"><i class="sl sl-icon-action-redo"></i> Submit New Property</a></li>
                        </ul>

                        <ul class="my-account-nav">
                            <li><a href="change-password.html"><i class="sl sl-icon-lock"></i> Change Password</a></li>
                            <li><a href="#"><i class="sl sl-icon-power"></i> Log Out</a></li>
                        </ul>

                    </div>

                </div>
            </div>

            <div class="col-md-8">
                <div class="row">

                    <form action="{{route('profileUpdate')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="col-md-8 my-profile">
                        <h4 class="margin-top-0 margin-bottom-30">Thông tin cá nhân</h4>

                        <label>Your Name</label>
                        <input value="{{$user->name}}" name="name" type="text">

                        <label>Email</label>
                        <input  disabled value="{{$user->email}}" name="email" type="text">

                        <label>Phone</label>
                        <input value="{{$user->phone}}" name="phone" type="text">
                        <label>Address</label>
                        <input value="{{$user->address}}" name="address" type="text">
                        <button class="button margin-top-20 margin-bottom-20" type="submit">Save Changes</button>
                    </div>

                    <div class="col-md-4">
                        <!-- Avatar -->
                        <div class="edit-profile-photo">
                            <img src="{{asset($user->image)}}" alt="">
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                    <input type="file" class="upload" name="image" />
                                </div>
                            </div>
                        </div>

                    </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
