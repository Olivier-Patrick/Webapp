

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yalafa</title>
    <meta name="description" content="">
   
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets1/img/favicon.png') }}">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('assets2/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/main.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('assets1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/owl.carousel.min.css' )}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets1/css/slicknav.css')}}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('assets1/css/style.css')}}">
</head>
<body>
    <header>
        <div class="header-area ">
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
                                            <li><a href="Listings.html">Listings</a></li>
                                            <li><a href="#">Pays<i class="fas fa-ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    
                                                    <li><a href="elements.html">Maroc</a></li>
                                                    <li><a href="single_listings.html">Cote d'ivoire</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">FAQ's</a></li>
                                            <li><a href="#">E-commerce<i class="fas fa-ti-angle-down"></i></a>
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
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets2/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
				    @csrf
					<span class="login100-form-title p-b-49">
						Se connecter
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "E-mail est require">
						<span class="label-input100">{{ __('E-Mail') }}</span>
						<input class="input100" type="text" name="username" placeholder="Entrer votre E-mail">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Mot de passe est require">
						<span class="label-input100">{{ __('Mot de passe') }}</span>
						<input class="input100" type="password" name="pass" placeholder="Entrer votre mot de passe">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Mot de passe oublié?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								connexion
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Ou inscrivez-vous
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Ou s'inscrire avec
						</span>

						<a href="#" class="txt2">
							S'inscrire
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('assets2/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets2/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets2/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets2/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets2/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('assets2/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets2/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets2/js/main.js')}}"></script>

	<footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{ asset('assets1/img/footer_logo.png')}}" alt="">
                                </a>
                            </div>
                            <p>
                                Esteem spirit temper too say adieus who <br> direct esteem. It esteems luckily or <br>
                                picture placing drawing.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#">SEO/SEM </a></li>
                                <li><a href="#">Web design </a></li>
                                <li><a href="#">Ecommerce</a></li>
                                <li><a href="#">Digital marketing</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="{{ asset('assets1/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset('assets1/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('assets1/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets1/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets1/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets1/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets1/js/ajax-form.js')}}"></script>
    <script src="{{ asset('assets1/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets1/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('assets1/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets1/js/scrollIt.js')}}"></script>
    <script src="{{ asset('assets1/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset('assets1/js/wow.min.js')}}"></script>
    <script src="{{ asset('assets1/js/nice-select.min.js')}}"></script>
    <script src="{{ asset('assets1/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset('assets1/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets1/js/plugins.js')}}"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="{{ asset('assets1/js/slick.min.js')}}"></script>



    <!--contact js-->
    <script src="{{ asset('assets1/js/contact.js')}}"></script>
    <script src="{{ asset('assets1/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('assets1/js/jquery.form.js')}}"></script>
    <script src="{{ asset('assets1/js/jquery.validate.min.js')}}"></script>
    <script src="js/mail-script.js"></script>


    <script src="{{ asset('assets1/js/main.js')}}"></script>

</body>
</html>
