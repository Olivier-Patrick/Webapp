
    <!-- header-start -->
    <header>
        <div class="">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ asset('assets1/img/logo.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">home</a></li>
                                            <li><a href="#">Pays<i class="fa fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    
                                                    <li><a href="elements.html">Maroc</a></li>
                                                    <li><a href="single_listings.html">Cote d'ivoire</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">FAQ's</a></li>
                                            <li><a href="#">E-commerce<i class="fa fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
											</li>
											<li><a href="/login" class="genric-btn danger-boder radius">je me connecte</a></li>
											<li><a href="/register" class="genric-btn danger-boder radius">je m'inscris</a></li>
											
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
										<a href="{{route('post.create_post')}}">Publier une annonce</a>
                                    </div>
								</div>
							</div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>