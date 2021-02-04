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

                                    <span> @if($house->category_id ==2) Nhà ở </span>

                                    <span>@else Chung cư </span>
                                    @endif

                                </div>

                                <div class="listing-img-content">
                                    <span
                                        class="listing-price">{{number_format($house->pricePerDay,0,",",".")}}<i> VNĐ </i></span>
                                    <span class="like-icon with-tip" data-tip-content="Đánh dấu"></span>
                                    <span class="compare-button with-tip" data-tip-content="So sánh"></span>
                                </div>

                                <div class="listing-carousel">

                                    <img>{{$house->image}}

                                </div>
                            </a>

                            <div class="listing-content">

                                <div class="listing-title">
                                    <h4><a href="{{route('houses.showDetail', $house->id)}}">{{$house->name   }}</a>
                                    </h4>
                                    <a href=""
                                       class="listing-address ">
                                        <i class="fa fa-map-marker"></i>
                                        {{$house->address}}
                                    </a>
                                    <a href="{{route('houses.showDetail', $house->id)}}" class="details button border">Xem
                                        chi tiết</a>
                                </div>

                                <ul class="listing-details">
                                    <li> {{ $house->numberOfBedroom }} Phòng ngủ</li>
                                    <li> {{ $house->numberOfBathroom }} Phòng tắm</li>
                                </ul>

                                <div class="listing-footer">
                                    @if (!! $user = \App\Models\User::find($house->user_id))
                                        <a href="#"><i class="fa fa-user"></i> {{ $user->name}}</a>
                                    @endif
                                    <span><i class="fa fa-calendar-o"></i> {{ $house->create_at }}</span>
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
                        </ul>
                    </nav>

                    <nav class="pagination-next-prev">
                        <ul>
                            <li><a href="#" class="prev">Trang trước</a></li>
                            <li><a href="#" class="next">Trang tiếp theo</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination / End -->
            </div>
        </div>
    </div>
@endsection
