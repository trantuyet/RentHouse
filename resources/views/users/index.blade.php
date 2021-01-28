<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Findeo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


    <!-- Compare Properties Widget
    ================================================== -->
    <!-- Compare Properties Widget / End -->


    <!-- Header Container
    ================================================== -->
    @include('core.topbar')
    <div class="clearfix"></div>
    <!-- Header Container / End -->



    <!-- Titlebar
    ================================================== -->
    <div id="titlebar" class="submit-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-circle"></i> Add Property</h2>
                </div>
            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row">

            <!-- Submit Page -->
            <div class="col-md-12">
                <div class="submit-page">

                    <div class="notification notice large margin-bottom-55">
                        <h4>Don't Have an Account?</h4>
                        <p>If you don't have an account you can create one by entering your email address in contact details section. A password will be automatically emailed to you.</p>
                    </div>

                    <!-- Section -->
                    <h3>Basic Information</h3>
                    <div class="submit-section">

                        <!-- Title -->
                        <div class="form">
                            <h5>Property Title <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
                            <input class="search-field" type="text" value=""/>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Status -->
                            <div class="col-md-6">
                                <h5>Status</h5>
                                <select class="chosen-select-no-single" >
                                    <option label="blank"></option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>

                            <!-- Type -->
                            <div class="col-md-6">
                                <h5>Type</h5>
                                <select class="chosen-select-no-single" >
                                    <option label="blank"></option>
                                    <option>Apartment</option>
                                    <option>House</option>
                                    <option>Commercial</option>
                                    <option>Garage</option>
                                    <option>Lot</option>
                                </select>
                            </div>

                        </div>
                        <!-- Row / End -->


                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Price -->
                            <div class="col-md-4">
                                <h5>Price <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
                                <div class="select-input disabled-first-option">
                                    <input type="text" data-unit="USD">
                                </div>
                            </div>

                            <!-- Area -->
                            <div class="col-md-4">
                                <h5>Area</h5>
                                <div class="select-input disabled-first-option">
                                    <input type="text" data-unit="Sq Ft">
                                </div>
                            </div>

                            <!-- Rooms -->
                            <div class="col-md-4">
                                <h5>Rooms</h5>
                                <select class="chosen-select-no-single" >
                                    <option label="blank"></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>More than 5</option>
                                </select>
                            </div>

                        </div>
                        <!-- Row / End -->

                    </div>
                    <!-- Section / End -->


                    <!-- Section -->
                    <h3>Gallery</h3>
                    <div class="submit-section">
                        <form action="/file-upload" class="dropzone" ></form>
                    </div>
                    <!-- Section / End -->


                    <!-- Section -->
                    <h3>Location</h3>
                    <div class="submit-section">

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Address -->
                            <div class="col-md-6">
                                <h5>Address</h5>
                                <input type="text">
                            </div>

                            <!-- City -->
                            <div class="col-md-6">
                                <h5>City</h5>
                                <input type="text">
                            </div>

                            <!-- City -->
                            <div class="col-md-6">
                                <h5>State</h5>
                                <input type="text">
                            </div>

                            <!-- Zip-Code -->
                            <div class="col-md-6">
                                <h5>Zip-Code</h5>
                                <input type="text">
                            </div>

                        </div>
                        <!-- Row / End -->

                    </div>
                    <!-- Section / End -->


                    <!-- Section -->
                    <h3>Detailed Information</h3>
                    <div class="submit-section">

                        <!-- Description -->
                        <div class="form">
                            <h5>Description</h5>
                            <textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Age of Home -->
                            <div class="col-md-4">
                                <h5>Building Age <span>(optional)</span></h5>
                                <select class="chosen-select-no-single" >
                                    <option label="blank"></option>
                                    <option>0 - 1 Years</option>
                                    <option>0 - 5 Years</option>
                                    <option>0 - 10 Years</option>
                                    <option>0 - 20 Years</option>
                                    <option>0 - 50 Years</option>
                                    <option>50 + Years</option>
                                </select>
                            </div>

                            <!-- Beds -->
                            <div class="col-md-4">
                                <h5>Bedrooms <span>(optional)</span></h5>
                                <select class="chosen-select-no-single" >
                                    <option label="blank"></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <!-- Baths -->
                            <div class="col-md-4">
                                <h5>Bathrooms <span>(optional)</span></h5>
                                <select class="chosen-select-no-single" >
                                    <option label="blank"></option>
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
                        <h5 class="margin-top-30">Other Features <span>(optional)</span></h5>
                        <div class="checkboxes in-row margin-bottom-20">

                            <input id="check-2" type="checkbox" name="check">
                            <label for="check-2">Air Conditioning</label>

                            <input id="check-3" type="checkbox" name="check">
                            <label for="check-3">Swimming Pool</label>

                            <input id="check-4" type="checkbox" name="check" >
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
                    <!-- Section / End -->


                    <!-- Section -->
                    <h3>Contact Details</h3>
                    <div class="submit-section">

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Name -->
                            <div class="col-md-4">
                                <h5>Name</h5>
                                <input type="text">
                            </div>

                            <!-- Email -->
                            <div class="col-md-4">
                                <h5>E-Mail</h5>
                                <input type="text">
                            </div>

                            <!-- Name -->
                            <div class="col-md-4">
                                <h5>Phone <span>(optional)</span></h5>
                                <input type="text">
                            </div>

                        </div>
                        <!-- Row / End -->

                    </div>
                    <!-- Section / End -->


                    <div class="divider"></div>
                    <a href="#" class="button preview margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></a>

                </div>
            </div>

        </div>
    </div>
    <!-- Footer
    ================================================== -->
    <div class="margin-top-55"></div>

    <div id="footer" class="sticky-footer">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img class="footer-logo" src="images/logo.png" alt="">
                    <br><br>
                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
                </div>

                <div class="col-md-4 col-sm-6 ">
                    <h4>Helpful Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Add Property</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>

                    <ul class="footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Our Agents</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-3  col-sm-12">
                    <h4>Contact Us</h4>
                    <div class="text-widget">
                        <span>12345 Little Lonsdale St, Melbourne</span> <br>
                        Phone: <span>(123) 123-456 </span><br>
                        E-Mail:<span> <a href="#">office@example.com</a> </span><br>
                    </div>

                    <ul class="social-icons margin-top-20">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                    </ul>

                </div>

            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights">© 2016 Findeo. All Rights Reserved.</div>
                </div>
            </div>

        </div>

    </div>
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

    <!-- DropZone | Documentation: http://dropzonejs.com -->
    <script type="text/javascript" src="{{asset('scripts/dropzone.js')}}"></script>
    <script>
        $(".dropzone").dropzone({
            dictDefaultMessage: "<i class='sl sl-icon-plus'></i> Click here or drop files to upload",
        });
    </script>





</div>
<!-- Wrapper / End -->


</body>
</html>
