@extends('master')
@section('content')
    <div class="container">
        <div class="row">


            <!-- Widget -->
            <div class="col-md-4">
                <div class="sidebar left">

                    <div class="my-account-nav-container">

                        <ul class="my-account-nav">
                            <li class="sub-nav-title">Manage Account</li>
                            <li><a href="my-profile.html"><i class="sl sl-icon-user"></i> Thông tin cá nhân</a></li>
                            <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Bookmarked Listings</a></li>
                        </ul>

                        <ul class="my-account-nav">
                            <li class="sub-nav-title">Manage Listings</li>
                            <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Properties</a></li>
                            <li><a href="submit-property.html"><i class="sl sl-icon-action-redo"></i> Submit New
                                    Property</a></li>
                        </ul>

                        <ul class="my-account-nav">
                            <li><a href="{{route('changePassword')}}" class="current"><i class="sl sl-icon-lock"></i> Change
                                    Password</a></li>
                            <li><a href="{{route('logout')}}"><i class="sl sl-icon-power"></i> Log Out</a></li>
                        </ul>

                    </div>

                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6  my-profile">
                        <h4 class="margin-top-0 margin-bottom-30">Change Password</h4>
                        <form action="{{route('updatePassword')}}" method="post">
                            @csrf
                            <label>Current Password</label>
                            <input id="current-password" name="current-password" value="{{old('current-password')}}"
                                   class="form-control" type="password">
                            @error('current-password')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <label>New Password</label>
                            <input id="new-password" name="new-password" value="{{old('new-password')}}"
                                   class="form-control" type="password">
                            @error('new-password')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <label>Confirm New Password</label>
                            <input id="new-password-confirm" value="{{old('new-password-confirm')}}"
                                   name="new-password-confirm" class="form-control" type="password">
                            @error('new-password-confirm')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <button class="margin-top-20 button">Save Changes</button>


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
