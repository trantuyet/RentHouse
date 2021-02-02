@extends('master')
@section('content')
    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row fullwidth-layout">

            <div class="col-md-12">
                <!-- Listings -->
                <div class="listings-container list-layout">
                @foreach($houses as $house)
                    <!-- Listing Item -->
                        <div class="listing-item">

                            <a href="single-property-page-1.html" class="listing-img-container">

                                <div class="listing-badges">
                                    <span>For Sale</span>
                                </div>

                                <div class="listing-img-content">
                                    <span
                                        class="listing-price">{{number_format($house->pricePerDay,0,",",".")}}<i> VNĐ </i></span>
                                    <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                    <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                </div>

                                <div class="listing-carousel">

                                        <img>{{$house->image}}

                                </div>
                            </a>

                            <div class="listing-content">

                                <div class="listing-title">
                                    <h4><a href="single-property-page-1.html">Eagle Apartments</a></h4>
                                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                       class="listing-address popup-gmaps">
                                        <i class="fa fa-map-marker"></i>
                                        9364 School St. Lynchburg, NY
                                    </a>

                                    <a href="single-property-page-1.html" class="details button border">Details</a>
                                </div>

                                <ul class="listing-details">
                                    <li>530 sq ft</li>
                                    <li>1 Bedroom</li>
                                    <li>3 Rooms</li>
                                    <li>1 Bathroom</li>
                                </ul>

                                <div class="listing-footer">
                                    <a href="#"><i class="fa fa-user"></i> David Strozier</a>
                                    <span><i class="fa fa-calendar-o"></i> 1 day ago</span>
                                </div>

                            </div>

                        </div>
                @endforeach
                <!-- Listing Item / End -->
                </div>
                <!-- Listings Container / End -->

                <div class="clearfix"></div>
                <!-- Pagination -->
                <div class="pagination-container margin-top-20">
                    <nav class="pagination">
                        <ul>
                            <li><a href="#" class="current-page">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="blank">...</li>
                            <li><a href="#">22</a></li>
                        </ul>
                    </nav>

                    <nav class="pagination-next-prev">
                        <ul>
                            <li><a href="#" class="prev">Previous</a></li>
                            <li><a href="#" class="next">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination / End -->
            </div>
        </div>
    </div>






{{--    <div class="container">--}}
{{--        <div class="row sticky-wrapper">--}}

{{--            <div class="col-md-8">--}}
{{--                <!-- Listings -->--}}
{{--                <div class="listings-container grid-layout">--}}

{{--                    <!-- Listing Item -->--}}
{{--                    <div class="box-background-1">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="boxIn-background-1">--}}
{{--                                        <div class="table-responsive">--}}
{{--                                            <table class="table table-striped">--}}
{{--                                                <thead>--}}
{{--                                                <tr>--}}
{{--                                                    <th scope="col">Tên phòng cho thuê</th>--}}
{{--                                                    <th scope="col">Địa chỉ</th>--}}
{{--                                                    <th scope="col">Người thuê</th>--}}
{{--                                                    <th scope="col">Số phòng ngủ</th>--}}
{{--                                                    <th scope="col">Số phòng tắm</th>--}}
{{--                                                    <th scope="col">Giá tiền thuê theo ngày</th>--}}
{{--                                                </tr>--}}
{{--                                                </thead>--}}
{{--                                                <tbody>--}}
{{--                                                <thead>--}}
{{--                                                @foreach ($houses as $house)--}}
{{--                                                    <tr>--}}
{{--                                                        <th scope="col">{{$house->name}}</th>--}}
{{--                                                        <th scope="col">{{$house->address}}</th>--}}
{{--                                                        <th scope="col">{{$house->user_id}}</th>--}}
{{--                                                        <th scope="col">{{$house->numberOfBedroom}}</th>--}}
{{--                                                        <th scope="col">{{$house->numberOfBathroom}}</th>--}}
{{--                                                        <th scope="col">{{number_format($house->pricePerDay,0,",",".")}}</th>--}}
{{--                                                    </tr>--}}
{{--                                                @endforeach--}}
{{--                                                </thead>--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
