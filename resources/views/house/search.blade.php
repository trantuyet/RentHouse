@extends('master')
@section('content')
    <section class="search margin-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Title -->
                    <h3 class="search-title">Search</h3>

                    <!-- Form -->
                    <div class="main-search-box no-shadow">

                        <form action="{{ route('houses.search') }}" method="GET">
                            @csrf
                            <div class="row with-forms">

                                <!-- Status -->
                                <div class="col-md-3">
                                    <select name="tab"  class="chosen-select-no-single">
                                        <option value="1" {{ (request()->tab == 1) ? 'selected' : '' }}>Cho thuê
                                        </option>
                                        <option value="2" {{ (request()->tab == 2) ? 'selected' : '' }}>Không cho thuê
                                        </option>
                                    </select>
                                </div>

                                <!-- Property Type -->
                                <div class="col-md-3">
                                    <select  name="type" class="chosen-select-no-single">

                                        <option value="1" {{ (request()->type == 1) ? 'selected' : '' }}>Chung cư</option>
                                        <option value="2" {{ (request()->type == 2) ? 'selected' : '' }}>Nhà đất
                                        </option>
                                    </select>
                                </div>

{{--                                <!-- Min Price -->--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <!-- Select Input -->--}}
{{--                                    <div class="select-input">--}}
{{--                                        <input type="text" name="min_price" placeholder="Giá Thấp Nhất"--}}
{{--                                               data-unit="VND" {{(request()->get('min_prince'))}}>--}}
{{--                                    </div>--}}
{{--                                    <!-- Select Input / End -->--}}
{{--                                </div>--}}

{{--                                <!-- Max Price -->--}}
{{--                                <div class="col-md-4">--}}

{{--                                    <!-- Select Input -->--}}
{{--                                    <div class="select-input">--}}
{{--                                        <input type="text" name="max_prince" placeholder="Giá Cao Nhất" data-unit="VND" {{(request()->get('max_prince'))}}>--}}
{{--                                    </div>--}}
{{--                                    <!-- Select Input / End -->--}}

{{--                                </div>--}}

                                <!-- Main Search Input -->
                                <div class="col-md-6">
                                    <div class="main-search-input">
                                        <input type="text" name="keyword" placeholder="Thành Phố"
                                               value="{{ request()->get('keyword') }}"/>
                                        <button type="submit" class="button">Tìm Kiếm</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- Box / End -->
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row fullwidth-layout">

            <div class="col-md-12">

                <!-- Sorting / Layout Switcher -->
                <div class="row margin-bottom-15">

                    <div class="col-md-6">
                        <!-- Sort by -->
                        <div class="sort-by">
                            <label>Sort by:</label>

                            <div class="sort-by-select">
                                <select data-placeholder="Default order" class="chosen-select-no-single">
                                    <option>Default Order</option>
                                    <option>Price Low to High</option>
                                    <option>Price High to Low</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Layout Switcher -->
                        <div class="layout-switcher">
                            <a href="#" class="list"><i class="fa fa-th-list"></i></a>
                            <a href="#" class="grid"><i class="fa fa-th-large"></i></a>
                            <a href="#" class="grid-three"><i class="fa fa-th"></i></a>
                        </div>
                    </div>
                </div>


                <!-- Listings -->
                <div class="listings-container list-layout">
                    @forelse($houses as $house)
                        <div class="listing-item">

                            <a href="" class="listing-img-container">

                                <div class="listing-badges">
                                    <span class="featured">{{$house->getCategorys()}} </span>
                                    <span >{{ $house->getStatus() }}</span>
                                </div>

                                <div class="listing-img-content">
                                <span class="listing-price">{{ number_format($house->pricePerDay) }} VND
                                </span>
                                    <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                    <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                </div>

                                <div class="listing-carousel">

                                    <div><img src=" {{ ($house->image) ? asset('storage/' . $house->image) : asset('images/blog-post-01.jpg')}}" alt=""></div>

                                </div>

                            </a>

                            <div class="listing-content">

                                <div class="listing-title">
                                    <h4><a href="">{{ $house->name }}</a></h4>
                                    <a href=""
                                       class="listing-address popup-gmaps">
                                        <i class="fa fa-map-marker"></i>
                                        {{ $house->address}}
                                    </a>

                                    <a href="" class="details button border">Xem chi tiết</a>
                                </div>

                                <ul class="listing-details">
                                    <li>{{$house->numberOfBedroom}} Phòng ngủ</li>
                                    <li>{{$house->numberOfBathroom}} Phòng tắm</li>
                                </ul>

                                <div class="listing-footer">
                                    <a href="#"><i class="fa fa-user"></i> {{ $house->user->name }}</a>
{{--                                    <span><i class="fa fa-calendar-o"></i> {{ $house->diffForHumans() }}</span>--}}
                                </div>

                            </div>

                        </div>
                    @empty
                    @endforelse
                </div>
                <!-- Listings Container / End -->

                <div class="clearfix"></div>
            </div>

        </div>
    </div>
@endsection
