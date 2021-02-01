@extends('master')
@section('content')
    <div class="box-background-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="boxIn-background-1">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Tên phòng cho thuê</th>
                                    <th scope="col">Người thuê</th>
                                    <th scope="col">Ngày đặt phòng</th>
                                    <th scope="col">Ngày trả phòng</th>
                                    <th scope="col">Tổng giá tiền</th>
                                </tr>
                                </thead>
                            </table>
                        </div>

                    </div>


    <div class="container">
        <div class="row sticky-wrapper">

            <div class="col-md-8">
                <!-- Listings -->
                <div class="listings-container grid-layout">

                    <!-- Listing Item -->
                    <div class="listing-item">

                        <a href="single-property-page-1.html" class="listing-img-container">

                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                                <span>For Rent</span>
                            </div>

                            <div class="listing-img-content">
                                <span class="listing-price">$1700 <i>monthly</i></span>
                                <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                            </div>

                            <img src="images/listing-03.jpg" alt="">

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
