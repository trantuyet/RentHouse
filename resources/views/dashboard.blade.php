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
                            <h2>Chúng tôi có nhà mà bạn đang tìm kiếm</h2>

                            <!-- Main Search -->
                            <form class="main-search-form">

                                <!-- Type -->
                                <div class="search-type">
                                    <label class="active"><input class="first-tab" name="tab" checked="checked"
                                                                 type="radio">Tìm kiếm nhà</label>
                                    <div class="search-type-arrow"></div>
                                </div>


                                <!-- Box -->
                                <div class="main-search-box">

                                    <!-- Main Search Input -->
                                    <div class="main-search-input larger-input">
                                        <input type="text" class="ico-01" id="autocomplete-input"
                                               placeholder="Enter address e.g. street, city and state or zip" value=""/>
                                        <button class="button">Tìm kiếm</button>
                                    </div>

                                    <!-- Row -->
                                    <div class="row with-forms">

                                        <!-- Property Type -->
                                        <div class="col-md-4">
                                            <select data-placeholder="Tất cả" class="chosen-select-no-single">
                                                <option>Tất cả</option>
                                                <option>Chung cư</option>
                                                <option>Nhà ở</option>
                                                <option>Căn hộ</option>
                                                <option>Khác</option>
                                            </select>
                                        </div>


{{--                                        <!-- Min Price -->--}}
{{--                                        <div class="col-md-4">--}}

{{--                                            <!-- Select Input -->--}}
{{--                                            <div class="select-input">--}}
{{--                                                <input type="text" placeholder="Min Price" data-unit="USD">--}}
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

                                    </div>
                                    <!-- Row / End -->


                                    <!-- More Search Options -->
                                    <a href="#" class="more-search-options-trigger" data-open-title="Thêm"
                                       data-close-title="Ít hơn"></a>

                                    <div class="more-search-options">
                                        <div class="more-search-options-container">

                                            <!-- Row -->
                                            <div class="row with-forms">

                                                <!-- Min Price -->
                                                <div class="col-md-6">

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
                                                    <select data-placeholder="Số lượng phòng ngủ" class="chosen-select-no-single">
                                                        <option label="blank"></option>
                                                        <option>Số lượng phòng ngủ</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <!-- Max Area -->
                                                <div class="col-md-6">
                                                    <select data-placeholder="Số lượng phòng tắm" class="chosen-select-no-single">
                                                        <option label="blank"></option>
                                                        <option>Số lượng phòng tắm</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <!-- Row / End -->


                                        </div>
                                    </div>
                                    <!-- More Search Options / End -->


                                </div>
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
                                        <div><img src="{{asset('/' . $img->image)}}" alt=""></div>
                                        @endforeach
                                    </div>

                                </a>

                                <div class="listing-content">

                                    <div class="listing-title">
                                        <h4><a href="{{ route('houses.showDetail', $house->id) }}">{{ Str::limit($house->name, 23) }}</a></h4>
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
        <h3 class="headline-box">Bạn đang muốn tìm nhà?</h3>

        <!-- Content -->
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <!-- Icon Box -->
                    <div class="icon-box-1">

                        <div class="icon-container">
                            <i class="im im-icon-Office"></i>
                            <div class="icon-links">
                                <a href="listings-grid-standard-with-sidebar.html">Chung cư</a>
                                <a href="listings-grid-standard-with-sidebar.html">Nhà ở</a>
                            </div>
                        </div>

                        <h3>Chung cư</h3>
                        <p>Bạn đang muốn tìm chung cư, hãy đến với trang web của chúng tôi</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- Icon Box -->
                    <div class="icon-box-1">
                        <div class="icon-container">
                            <i class="im im-icon-Home-2"></i>
                            <div class="icon-links">
                                <a href="listings-grid-standard-with-sidebar.html">Chung cư</a>
                                <a href="listings-grid-standard-with-sidebar.html">Căn hộ</a>
                            </div>
                        </div>

                        <h3>Căn hộ</h3>
                        <p>Bạn đang muốn tìm kiếm nhà ở, hãy đến với trang web của chúng tôi</p>
                    </div>
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
            <h2 class="flip-visible">Chúng tôi giúp mọi người và những ngôi nhà tìm đến nhau</h2>
        </div>
    </a>
    <!-- Flip banner / End -->
@endsection


