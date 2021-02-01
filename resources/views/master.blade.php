<!DOCTYPE html>
<html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Rent House Unlimited </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon.css')}}">
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="custom-style.css">--}}


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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</div>
<!-- Wrapper / End -->


</body>
</html>
