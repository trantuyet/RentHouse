@extends('master')
@section('content')
    <div id="titlebar" class="property-titlebar margin-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('listHouse')}}" class="back-to-listings"></a>
                    <div class="property-title">
                        <h2>{{$house->name}} </span></h2>
                        <span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							{{$house->address}}
						</a>
					</span>
                    </div>

                    <div class="property-pricing">
                        <div class="property-price">{{number_format($house->pricePerDay,0,",",".")}} VNĐ</div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row margin-bottom-50">
            <div class="col-md-12">

                <!-- Slider -->
                <div class="property-slider default">
                    <a href="images/single-property-01.jpg" data-background-image="images/single-property-01.jpg"
                       class="item mfp-gallery"></a>
                </div>

                <!-- Slider Thumbs -->
                <div class="property-slider-nav">
                    <div class="item"><img src="images/single-property-01.jpg" alt=""></div>

                </div>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Property Description -->
            <div class="col-lg-8 col-md-7 sp-content">
                <div class="property-description">

                    <!-- Main Features -->
                    <ul class="property-main-features">
                        <li>Phòng ngủ  <span>{{$house->numberOfBedroom}} </span></li>
                        <li>Phòng tắm <span>{{$house->numberOfBathroom}} </span></li>
                    </ul>


                    <!-- Description -->
                    <h3 class="desc-headline">Miêu tả</h3>
                    <div class="show">
                        <p>{{$house->desc}}</p>
                    </div>
                    <!-- Similar Listings Container / End -->

                </div>
            </div>
            <!-- Property Description / End -->


            <!-- Sidebar -->
            <div class="col-lg-4 col-md-5 sp-sidebar">
                <div class="sidebar sticky right">

                    <!-- Widget -->
                    <div class="widget margin-bottom-30">
                        <button class="widget-button with-tip" data-tip-content="Print"><i
                                class="sl sl-icon-printer"></i>
                        </button>
                        <button class="widget-button with-tip" data-tip-content="Add to Bookmarks"><i
                                class="fa fa-star-o"></i></button>
                        <button class="widget-button with-tip compare-widget-button" data-tip-content="Add to Compare">
                            <i
                                class="icon-compare"></i></button>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Widget / End -->


                    <!-- Booking Widget -->
                    <div class="widget">
                        <div id="booking-widget-anchor" class="boxed-widget booking-widget margin-top-35">
                            <h3><i class="fa fa-calendar-check-o"></i> Thuê nhà </h3>
                            <div class="row with-forms  margin-top-0">
                                <!-- Panel Dropdown -->
                                <div class="col-lg-12">
                                    <div class="panel-dropdown time-slots-dropdown">
                                        <label for="">Ngày đặt phòng</label>
                                        <input class="form-control" type="date" name="checkIn">
                                        <label for="">Ngày trả phòng</label>
                                        <input class="form-control" type="date" name="checkOut">
                                    </div>
                                </div>
                                <!-- Panel Dropdown / End -->

                            </div>

                            <!-- Book Now -->
                            <a href="#" class="button book-now fullwidth margin-top-5">Gửi yêu cầu</a>
                        </div>

                    </div>
                    <!-- Booking Widget / End -->


                    <!-- Widget -->
                    <div class="widget">

                        <!-- Agent Widget -->
                        <div class="agent-widget">
                            <div class="agent-title">
                                <div class="agent-photo">  <img src="{{asset('storage/' . $user->image)}}" alt=""></div>
                                <div class="agent-details">
                                    <h4>{{$user->name}}</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <h3>{{$user->email}}</h3>
                            </div>
                            <h3><i class="sl sl-icon-call-in"></i>{{$user->phone}}</h3>
                        </div>

                        <button class="button fullwidth margin-top-5">Gửi tin nhắn</button>
                    </div>
                    <!-- Agent Widget / End -->

                </div>
                <!-- Widget / End -->


            </div>
        </div>
        <!-- Sidebar / End -->

    </div>
    </div>


    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


    <!-- Scripts
    ================================================== -->
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-migrate-3.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chosen.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/rangeSlider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sticky-kit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/masonry.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mmenu.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/tooltips.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

    <!-- Maps -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="{{asset('js/infobox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/markerclusterer.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/maps.js')}}"></script>

    <!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script>
        // Calendar Init
        $(function () {
            $('#date-picker').daterangepicker({
                "opens": "left",
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                // Disabling Date Ranges
                isInvalidDate: function (date) {
                    // Disabling Date Range
                    var disabled_start = moment('28/01/2021', 'MM/DD/YYYY');
                    var disabled_end = moment('09/06/2022', 'MM/DD/YYYY');
                    return date.isAfter(disabled_start) && date.isBefore(disabled_end);
                }
            });
        });

        // Calendar animation
        $('#date-picker').on('showCalendar.daterangepicker', function (ev, picker) {
            $('.daterangepicker').addClass('calendar-animated');
        });
        $('#date-picker').on('show.daterangepicker', function (ev, picker) {
            $('.daterangepicker').addClass('calendar-visible');
            $('.daterangepicker').removeClass('calendar-hidden');
        });
        $('#date-picker').on('hide.daterangepicker', function (ev, picker) {
            $('.daterangepicker').removeClass('calendar-visible');
            $('.daterangepicker').addClass('calendar-hidden');
        });
    </script>


    <!-- Replacing dropdown placeholder with selected time slot -->
    <script>
        $(".time-slot").each(function () {
            var timeSlot = $(this);
            $(this).find('input').on('change', function () {
                var timeSlotVal = timeSlot.find('strong').text();

                $('.panel-dropdown.time-slots-dropdown a').html(timeSlotVal);
                $('.panel-dropdown').removeClass('active');
            });
        });
    </script>


    </div>
    <!-- Wrapper / End -->


    </body>
    </html>
@endsection
