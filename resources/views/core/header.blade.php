<div id="header">
    <div class="container">

        <!-- Left Side Content -->
        <div class="left-side">

            <!-- Logo -->
            <div id="logo">
                <a href=""><img src="{{asset('images/logo.png')}}" alt=""></a>
            </div>


            <!-- Mobile Navigation -->
            <div class="mmenu-trigger">
                <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                </button>
            </div>


            <!-- Main Navigation -->
            <nav id="navigation" class="style-1">
                <ul id="responsive">

                    <li><a class="current" href="#">Home</a>
                        <ul>
                            <li><a href="">Home 1</a></li>

                        </ul>
                    </li>

                    <li><a href="#">Listings</a>
                        <ul>
                            <li><a href="#">List Layout</a>
                                <ul>
                                    <li><a href="listings-list-with-sidebar.html">With Sidebar</a></li>
                                    <li><a href="listings-list-with-map.html">With Map</a></li>
                                    <li><a href="listings-list--width.html">Full Width</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Grid Layout</a>
                                <ul>
                                    <li><a href="listings-grid-standard-with-sidebar.html">Standard With Sidebar</a></li>
                                    <li><a href="listings-grid-compact-with-sidebar.html">Compact With Sidebar</a></li>
                                    <li><a href="listings-grid-with-map.html">With Map</a></li>
                                    <li><a href="listings-grid-full-width.html">Full Width</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Half Map</a>
                                <ul>
                                    <li><a href="listings-half-map-list.html">List Layout</a></li>
                                    <li><a href="listings-half-map-grid-standard.html">Grid Standard Layout</a></li>
                                    <li><a href="listings-half-map-grid-compact.html">Grid Compact Layout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#">Features</a>
                        <ul>
                            <li><a href="#">Single Properties</a>
                                <ul>
                                    <li><a href="single-property-page-1.html">Property Style 1</a></li>
                                    <li><a href="single-property-page-2.html">Property Style 2</a></li>
                                    <li><a href="single-property-page-3.html">Property Style 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Search Styles</a>
                                <ul>
                                    <li><a href="index.html">Home Search 1</a></li>
                                    <li><a href="index-2.html">Home Search 2</a></li>
                                    <li><a href="index-3.html">Home Search 3</a></li>
                                    <li><a href="listings-list-full-width.html">Advanced Style</a></li>
                                    <li><a href="listings-list-with-sidebar.html">Sidebar Search</a></li>
                                </ul>
                            </li>
                            <li><a href="#">My Account</a>
                                <ul>
                                    <li><a href="my-profile.html">My Profile</a></li>
                                    <li><a href="my-bookmarks.html">Bookmarked Listings</a></li>
                                    <li><a href="my-properties.html">My Properties</a></li>
                                    <li><a href="change-password.html">Change Password</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Agencies & Agents</a>
                                <ul>
                                    <li><a href="agencies-list.html">Agencies List</a></li>
                                    <li><a href="agency-page.html">Agency Page</a></li>
                                    <li><a href="agents-list.html">Agents List</a></li>
                                    <li><a href="agent-page.html">Agent Page</a></li>
                                </ul>
                            </li>

                            <li><a href="compare-properties.html">Compare Properties</a></li>
                            <li><a href="submit-property.html">Submit Property</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-post.html">Blog Post</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="icons.html">Icons</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <div class="clearfix"></div>
            <!-- Main Navigation / End -->

        </div>
        <!-- Left Side Content / End -->

        <!-- Right Side Content / End -->
        <div class="right-side">
            <!-- Header Widget -->
            <div class="header-widget">
                @if(!\Illuminate\Support\Facades\Session::has('login'))
                <a href="{{route('showFormRes')}}" class="sign-in"><i class="fa fa-user"></i> Register</a>
                <a href="{{route('login')}}" class="sign-in"><i class="fa fa-user"></i> Login</a>
                @else
                    <a href="{{route('logout')}}" class="sign-in">Logout</a>
                @endif
            </div>
            <!-- Header Widget / End -->
        </div>
        <!-- Right Side Content / End -->

    </div>
</div>
