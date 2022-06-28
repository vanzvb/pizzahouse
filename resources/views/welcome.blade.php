{{-- @extends('layouts.layout')

@section('Pizzas')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="/img/pizzahouse1.png" alt="pizza house logo">
                <div class="title m-b-md">
                    The South's Best Pizzas
                </div>
                <p class="mssg">{{ session('mssg') }}</p>
                <a href="{{ route('pizzas.create') }}">Order Pizza</a><br>
                <a href="{{ route('home') }}">DashBoard</a>
            </div>
        </div>
@endsection --}}


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Donation | blooddonationph.com</title>
    <link rel="shortcut icon" href="/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/images/fav.jpg">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>

<body>
    <header class="continer-fluid ">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i>
                                sales@smarteyeapps.com
                                <span>|</span>
                            </li>
                            <li>
                                <i class="far fa-clock"></i>
                                
                                <?php 
     date_default_timezone_set('Asia/Manila');
     $date = date('m/d/Y h:i:s a', time());
     echo "Service Time"," " , $date;
?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="ulright">
                            <li>
                                <i class="fas fa-cloud-upload-alt"></i>
                                Upload Video
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-user"></i>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-md-3 logo">
                        <img src="/images/logo.jpg" alt="">
                    </div>
                    <div class="col-md-9 nav-col">
                        <nav class="navbar navbar-expand-lg navbar-light">

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About Us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#process">Process</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact US</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/slider/slide-02.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo
                            neque, <br>
                            aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                            sed sagittis at, sagittis quis neque. Praesent.</p>

                        <div class=" vbh">

                            <div class="btn btn-success  bounceInUp"><a href="{{ route('login') }}">Book
                                    Appointment</a></div>
                            <div class="btn btn-success  bounceInUp"><a href="{{ route('login') }}"> Contact US</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/slider/slide-03.jpg" alt="Third slide">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo
                            neque, <br>
                            aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                            sed sagittis at, sagittis quis neque. Praesent.</p>

                        <div class=" vbh">

                            <div class="btn btn-danger  bounceInUp"> Donate Now </div>
                            <div class="btn btn-danger  bounceInUp"> Contact US </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

    <!--*************** About Us Starts Here ***************-->
    <section id="about" class="contianer-fluid about-us">
        <div class="container">
            <div class="row session-title">
                <h2>About Us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
            </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h2>About Blood Doners</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages, and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum.</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some formhumour, or randomised words which don't look even slightly believable. If
                        you are going to use a passage. industry's standard dummy has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>Industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class="col-md-6 image">
                    <img src="/images/about.jpg" alt="">
                </div>
            </div>
        </div>
    </section>



    <!-- ################# Gallery Start Here #######################--->

    <div id="gallery" class="gallery container-fluid">
        <div class="container">
            <div class="row session-title">
                <h2>Checkout Our Gallery</h2>
            </div>
            <div class="gallery-row row">
                <div id="gg-screen"></div>
                <div class="gg-box">
                    <div class="gg-element">
                        <img src="/images/gallery/g1.jpg">

                        <img src="/images/gallery/g2.jpg">

                        <div class="gg-element">
                            <img src="/images/gallery/g3.jpg">
                        </div>
                    </div>

                    <div class="gg-element">
                        <img src="/images/gallery/g4.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="/images/gallery/g5.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="/images/gallery/g6.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="/images/gallery/g7.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="/images/gallery/g8.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="/images/gallery/g9.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="/images/gallery/g10.jpg">
                    </div>


                </div>
            </div>
        </div>
    </div>



    <!-- ################# Donation Process Start Here #######################--->

    <section id="process" class="donation-care">
        <div class="container">
            <div class="row session-title">
                <h2>Donation Process</h2>
                <p>The donation process from the time you arrive center until the time you leave</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="/images/gallery/g1.jpg" alt="">
                        <h4><b>1 - </b>Registration</h4>
                        <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit
                            lobortis</p>
                        <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="/images/gallery/g2.jpg" alt="">
                        <h4><b>2 - </b>Seeing</h4>
                        <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit
                            lobortis</p>
                        <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="/images/gallery/g3.jpg" alt="">
                        <h4><b>3 - </b>Donation</h4>
                        <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit
                            lobortis</p>
                        <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="/images/gallery/g4.jpg" alt="">
                        <h4><b>4 - </b>Save Life</h4>
                        <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit
                            lobortis</p>
                        <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>


        </div>
    </section>




    <!--################### Our Blog Starts Here #######################--->
    <div id="blog" class="blog-container contaienr-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Latest Blog</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut
                    est arcu. Donec hendrerit velit consectetur adipiscing elit.</p>
            </div>
            <div class="row news-row">
                <div class="col-md-6">
                    <div class="news-card">
                        <div class="image">
                            <img src="/images/blog/blog_01.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3>Latest News about Smarteye</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a
                                dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                            <p class="footp">
                                27 Comments <span>/</span>
                                Blog Design <span>/</span>
                                Read More
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="news-card">
                        <div class="image">
                            <img src="/images/blog/blog_02.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3>Apple Launch its New Phone</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a
                                dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                            <p class="footp">
                                27 Comments <span>/</span>
                                Blog Design <span>/</span>
                                Read More
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="news-card">
                        <div class="image">
                            <img src="/images/blog/blog_03.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3>About Windows 10 Update</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a
                                dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                            <p class="footp">
                                27 Comments <span>/</span>
                                Blog Design <span>/</span>
                                Read More
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="news-card">
                        <div class="image">
                            <img src="/images/blog/blog_04.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3>Latest News about Smarteye</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a
                                dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                            <p class="footp">
                                27 Comments <span>/</span>
                                Blog Design <span>/</span>
                                Read More
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--*************** Footer  Starts Here *************** -->
    <footer id="contact" class="container-fluid">
        <div class="container">

            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>Contact Informatins</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>46-29 Indra Street, Southernbank, Tigaione, Toranto, 3006 Canada</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>sales@smarteyeapps.com <br> support@smarteyeapps.com</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>+91 9751791203 <br> +91 9159669599</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">
                    <div class="row no-margin mt-2">
                        <h2>Quick Links</h2>
                        <ul>
                            <li>Home</li>
                            <li>About Us</li>
                            <li>Contacts</li>
                            <li>Pricing</li>
                            <li>Gallery</li>
                            <li>eatures</li>

                        </ul>
                    </div>
                    <div class="row no-margin mt-1">
                        <h2 class="m-t-2">More Products</h2>
                        <ul>
                            <li>Forum PHP Script</li>
                            <li>Edu Smart</li>
                            <li>Smart Event</li>
                            <li>Smart School</li>


                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Quick Message</h4>
                        </div>
                        <div class="form-body">
                            <input type="text" placeholder="Enter Name" class="form-control">
                            <input type="text" placeholder="Enter Mobile no" class="form-control">
                            <input type="text" placeholder="Enter Email Address" class="form-control">
                            <input type="text" placeholder="Your Message" class="form-control">
                            <button class="btn btn-sm btn-primary w-100">Send Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Copyright © <a href="https://www.smarteyeapps.com">Smarteyeapps.com</a> | All right
                            reserved.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 socila-link">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li><a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/plugins/grid-gallery/js/grid-gallery.min.js"></script>
<script src="/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="/js/script.js"></script>

</html>
