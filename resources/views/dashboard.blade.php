@extends('master')
@section('content')
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Banner
    ================================================== -->
    <div class="parallax" data-background="{{asset('images/house1.jpg')}}" data-color="#36383e"
         data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">
        <div class="parallax-content">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <h2>Find Your Dream Home</h2>

                            <!-- Main Search -->
                            <form class="main-search-form" method="get" action="{{ route('houses.search') }}">
                            @csrf
                            <!-- Type -->
                                <div class="search-type">
                                    <label class="active"><input class="first-tab" name="tab" checked="checked"
                                                                 type="radio" value="0">Tìm kiếm</label>
                                </div>


                                <!-- Box -->
                                <div class="main-search-box">

                                    <!-- Main Search Input -->
                                    <div class="main-search-input larger-input">
                                        <input type="text" name="keyword" class="ico-01"
                                                value="{{ request()->get('keyword') }}"/>
                                        <button type="submit" class="button">Search</button>
                                    </div>

                                    <!-- Row -->
{{--                                    <div class="row with-forms">--}}

{{--                                        <!-- Property Type -->--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <select data-placeholder="Any Type" name="type"--}}
{{--                                                    class="chosen-select-no-single">--}}
{{--                                                <option value="1"  {{ (request()->tab == 1) ? 'selected' : '' }}>Cho thuê </option>--}}
{{--                                                <option value="2"  {{ (request()->tab == 2) ? 'selected' : '' }}>Không cho thuê</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <!-- Min Price -->--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <!-- Select Input -->--}}
{{--                                            <div class="select-input">--}}
{{--                                                <input type="text" name="min-price" placeholder="Min Price"--}}
{{--                                                       data-unit="USD">--}}
{{--                                            </div>--}}
{{--                                            <!-- Select Input / End -->--}}
{{--                                        </div>--}}

{{--                                        <!-- Max Price -->--}}
{{--                                        <div class="col-md-4">--}}

{{--                                            <!-- Select Input -->--}}
{{--                                            <div class="select-input">--}}
{{--                                                <input type="text" placeholder="Max Price" data-unit="USD">--}}
{{--                                            </div>--}}
{{--                                            <!-- Select Input / End -->--}}

{{--                                        </div>--}}

{{--                                    </div>--}}
                                    <!-- Row / End -->


{{--                                    <!-- More Search Options -->--}}
{{--                                    <a href="#" class="more-search-options-trigger" data-open-title="More Options" data-close-title="Less Options"></a>--}}

{{--                                    <div class="more-search-options">--}}
{{--                                        <div class="more-search-options-container">--}}

{{--                                            <!-- Row -->--}}
{{--                                            <div class="row with-forms">--}}

{{--                                                <!-- Min Area -->--}}
{{--                                                <div class="col-md-6">--}}
{{--                                                    <select  class="chosen-select-no-single" >--}}
{{--                                                        <option label="blank"></option>--}}
{{--                                                        <option>Phòng ngủ (Bất kì)</option>--}}
{{--                                                        <option>1</option>--}}
{{--                                                        <option>2</option>--}}
{{--                                                        <option>3</option>--}}
{{--                                                        <option>4</option>--}}
{{--                                                        <option>5</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}

{{--                                                <!-- Max Area -->--}}
{{--                                                <div class="col-md-6">--}}
{{--                                                    <select class="chosen-select-no-single" >--}}
{{--                                                        <option label="blank"></option>--}}
{{--                                                        <option value="">Phòng tắm (Bất kì)</option>--}}
{{--                                                        <option>1</option>--}}
{{--                                                        <option>2</option>--}}
{{--                                                        <option>3</option>--}}
{{--                                                        <option>4</option>--}}
{{--                                                        <option>5</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                            <!-- Row / End -->--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
=======
                                        <input type="text" class="ico-01" id="autocomplete-input"
                                               placeholder="Enter address e.g. street, city and state or zip" value=""/>
                                        <button class="button">Search</button>
                                    </div>

                                    <!-- Row -->
                                    <div class="row with-forms">

                                        <!-- Property Type -->
                                        <div class="col-md-4">
                                            <select data-placeholder="Any Type" class="chosen-select-no-single">
                                                <option>Any Type</option>
                                                <option>Apartments</option>
                                                <option>Houses</option>
                                                <option>Commercial</option>
                                                <option>Garages</option>
                                                <option>Lots</option>
                                            </select>
                                        </div>


                                        <!-- Min Price -->
                                        <div class="col-md-4">

                                            <!-- Select Input -->
                                            <div class="select-input">
                                                <input type="text" placeholder="Min Price" data-unit="USD">
                                            </div>
                                            <!-- Select Input / End -->

                                        </div>


                                        <!-- Max Price -->
                                        <div class="col-md-4">

                                            <!-- Select Input -->
                                            <div class="select-input">
                                                <input type="text" placeholder="Max Price" data-unit="USD">
                                            </div>
                                            <!-- Select Input / End -->

                                        </div>

                                    </div>
                                    <!-- Row / End -->


                                    <!-- More Search Options -->
                                    <a href="#" class="more-search-options-trigger" data-open-title="More Options"
                                       data-close-title="Less Options"></a>

                                    <div class="more-search-options">
                                        <div class="more-search-options-container">

                                            <!-- Row -->
                                            <div class="row with-forms">

                                                <!-- Min Price -->
                                                <div class="col-md-6">

                                                    <!-- Select Input -->
                                                    <div class="select-input">
                                                        <input type="text" placeholder="Min Area" data-unit="Sq Ft">
                                                    </div>
                                                    <!-- Select Input / End -->

                                                </div>

                                                <!-- Max Price -->
                                                <div class="col-md-6">

                                                    <!-- Select Input -->
                                                    <div class="select-input">
                                                        <input type="text" placeholder="Max Area" data-unit="Sq Ft">
                                                    </div>
                                                    <!-- Select Input / End -->

                                                </div>

                                            </div>
                                            <!-- Row / End -->


                                            <!-- Row -->
                                            <div class="row with-forms">

                                                <!-- Min Area -->
                                                <div class="col-md-6">
                                                    <select data-placeholder="Beds" class="chosen-select-no-single">
                                                        <option label="blank"></option>
                                                        <option>Beds (Any)</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <!-- Max Area -->
                                                <div class="col-md-6">
                                                    <select data-placeholder="Baths" class="chosen-select-no-single">
                                                        <option label="blank"></option>
                                                        <option>Baths (Any)</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <!-- Row / End -->


                                            <!-- Checkboxes -->
                                            <div class="checkboxes in-row">

                                                <input id="check-2" type="checkbox" name="check">
                                                <label for="check-2">Air Conditioning</label>

                                                <input id="check-3" type="checkbox" name="check">
                                                <label for="check-3">Swimming Pool</label>

                                                <input id="check-4" type="checkbox" name="check">
                                                <label for="check-4">Central Heating</label>

                                                <input id="check-5" type="checkbox" name="check">
                                                <label for="check-5">Laundry Room</label>


                                                <input id="check-6" type="checkbox" name="check">
                                                <label for="check-6">Gym</label>

                                                <input id="check-7" type="checkbox" name="check">
                                                <label for="check-7">Alarm</label>

                                                <input id="check-8" type="checkbox" name="check">
                                                <label for="check-8">Window Covering</label>

                                            </div>
                                            <!-- Checkboxes / End -->

                                        </div>
                                    </div>
                                    <!-- More Search Options / End -->


                                <!-- Box / End -->

                            </form>
                            <!-- Main Search -->

                        </div>
                        <!-- Main Search Container / End -->
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline margin-bottom-25 margin-top-65">Danh sách nhà cho thuê</h3>
            </div>

            <!-- Carousel -->
            <div class="col-md-12">
                <div class="carousel">

                @foreach($houses as $house)
                    <!-- Listing Item -->
                        <div class="carousel-item">
                            <div class="listing-item">

                                <a href="single-property-page-1.html" class="listing-img-container">
                                    <div class="listing-img-content">
                                        <span class="listing-price">{{ number_format($house->pricePerDay) }} / ngày</span>
                                        <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                    </div>

                                    <div class="listing-carousel">
                                        <div><img src=" {{ ($house->image) ? asset('storage/' . $house->image) : asset('images/blog-post-01.jpg')}}" alt=""></div>
                                        @foreach($house->images as $img)
                                        <div><img src="{{asset('storage/' . $img->image)}}" alt=""></div>
                                        @endforeach
                                    </div>

                                </a>

                                <div class="listing-content">

                                    <div class="listing-title">
                                        <h4><a href="{{ route('houses.showDetail', $house->id) }}">{{ Str::limit($house->name, 20) }}</a></h4>
                                        <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                           class="listing-address popup-gmaps">
                                            <i class="fa fa-map-marker"></i>
                                            {{ $house->address }}
                                        </a>
                                    </div>

                                    <ul class="listing-features">
                                        <li>Phòng ngủ <span>{{ $house->numberOfBedroom }}</span></li>
                                        <li>Phòng tắm <span>{{ $house->numberOfBathroom }}</span></li>
                                    </ul>

                                    <div class="listing-footer">
                                        <a href="#"><i class="fa fa-user"></i> {{ $house->user->name }}</a>
                                        <span><i class="fa fa-calendar-o"></i> {{ $house->created_at->diffForHumans() }}</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Listing Item / End -->
                    @endforeach
                </div>
            </div>
            <!-- Carousel / End -->

        </div>
    </div>



    <!-- Fullwidth Section -->
    <section class="fullwidth margin-top-105" data-background-color="#f7f7f7">

        <!-- Box Headline -->
        <h3 class="headline-box">What are you looking for?</h3>

        <!-- Content -->
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <!-- Icon Box -->
                    <div class="icon-box-1">

                        <div class="icon-container">
                            <i class="im im-icon-Office"></i>
                            <div class="icon-links">
                                <a href="listings-grid-standard-with-sidebar.html">For Sale</a>
                                <a href="listings-grid-standard-with-sidebar.html">For Rent</a>
                            </div>
                        </div>

                        <h3>Apartments</h3>
                        <p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel
                            felis.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- Icon Box -->
                    <div class="icon-box-1">

                        <div class="icon-container">
                            <i class="im im-icon-Home-2"></i>
                            <div class="icon-links">
                                <a href="listings-grid-standard-with-sidebar.html">For Sale</a>
                                <a href="listings-grid-standard-with-sidebar.html">For Rent</a>
                            </div>
                        </div>

                        <h3>Houses</h3>
                        <p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel
                            felis.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- Icon Box -->
                    <div class="icon-box-1">

                        <div class="icon-container">
                            <i class="im im-icon-Car-3"></i>
                            <div class="icon-links">
                                <a href="listings-grid-standard-with-sidebar.html">For Sale</a>
                                <a href="listings-grid-standard-with-sidebar.html">For Rent</a>
                            </div>
                        </div>

                        <h3>Garages</h3>
                        <p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel
                            felis.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- Icon Box -->
                    <div class="icon-box-1">

                        <div class="icon-container">
                            <i class="im im-icon-Clothing-Store"></i>
                            <div class="icon-links">
                                <a href="listings-grid-standard-with-sidebar.html">For Sale</a>
                                <a href="listings-grid-standard-with-sidebar.html">For Rent</a>
                            </div>
                        </div>

                        <h3>Commercial</h3>
                        <p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel
                            felis.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Fullwidth Section / End -->


    <!-- Container -->
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline centered margin-bottom-35 margin-top-10">Most Popular Places <span>Properties In Most Popular Places</span>
                </h3>
            </div>

            <div class="col-md-4">

                <!-- Image Box -->
                <a href="listings-list-with-sidebar.html" class="img-box"
                   data-background-image="images/popular-location-01.jpg">

                    <!-- Badge -->
                    <div class="listing-badges">
                        <span class="featured">Featured</span>
                    </div>

                    <div class="img-box-content visible">
                        <h4>New York </h4>
                        <span>14 Properties</span>
                    </div>
                </a>

            </div>

            <div class="col-md-8">

                <!-- Image Box -->
                <a href="listings-list-with-sidebar.html" class="img-box"
                   data-background-image="images/popular-location-02.jpg">
                    <div class="img-box-content visible">
                        <h4>Los Angeles</h4>
                        <span>24 Properties</span>
                    </div>
                </a>

            </div>

            <div class="col-md-8">

                <!-- Image Box -->
                <a href="listings-list-with-sidebar.html" class="img-box"
                   data-background-image="images/popular-location-03.jpg">
                    <div class="img-box-content visible">
                        <h4>San Francisco </h4>
                        <span>12 Properties</span>
                    </div>
                </a>

            </div>

            <div class="col-md-4">

                <!-- Image Box -->
                <a href="listings-list-with-sidebar.html" class="img-box"
                   data-background-image="images/popular-location-04.jpg">
                    <div class="img-box-content visible">
                        <h4>Miami</h4>
                        <span>9 Properties</span>
                    </div>
                </a>

            </div>

        </div>
    </div>
    <!-- Container / End -->


    <!-- Fullwidth Section -->
    <section class="fullwidth margin-top-95 margin-bottom-0">

        <!-- Box Headline -->
        <h3 class="headline-box">Articles & Tips</h3>

        <div class="container">
            <div class="row">

                <div class="col-md-4">

                    <!-- Blog Post -->
                    <div class="blog-post">

                        <!-- Img -->
                        <a href="blog-post.html" class="post-img">
                            <img src="images/blog-post-01.jpg" alt="">
                        </a>

                        <!-- Content -->
                        <div class="post-content">
                            <h3><a href="#">8 Tips to Help You Finding New Home</a></h3>
                            <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc,
                                rutrum in malesuada vitae. </p>

                            <a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- Blog Post / End -->

                </div>

                <div class="col-md-4">

                    <!-- Blog Post -->
                    <div class="blog-post">

                        <!-- Img -->
                        <a href="blog-post.html" class="post-img">
                            <img src="images/blog-post-02.jpg" alt="">
                        </a>

                        <!-- Content -->
                        <div class="post-content">
                            <h3><a href="#">Bedroom Colors You'll Never Regret</a></h3>
                            <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc,
                                rutrum in malesuada vitae. </p>

                            <a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- Blog Post / End -->

                </div>

                <div class="col-md-4">

                    <!-- Blog Post -->
                    <div class="blog-post">

                        <!-- Img -->
                        <a href="blog-post.html" class="post-img">
                            <img src="images/blog-post-03.jpg" alt="">
                        </a>

                        <!-- Content -->
                        <div class="post-content">
                            <h3><a href="#">What to Do a Year Before Buying Apartment</a></h3>
                            <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc,
                                rutrum in malesuada vitae. </p>

                            <a href="blog-post.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- Blog Post / End -->

                </div>

            </div>
        </div>
    </section>
    <!-- Fullwidth Section / End -->


    <!-- Flip banner -->
    <a href="listings-half-map-grid-standard.html" class="flip-banner parallax"
       data-background="images/flip-banner-bg.jpg" data-color="#274abb" data-color-opacity="0.9" data-img-width="2500"
       data-img-height="1600">
        <div class="flip-banner-content">
            <h2 class="flip-visible">We help people and homes find each other</h2>
            <h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
        </div>
    </a>
    <!-- Flip banner / End -->
@endsection


