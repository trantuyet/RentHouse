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
                            <a href="" class="listing-img-container">
                                <div class="listing-badges">
                                    <span>For Sale</span>
                                </div>
                                <div class="listing-img-content">
                                    <span
                                        class="listing-price">{{number_format($house->pricePerDay,0,",",".")}}<i> VNĐ </i></span>
                                    <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                    <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                </div>
                                    <img src="{{asset($house->image)}}">
                            </a>
                            <div class="listing-content">
                                <div class="listing-title">
                                    <h4><a href="single-property-page-1.html">{{$house->name}}</a></h4>
                                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                       class="listing-address popup-gmaps">
                                        <i class="fa fa-map-marker"></i>
                                        {{$house->address}}
                                    </a>
                                    <a href="single-property-page-1.html" class="details button border">Details</a>
                                </div>
                                <ul class="listing-details">
                                    <li>{{$house->numberOfBedroom}} Bed Room</li>
                                    <li>{{$house->numberOfBathroom}} Bath Room</li>
                                </ul>
                                <div class="listing-footer">
                                    <a href="#"><i class="fa fa-user"></i>{{$house->user_id}}</a>
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
@endsection
