@extends('master')
@section('content')

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
