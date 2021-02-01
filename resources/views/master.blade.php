<!DOCTYPE html>
<html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Rent House Limited </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


    <!-- Compare Properties Widget
    ================================================== -->
    <div class="compare-slide-menu">

        <div class="csm-trigger"></div>

        <div class="csm-content">
            <h4>Compare Properties
                <div class="csm-mobile-trigger"></div>
            </h4>

            <div class="csm-properties">

                <!-- Property -->
                <div class="listing-item compact">
                    <a href="single-property-page-2.html" class="listing-img-container">
                        <div class="remove-from-compare"><i class="fa fa-close"></i></div>
                        <div class="listing-badges">
                            <span>For Sale</span>
                        </div>
                        <div class="listing-img-content">
                            <span class="listing-compact-title">Eagle Apartments <i>$420,000</i></span>
                        </div>
                        <img src="{{asset('images/listing-01.jpg')}}" alt="">
                    </a>
                </div>

                <!-- Property -->
                <div class="listing-item compact">
                    <a href="single-property-page-2.html" class="listing-img-container">
                        <div class="remove-from-compare"><i class="fa fa-close"></i></div>
                        <div class="listing-badges">
                            <span>For Sale</span>
                        </div>
                        <div class="listing-img-content">
                            <span class="listing-compact-title">Selway Apartments <i>$420,000</i></span>
                        </div>
                        <img src="{{asset('images/listing-03.jpg')}}" alt="">
                    </a>
                </div>

                <!-- Property -->
                <div class="listing-item compact">
                    <a href="single-property-page-2.html" class="listing-img-container">
                        <div class="remove-from-compare"><i class="fa fa-close"></i></div>
                        <div class="listing-badges">
                            <span>For Sale</span>
                        </div>
                        <div class="listing-img-content">
                            <span class="listing-compact-title">Oak Tree Villas <i>$535,000</i></span>
                        </div>
                        <img src="images/listing-05.jpg" alt="">
                    </a>
                </div>

            </div>

            <div class="csm-buttons">
                <a href="compare-properties.html" class="button">Compare</a>
                <a href="#" class="button reset">Reset</a>
            </div>
        </div>

    </div>
    <!-- Compare Properties Widget / End -->


    <!-- Header Container
    ================================================== -->
    <header id="header-container">

        <!-- Topbar -->
        @include('core.topbar')
        <div class="clearfix"></div>
        <!-- Topbar / End -->


        <!-- Header -->
    @include('core.header')
    <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    @yield('content')

    <!-- Footer
    ================================================== -->
    @include('core.footer')
<!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


    <!-- Scripts
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <!-- Google Autocomplete -->
    <script>
        function initAutocomplete() {
            var input = document.getElementById('autocomplete-input');
            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete"></script>


</div>
<!-- Wrapper / End -->


</body>
</html>
